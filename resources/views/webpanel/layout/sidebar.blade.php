<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('webpanel') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Webpanel <sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    @php
        $menu = \App\Models\Menu::where('status', 1)->get();
    @endphp
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('webpanel/dashboard') }}">
            <i class="fas fa-home"></i>
            <span>Home</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>
    <!-- Nav Item -->
    @foreach ($menu as $v)
        @if ($v->name == 'SEO')
            @if (Auth::user()->type == 'super')
                <li class="nav-item">
                    <a class="nav-link" href="{{ url("$v->url") }}">
                        {!! $v->icon !!}
                        <span>{{ $v->name }}</span>
                    </a>
                </li>
            @endif
        @else
            <li class="nav-item">
                <a class="nav-link" href="{{ url("$v->url") }}">
                    {!! $v->icon !!}
                    <span>{{ $v->name }}</span>
                </a>
            </li>
        @endif
    @endforeach

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Setting
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    @if (Auth::user()->type == 'super' || Auth::user()->type == 'admin')
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-toggle="collapse" href="#collapseSetting" role="button"
                aria-expanded="false" aria-controls="collapseSetting">
                <i class="fas fa-cog"></i>
                <span>Setting</span>
            </a>
            <div class="collapse" id="collapseSetting">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Setting</h6>
                    @if (Auth::user()->type == 'super')
                        <a class="collapse-item" href="{{ url('webpanel/user') }}">Users</a>
                        <a class="collapse-item" href="{{ url('webpanel/menu') }}">Menu</a>
                        <a class="collapse-item" href="{{ url('webpanel/dashboard/task') }}">Task</a>
                    @elseif(Auth::user()->type == 'admin')
                        <a class="collapse-item" href="{{ url('webpanel/user') }}">Users</a>
                    @endif

                </div>
            </div>
        </li>
    @endif
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->
