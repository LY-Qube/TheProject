<?php

namespace App\Http\Livewire\App;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cookie;
use Livewire\Component;

class Translate extends Component
{
    public string $lang;

    public string $uri;

    public function render(): View
    {
        $this->uri = \Route::currentRouteName();
        return view('livewire.app.translate');
    }

    public function mount()
    {
        $this->putCurrentLang();
    }

    private function putCurrentLang()
    {
        // check user lang
        if ($lang = $this->checkUserLang()) {
            $this->lang = $lang;
        }
        // check cookie lang
        else if ($lang = $this->checkCookieLang()) {
            $this->lang = $lang;
        }
        else {
            $this->lang = $this->checkAppLang();
        }
        app()->setLocale($this->lang);
    }

    // check user lang
    private function checkUserLang()
    {
        if (auth()->check()) {
            return (string) auth()->user()->lang;
        }
    }

    // check cookie lang
    private function checkCookieLang(): string
    {
        return (string) Cookie::get('lang');
    }

    // check app lang
    private function checkAppLang()
    {
        Cookie::queue('lang', config('app.locale'));
        return config('app.locale');
    }

    // change lang value
    public function change(string $lang,string $route)
    {
        if ($this->correctValue($lang)) {
            $this->lang = $lang;
            if (auth()->check()) {
                auth()->user()->update([
                    'lang'  => $this->lang
                ]);
            }
            app()->setLocale($this->lang);
            Cookie::queue('lang', $this->lang);
            return redirect()->route($route);
        }
        return  null;
    }

    // check lang value
    private function correctValue($lang): ?bool
    {
        if ($lang === 'en' || $lang === 'fr') {
            return true;
        }
        return  null;
    }

}
