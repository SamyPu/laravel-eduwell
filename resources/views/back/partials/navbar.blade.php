<div id="sidebar" class="active">
    {{-- background: linear-gradient(-145deg, rgba(219,138,222,1) 0%, rgba(246,191,159,1) 100%) !important; --}}
    <div class="sidebar-wrapper active" style="background: linear-gradient(-145deg, rgba(219,138,222,1) 0%, rgba(246,191,159,1) 100%) !important">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="{{ route("back.index") }}" style="color: white">Laravel Eduwell</a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item {{ request()->routeIs("back.index") ? "active" : "" }}">
                    <a href="{{ route("back.index") }}" class="sidebar-link">
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-title">Page</li>

                <li class="sidebar-item  {{-- has-sub --}} {{ request()->routeIs("titre.index") ? "active" : "" }}">
                    <a href="{{ route("titre.index") }}" class="sidebar-link">
                        <i class="bi bi-stack"></i>
                        <span>Titre</span>
                    </a>
                    {{-- <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{ route("titre.index") }}">All Titre</a>
                        </li>
                    </ul> --}}
                </li>
                <li class="sidebar-item  has-sub {{ request()->routeIs("service.index")||request()->routeIs("service.create") ? "active" : "" }}">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-stack"></i>
                        <span>Service</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{ route("service.create") }}">Create Service</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{ route("service.index") }}">All Service</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  has-sub {{ request()->routeIs("testimonial.index")||request()->routeIs("testimonial.create") ? "active" : "" }}">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-stack"></i>
                        <span>Testimonial</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{ route("testimonial.create") }}">Create Testimonial</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{ route("testimonial.index") }}">All Testimonial</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item {{ request()->routeIs("banner.index") ? "active" : "" }}">
                    <a href="{{ route("banner.index") }}" class="sidebar-link">
                        <i class="bi bi-stack"></i>
                        <span>Banner</span>
                    </a>
                </li>

                <li class="sidebar-item {{ request()->routeIs("map.index") ? "active" : "" }}">
                    <a href="{{ route("map.index") }}" class="sidebar-link">
                        <i class="bi bi-stack"></i>
                        <span>Map</span>
                    </a>
                    {{-- <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{ route("map.index") }}">All Map</a>
                        </li>
                    </ul> --}}
                </li>

                <li class="sidebar-title">
                    <a href="{{ route("template") }}">Exit</a>
                </li>

                <li class="sidebar-title">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <div :href="route('logout')"
                            style="cursor: pointer"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                    </form>
                </li>
            </ul>  {{-- anchor_navbar --}}
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
