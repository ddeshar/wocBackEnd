@extends('backend._layouts.master')

@section('content')

    @include('backend._layouts._partial.messages._messages')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('group.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Add Group</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Group</th>
                                <th>Value</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($groups as $group)
                                <tr>
                                    <td>{{ $group->id }}</td>
                                    <td>{{ $group->name }}</td>
                                    <td>{{ $group->value }}</td>
                                    <td>
                                        <a class="btn btn-sm btn-info" href="{{ route('group.edit', ['id' => $group->id]) }}">Edit</a>
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['group.destroy', $group->id],'style'=>'display:inline' ]) !!}
                                            {{ Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-sm btn-danger'] )  }}
                                        {!! Form::close() !!}

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
@endsection

@section('footer_scripts')
    <!-- Data table plugin-->
    <script type="text/javascript" src="{{ asset('js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <!-- page script -->
    @include('backend._layouts._partial.js._datatable')  
@endsection