<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
            <p class="app-sidebar__user-name">{{ Auth::user()->name }}</p>
            <p class="app-sidebar__user-designation">Developer</p>
        </div>
    </div>
    <ul class="app-menu">
        <!-- <li><a class="app-menu__item active" href="{{ url('/') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Pages</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{ url('/') }}"><i class="icon fa fa-circle-o"></i> Blank Page</a></li>
                <li><a class="treeview-item" href="{{ url('/') }}"><i class="icon fa fa-circle-o"></i> Login Page</a></li>
                <li><a class="treeview-item" href="{{ url('/') }}"><i class="icon fa fa-circle-o"></i> Lockscreen Page</a></li>
                <li><a class="treeview-item" href="{{ url('/') }}"><i class="icon fa fa-circle-o"></i> User Page</a></li>
            </ul>
        </li> -->

        @foreach(Wocmenu::GenerateMenu(1) as $key => $category)
            <li><a class="app-menu__item" href="{{ url('admin/'. $category->path ) }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">{{ $category->title }}</span></a>
                <!-- @if(count($category->childs))
                    @include('backend._layouts._includes.manageChild',['childs' => $category->childs])
                @endif -->
            </li>
        @endforeach


    </ul>
</aside>