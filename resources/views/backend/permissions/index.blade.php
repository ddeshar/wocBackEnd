@extends('backend._layouts.master')

@section('content')

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-title-w-btn">
                <h3 class="title">Available Permissions</h3>
                <p><a class="btn btn-primary icon-btn" href="{{ route('users.index') }}"><i class="fa fa-plus"></i>Users</a>
                <a class="btn btn-primary icon-btn" href="{{ route('roles.index') }}"><i class="fa fa-plus"></i>Roles</a>
                <a class="btn btn-primary icon-btn" href="{{ route('permissions.create') }}"><i class="fa fa-plus"></i>Create New Permission</a></p>
            </div>
            <div class="tile-body">
                <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                    <tr>
                        <th>Permissions</th>
                        <th>Operation</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($permissions as $permission)
                        <tr>
                            <td>{{ $permission->name }}</td> 
                            <td>
                            <a href="{{ route('permissions.edit',$permission->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                            {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id] ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}

                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer_scripts')
    <!-- Data table plugin-->
    <script type="text/javascript" src="{{ asset('js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endsection