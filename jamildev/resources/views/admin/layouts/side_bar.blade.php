
<div class="wui-side-menu open pinned" data-wui-theme="dark">
    <div class="wui-side-menu-header">
        <a href="#" class="wui-side-menu-trigger"><i class="fa fa-bars"></i></a>
        <a href="#" class="wui-side-menu-pin-trigger">
            <i class="fa fa-thumb-tack"></i>
        </a>
    </div>
    <ul class="wui-side-menu-items">
        <li>
            <a href="{{route('admin')}}" class="wui-side-menu-item @yield('activity1')">
                <i class="box-ico fa fa-music fa-fw"></i>
                <span class="box-title">Home</span>
            </a>
        </li>
        <li>
            <a href="{{route('projects')}}" class="wui-side-menu-item @yield('activity2')">
                <i class="box-ico fa fa-list-ol fa-fw"></i>
                <span class="box-title">Projects</span>
            </a>
        </li>
        <li>
            <a href="{{route('messages')}}" class="wui-side-menu-item @yield('activity3')">
                <i class="box-ico fa fa-users fa-fw"></i>
                <span class="box-title">Messages</span>
            </a>
        </li>
        <li>
            <a href="{{route('skills')}}" class="wui-side-menu-item @yield('activity4')">
                <i class="box-ico fa fa-list-alt fa-fw"></i>
                <span class="box-title">Skills</span>
            </a>
        </li>
        <li>
            <a href="{{route('project_category')}}" class="wui-side-menu-item @yield('activity5')">
                <i class="box-ico fa fa-list-alt fa-fw"></i>
                <span class="box-title">Project Category</span>
            </a>
        </li>
        <li>
            <a href="{{route('projects')}}" class="wui-side-menu-item @yield('activity6')">
                <i class="box-ico fa fa-list-alt fa-fw"></i>
                <span class="box-title">Projects</span>
            </a>
        </li>
        <li>
            <a href="{{route('site')}}" class="wui-side-menu-item">
                <i class="box-ico fa fa-search fa-fw"></i>
                <span class="box-title">Go To Site</span>
            </a>
        </li>
        <li>
{{--            <a href="#" class="wui-side-menu-item">--}}
{{--                <i class="box-ico fa fa-cog fa-fw"></i>--}}
{{--                <span class="box-title">Settings</span>--}}
{{--            </a>--}}

                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="box-ico fa fa-sign-out fa-fw"></i>
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

        </li>
    </ul>
</div>
<div class="wui-content">
    <!--div class="wui-content-header">
        <a href="#" class="wui-side-menu-trigger"><i class="fa fa-bars"></i></a>
        <span class="wui-title">name</span>
    </div-->
    <div class="wui-content-main">
