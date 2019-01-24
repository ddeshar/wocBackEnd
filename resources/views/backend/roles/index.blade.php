@extends('backend._layouts.master')

@php
    $title = __('WocBread.roles');
@endphp

@section('title', $title .' | '. __('WocBread.WocAdmin') )

@section('content')

    @include('backend._layouts._partial.messages._messages')

<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-title-w-btn">
                <h3 class="title"> {{ __('WocAdmin.roleManage') }} </h3>
                @can('role-create')
                <p><a class="btn btn-primary icon-btn" href="{{ route('roles.create') }}"><i class="fa fa-plus"></i> {{ __('WocAdmin.createRoles') }} </a></p>
                @endcan
            </div>
            <div class="tile-body">
                <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                    <tr>
                        <th> {{ __('WocAdmin.No') }} </th>
                        <th> {{ __('WocAdmin.Name') }} </th>
                        <th width="280px"> {{ __('WocAdmin.Action') }} </th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($roles as $key => $role)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $role->name }}</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}"><i class="fa fa-lg fa-eye"></i></a>
                                    @can('role-edit')
                                        <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}"><i class="fa fa-lg fa-edit"></i></a>
                                    @endcan
                                    @can('role-delete')
                                        {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                            {!! Form::button('<i class="fa fa-lg fa-trash"></i>', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}
                                        {!! Form::close() !!}
                                    @endcan
                                </div>
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