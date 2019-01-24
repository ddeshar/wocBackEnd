@extends('backend._layouts.master')

@php
    $title = __('WocBread.permissions');
@endphp

@section('title', $title .' | '. __('WocBread.WocAdmin') )

@section('content')

    @include('backend._layouts._partial.messages._messages')

<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-title-w-btn">
                <h3 class="title"> {{ __('WocAdmin.AvlPer') }} </h3>
                <p><a class="btn btn-primary icon-btn" href="{{ route('users.index') }}"><i class="fa fa-plus"></i> {{ __('WocAdmin.users') }} </a>
                <a class="btn btn-primary icon-btn" href="{{ route('roles.index') }}"><i class="fa fa-plus"></i> {{ __('WocAdmin.Roles') }} </a>
                <a class="btn btn-primary icon-btn" href="{{ route('permissions.create') }}"><i class="fa fa-plus"></i> {{ __('WocAdmin.CreatePer') }} </a></p>
            </div>
            <div class="tile-body">
                <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                    <tr>
                        <th> {{ __('WocAdmin.Permissions') }} </th>
                        <th> {{ __('WocAdmin.Operation') }} </th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($permissions as $permission)
                        <tr>
                            <td>{{ $permission->name }}</td> 
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-primary" href="{{ route('permissions.edit',$permission->id) }}"><i class="fa fa-lg fa-edit"></i></a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy', $permission->id],'style'=>'display:inline']) !!}
                                        {!! Form::button('<i class="fa fa-lg fa-trash"></i>', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}
                                    {!! Form::close() !!}
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