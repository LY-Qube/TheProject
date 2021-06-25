<div>
    <div class="card">
        @if ($form)
            <div class="card-header">
                <h5>{{ __('access-key/access-key.Create New Access Key') }}</h5>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="save">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="{{ __('access-key/access-key.Email') }}">{{ __('access-key/access-key.Email') }}</label>
                                <input type="email"
                                       title="{{ __('access-key/access-key.Email') }}"
                                       id="{{ __('access-key/access-key.Email') }}"
                                       wire:model.lazy="access_keys.email"
                                       class="form-control @error('access_keys.email') border-danger @enderror"
                                       placeholder="Email">
                                @error('access_keys.email')
                                <div class="col-12">
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="{{ __('access-key/access-key.Job Title') }}">{{ __('access-key/access-key.Job Title') }}</label>
                                <input type="text"
                                       title="{{ __('access-key/access-key.Job Title') }}"
                                       id="{{ __('access-key/access-key.Job Title') }}"
                                       wire:model.lazy="access_keys.job_position"
                                       class="form-control  @error('access_keys.job_position') border-danger @enderror"
                                       placeholder="Job Title :">
                                @error('access_keys.job_position')
                                <div class="col-12">
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="d-none">
                        <input type="submit">
                    </div>
                </form>
            </div>
        @endif
        <div class="card-footer text-right">
            @if ($form)
                <button type="submit" wire:click.prevent="save"
                        wire:loading.attr="disabled"
                        class="btn btn-teal btn-labeled  btn-labeled-right">
                    <b>
                        <div wire:loading.remove="save">
                            <i class="icon-plus3"></i>
                        </div>
                        <div wire:loading="save">
                            <i class="icon-spinner spinner"></i>
                        </div>
                    </b>
                    <span>
                        <div  wire:loading.remove="save">
                            {{  __('access-key/access-key.Create New Access Key')  }}
                        </div>
                        <div  wire:loading="save">
                            {{ __('access-key/access-key.Creating New Access Key ...')  }}
                        </div>
                    </span>

                </button>
            @else
                <button type="submit" wire:click.prevent="form" wire:key="form"
                        class="btn btn-teal btn-labeled btn-labeled-right">
                    <b>
                        <div wire:loading.remove="form">
                            <i class="icon-plus3"></i>
                        </div>
                        <div wire:loading="form">
                            <i class="icon-spinner spinner"></i>
                        </div>
                    </b>
                    <div wire:loading.remove="form">
                        {{  __('access-key/access-key.Create New Access Key')  }}
                    </div>
                    <div wire:loading="form">
                        {{  __('access-key/access-key.Creation Form ...')  }}
                    </div>
                </button>
            @endif
        </div>
    </div>
</div>
