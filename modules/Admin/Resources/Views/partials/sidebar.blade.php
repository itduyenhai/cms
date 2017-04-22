<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
<div class="page-sidebar navbar-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->
    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">

        {{-- DASHBOARD --}}
        <li class="nav-item start active">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-home" aria-hidden="true"></i>
                <span class="title">Dashboard</span>
                <span class="selected"></span>
                <span class="arrow"></span>
            </a>
        </li>

        {{-- MANAGER USERS --}}
        <li class="nav-item open">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-users" aria-hidden="true"></i>
                <span class="title">Quản lý người dùng</span>
                <span class="arrow open"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item  active open">
                    <a href="#" class="nav-link ">
                        <span class="title">Người dùng</span>
                        <span class="badge badge-info">2</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="#" class="nav-link ">
                        <span class="title">Vai trò</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="#" class="nav-link ">
                        <span class="title">Quyền hạn</span>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
    <!-- END SIDEBAR MENU -->
</div>
