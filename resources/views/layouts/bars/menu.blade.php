<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
        </a>

    </li>
    <li class="nav-item">
        <a class="nav-link" href="#navbar-customer" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-customer">
            <i class="ni ni-diamond"></i>
            <span class="nav-link-text" >{{ __('Master Management') }}</span>
        </a>

        <div class="collapse" id="navbar-customer">
            <ul class="nav nav-sm flex-column">
                @if (Auth::user()->hasRole("Admin"))
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('master.user_management')}}">
                            {{ __('User Management') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('master.user_management')}}">
                            {{ __('Customer Management') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('master.user_management')}}">
                            {{ __('Employee Management') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('master.user_management')}}">
                            {{ __('Company Management') }}
                        </a>
                    </li>
                @endif
                @if (Auth::user()->hasAnyRole(["Admin", "Manager", "ST_User"]))
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            {{ __('Son Thanh Company Data') }}
                        </a>
                    </li>
                @endif
                @if (Auth::user()->hasAnyRole(["Admin", "Manager", "TSV_User"]))
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            {{ __('Tsv Company Data') }}
                        </a>
                    </li>
                @endif
            </ul>
        </div>

    </li>
    @if (Auth::user()->hasAnyRole(["Admin", "Manager", "ST_User"]))
        <li class="nav-item">
            <a class="nav-link " href="#navbar-st" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-st">
                <i class="ni ni-calendar-grid-58"></i>
                <span class="nav-link-text">{{ __('ST Data') }}</span>
            </a>

            <div class="collapse " id="navbar-st">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            {{ __('Invoice') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            {{ __('Task Management Report') }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            {{ __('Revenue Report') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            {{ __('Finance Report') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            {{ __('Cash Book Report') }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            {{ __('Trade Union Report') }}
                        </a>
                    </li>

                </ul>
            </div>
        </li>
    @endif
    @if (Auth::user()->hasAnyRole(["Admin", "Manager", "TSV_User"]))
        <li class="nav-item">
            <a class="nav-link " href="#navbar-tsv" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-tsv">
                <i class="ni ni-calendar-grid-58" ></i>
                <span class="nav-link-text" >{{ __('Tsv Data') }}</span>
            </a>

            <div class="collapse " id="navbar-tsv">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            {{ __('Invoice') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            {{ __('Task Management Report') }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            {{ __('Revenue Report') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            {{ __('Finance Report') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            {{ __('Cash Book Report') }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            {{ __('Trade Union Report') }}
                        </a>
                    </li>

                </ul>
            </div>
        </li>
    @endif
    <li class="nav-item">
        <a class="nav-link" href="#navbar-user" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-user">
            <i class="ni ni-single-02" ></i>
            <span class="nav-link-text">{{ __('Profile') }}</span>
        </a>

        <div class="collapse" id="navbar-user">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile.show') }}">
                        {{ __('Profile') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile.edit') }}">
                        {{ __('Setting') }}
                    </a>
                </li>
            </ul>
        </div>
    </li>
</ul>
