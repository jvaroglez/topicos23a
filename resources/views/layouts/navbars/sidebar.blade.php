<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a class="simple-text logo-mini"> <i class="tim-icons icon-laptop"></i></a>
            <a href="{{ route('home') }}" class="simple-text logo-normal">{{ __('Dashboard') }}</a>
        </div>
        <ul class="nav">
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="tim-icons icon-bullet-list-67"></i>
                    <span class="nav-link-text" >{{ __('Admin') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'users') class="active " @endif>
                            <a href="users">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ __('Users') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'clients') class="active " @endif>
                            <a href="client">
                                <i class="tim-icons icon-satisfied"></i>
                                <p>{{ __('Clients') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'products') class="active " @endif>
                            <a href="product">
                                <i class="tim-icons icon-cart"></i>
                                <p>{{ __('Products') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'providers') class="active " @endif>
                            <a href="provider">
                                <i class="tim-icons icon-delivery-fast"></i>
                                <p>{{ __('Providers') }}</p>
                            </a>
                        </li>
                        <li >
                            <a href="{{ route('profile.edit')  }}">
                                <i class="tim-icons icon-badge"></i>
                                <p>{{ __('Admin Profile') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>


            <li @if ($pageSlug == 'icons') class="active " @endif>
                <a href="{{ route('pages.icons') }}">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ __('Icons') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'maps') class="active " @endif>
                <a href="{{ route('pages.maps') }}">
                    <i class="tim-icons icon-pin"></i>
                    <p>{{ __('Maps') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'notifications') class="active " @endif>
                <a href="{{ route('pages.notifications') }}">
                    <i class="tim-icons icon-bell-55"></i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'tables') class="active " @endif>
                <a href="{{ route('pages.tables') }}">
                    <i class="tim-icons icon-puzzle-10"></i>
                    <p>{{ __('Table List') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'typography') class="active " @endif>
                <a href="{{ route('pages.typography') }}">
                    <i class="tim-icons icon-align-center"></i>
                    <p>{{ __('Typography') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'rtl') class="active " @endif>
                <a href="{{ route('pages.rtl') }}">
                    <i class="tim-icons icon-world"></i>
                    <p>{{ __('RTL Support') }}</p>
                </a>
            </li>
            <li class=" {{ $pageSlug == 'upgrade' ? 'active' : '' }} bg-info">
                <a href="{{ route('pages.upgrade') }}">
                    <i class="tim-icons icon-spaceship"></i>
                    <p>{{ __('Upgrade to PRO') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
