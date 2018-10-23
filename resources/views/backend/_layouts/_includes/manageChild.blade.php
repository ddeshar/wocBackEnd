<ul class="treeview-menu">
    @foreach($childs as $child)
        <li><a class="treeview-item" href="{{ url('/') }}"><i class="icon fa fa-circle-o">{{ $child->title_th }}</a>
            @if(count($child->childs))
                @include('backend._layouts._includes.manageChild',['childs' => $child->childs])
            @endif
        </li>
    @endforeach
</ul>