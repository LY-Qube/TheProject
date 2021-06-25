<div class="content-wrapper">
    <!-- Inner content -->
    <div class="content-inner">

        <livewire:layouts.header-page-full :data="$data"/>

        <!-- Content area -->
        <div class="content">
            <!-- Access key Create -->
            <livewire:access-key.access-key-create />
            <!-- /Access key Create -->
            <!-- Access keys list -->
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">{{ __('access-key/access-key.Access Keys') }}</h5>
                </div>

                <table class="table datatable-show-all">
                    <thead>
                    <tr>
                        <th>{{ __('access-key/access-key.Creator') }}</th>
                        <th>{{ __('access-key/access-key.Creator') }}</th>
                        <th>{{ __('access-key/access-key.Job Title') }}</th>
                        <th>{{ __('access-key/access-key.Created Date') }}</th>
                        <th class="text-center">{{ __('access-key/access-key.Actions') }}</th>
                    </tr>
                    </thead>
                    <tbody wire:init="keys">

                    @forelse  ($keys as $key)
                        <tr>
                            <td class="media">
                                <div class="mr-3">
                                    <a href="#">
                                        <img src="{{ asset($key->user->profile_image) }}" class="rounded-circle"
                                             width="40"
                                             height="40"
                                             title="{{ $key->user->full_name }}"
                                             alt="{{ $key->user->full_name }}">
                                    </a>
                                </div>

                                <div class="media-body">
                                    <div class="media-title font-weight-semibold">{{ $key->user->full_name }}</div>
                                    <span class="text-muted">{{ $key->user->job_position }}</span>
                                </div>

                            </td>
                            <td>{{ $key->email }}</td>
                            <td>{{ $key->job_position }}</td>
                            <td>{{ \Carbon\Carbon::parse($key->created_at)->format('d m y') }}</td>
                            <td class="text-center">
                                <div class="list-icons">
                                    <div class="dropdown">
                                        <a href="#"
                                           class="list-icons-item"
                                           data-toggle="dropdown">
                                            <div wire:loading.remove="sendAgain('{{$key->id}}'), delete('{{$key->id}}')"
                                                 >
                                                <i class="icon-menu9"></i>
                                            </div>
                                            <div wire:loading="sendAgain('{{$key->id}}'), delete('{{$key->id}}')"
                                                 >
                                                <i class="icon-spinner spinner"></i>
                                            </div>

                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#"
                                               wire:click.prevent="sendAgain('{{$key->id}}')"
                                               class="dropdown-item">
                                                <i class="icon-mail5"></i> {{ __('access-key/access-key.Send Again') }}
                                            </a>
                                            <a href="#" wire:click.prevent="delete('{{$key->id}}')"
                                               class="dropdown-item text-danger">
                                                <i class="icon-trash"></i> {{ __('access-key/access-key.Delete') }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        @if ($empty)
                            <tr><td colspan="5" class="text-center">{{ __('access-key/access-key.no data') }}</td></tr>
                        @else
                            <tr><td colspan="5" class="text-center"><i class="icon-spinner spinner"></i></td></tr>
                        @endif

                    @endforelse

                    </tbody>
                </table>
            </div>
            <!-- /page length options -->
        </div>
        <!-- /content area -->
        <x-layouts.app-footer></x-layouts.app-footer>
    </div>
</div>
