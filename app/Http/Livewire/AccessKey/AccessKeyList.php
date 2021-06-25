<?php

namespace App\Http\Livewire\AccessKey;

use App\Notifications\AccessKeyNotification;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class AccessKeyList extends Component
{
    protected $listeners = ['freshAccessKeysList' => 'keys'];

    public bool $empty;

    public array $data = [
        'title' => '<span class="font-weight-semibold">Home</span> - Access Keys',
        'urls' => [
            'access-key'
        ],
        'breadcrumb' => [
            '<i class="icon-key mr-2"></i> Access Keys'
        ],
        'last-breadcrumb' => 'Access Keys'
    ];

    public $keys = [];

    public function __construct()
    {
        parent::__construct();
        if (request()->user()->cannot('viewAny', \App\Models\AccessKey::class)) {
            abort(403);
        }
    }

    public function render(): View
    {
        return view('livewire.access-key.access-key-list');
    }


    public function keys()
    {
        sleep(2);
        $this->keys = \App\Models\AccessKey::orderBy('id', 'desc')->get();
        if (!isset($keys[0])) {
            $this->empty = true;
        }
    }

    public function delete(int $id): void
    {
        // delete key
        $key = \App\Models\AccessKey::find($id);
        if ($key) {
            $key->delete();
            // success flash
            $this->emitTo('layouts.alert-success', 'success', __('access-key/access-key.delete_success'));
            // emit list
            $this->emitSelf('freshAccessKeysList');
        }
    }

    public function sendAgain(int $id)
    {
        $key = \App\Models\AccessKey::find($id);
        if ($key) {
            $key->notify(new AccessKeyNotification());
            // success flash
            $this->emitTo('layouts.alert-success', 'success', __('access-key/access-key.send_again_success'));
        }
    }

}
