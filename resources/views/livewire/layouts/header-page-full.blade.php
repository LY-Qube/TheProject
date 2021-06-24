<div>
@if (isset($data['title']))
    <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-lg-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-left52 mr-2"></i> {!! $data['title'] !!}
                    </h4>
                </div>
            </div>
            <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        @foreach($data['breadcrumb'] as $key => $d)
                            <a href="{{ $data['urls'][$key] }}" class="breadcrumb-item">{!! $d !!}</a>
                        @endforeach
                        <span class="breadcrumb-item active">{{ $data['last-breadcrumb'] }}</span>
                    </div>
                </div>
            </div>
        @if (isset($data['navigation']))
            <!-- Profile navigation -->
                <div class="navbar navbar-expand-lg navbar-light border-top">
                    <div class="text-center d-lg-none w-100">
                        <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse"
                                data-target="#navbar-second">
                            <i class="icon-menu7 mr-2"></i>
                            Profile navigation
                        </button>
                    </div>

                    <div class="navbar-collapse collapse" id="navbar-second">
                        <ul class="nav navbar-nav">
                            <li class="nav-item">
                                <a href="#" class="navbar-nav-link active" data-toggle="tab">
                                    <i class="icon-menu7 mr-2"></i>
                                    Activity
                                </a>
                            </li>
                            @if ($user->id === auth()->id())
                                <li class="nav-item">
                                    <a href="{{ route('setting') }}" class="navbar-nav-link">
                                        <i class="icon-cog3 mr-2"></i>
                                        Settings
                                    </a>
                                </li>
                            @endif
                        </ul>
                        <ul class="navbar-nav ml-lg-auto">
                            <li class="nav-item">
                                <a href="#" class="navbar-nav-link">
                                    <i class="icon-collaboration mr-2"></i>
                                    Friends
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="navbar-nav-link">
                                    <i class="icon-lock mr-2"></i>
                                    Roles
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /profile navigation -->
            @endif
        </div>
        <!-- /page header -->
    @endif
</div>
