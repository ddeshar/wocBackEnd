@extends('backend._layouts.master')

@section('content')

    @include('backend._layouts._partial.messages._messages')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('group.create') }}" class="btn btn-success"><i class="fa fa-plus"></i>  {{ __('WocAdmin.addGroup') }} </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th> {{ __('WocAdmin.No') }} </th>
                                <th> {{ __('WocAdmin.group') }} </th>
                                <th> {{ __('WocAdmin.Value') }} </th>
                                <th> {{ __('WocAdmin.Action') }} </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($groups as $group)
                                <tr>
                                    <td>{{ $group->id }}</td>
                                    <td>{{ $group->name }}</td>
                                    <td>{{ $group->value }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-primary" href="{{ route('group.edit',$group->id) }}"><i class="fa fa-lg fa-edit"></i></a>
                                            {!! Form::open(['method' => 'DELETE','route' => ['group.destroy', $group->id],'style'=>'display:inline']) !!}
                                                {!! Form::button('<i class="fa fa-lg fa-trash"></i>', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}
                                            {!! Form::close() !!}
                                        </div>
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