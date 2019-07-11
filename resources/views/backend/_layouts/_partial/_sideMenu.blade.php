<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
            <p class="app-sidebar__user-name">{{ Auth::user()->name }}</p>
            <p class="app-sidebar__user-designation">Developer</p>
        </div>
    </div>
    <ul class="app-menu">

        <li><a class="app-menu__item" href="{{ url('admin/') }}"><i class="app-menu__icon fas fa-tachometer-alt"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fab fa-file-text"></i><span class="app-menu__label">posts</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{ url('admin/posts') }}"><i class="icon fab fa-circle-o"></i> posts</a></li>
                <li><a class="treeview-item" href="{{ url('admin/categories') }}"><i class="icon fab fa-circle-o"></i> categories</a></li>
            </ul>
        </li>
        <li><a class="app-menu__item" href="{{ url('admin/banners') }}"><i class="app-menu__icon fab fa-dashboard"></i><span class="app-menu__label">banner</span></a></li>
        <li><a class="app-menu__item" href="{{ url('admin/pages') }}"><i class="app-menu__icon fab fa-dashboard"></i><span class="app-menu__label">pages</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fab fa-file-text"></i><span class="app-menu__label">users</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{ url('admin/users') }}"><i class="icon fab fa-circle-o"></i> users</a></li>
                <li><a class="treeview-item" href="{{ url('admin/roles') }}"><i class="icon fab fa-circle-o"></i> roles</a></li>
                <li><a class="treeview-item" href="{{ url('admin/permissions') }}"><i class="icon fab fa-circle-o"></i> permissions</a></li>
            </ul>
        </li>
        <li><a class="app-menu__item" href="{{ url('admin/members') }}"><i class="app-menu__icon fab fa-dashboard"></i><span class="app-menu__label">members</span></a></li>
        <hr>
        <li><a class="app-menu__item" href="{{ url('admin/setting') }}"><i class="app-menu__icon fab fa-cog"></i><span class="app-menu__label">setting</span></a></li>
        <li><a class="app-menu__item" href="{{ url('admin/setting') }}"><i class="app-menu__icon fab fa-cog"></i><span class="app-menu__label">setting</span></a></li>
        @role('superAdmin')
            <li><a class="app-menu__item" href="{{ url('admin/generator') }}"><i class="app-menu__icon fab fa-refresh"></i><span class="app-menu__label">generator</span></a></li>
        @endrole
    </ul>
</aside>