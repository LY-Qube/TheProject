<?php

namespace App\Http\Livewire\AccessKey;

use App\Notifications\AccessKeyNotification;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class AccessKeyCreate extends Component
{

    public bool $form = false;

    public \App\Models\AccessKey $access_keys;

    protected array $rules = [
        'access_keys.email'          => "required|string|email|max:255|unique:access_keys",
        'access_keys.job_position'    => "required|string|max:255",
    ];

    public function __construct()
    {
        parent::__construct();
        if (request()->user()->cannot('viewAny', \App\Models\AccessKey::class)) {
            abort(403);
        }
    }

    public function render(): View
    {
        return view('livewire.access-key.access-key-create');
    }

    public function mount(): void
    {
        $this->access_keys = new \App\Models\AccessKey();
    }

    public function form(): void
    {
        $this->form = true;
    }

    public function save(): void
    {
        // validate
        $this->validate();
        // save
        $this->access_keys->access_key = \Str::random();
        $this->access_keys->user_id = auth()->id();
        $this->access_keys->save();
        // session flash
        $this->emitTo('layouts.alert-success','success', __('access-key/access-key.create_success'));
        // TODO::Notification
        $this->access_keys->notify(new AccessKeyNotification());
        // fresh list access keys
        $this->emitTo('access-key.access-key-list','freshAccessKeysList',['key' => $this->access_keys]);
        // empty data
        $this->access_keys =  new \App\Models\AccessKey();
        // form false
        $this->form = false;
    }

}
