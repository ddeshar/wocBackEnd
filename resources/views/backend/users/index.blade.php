@extends('backend._layouts.master')

@php
    $title = __('WocBread.users');
@endphp

@section('title', $title .' | '. __('WocBread.WocAdmin') )

@section('content')

    @include('backend._layouts._partial.messages._messages')

<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-title-w-btn">
                <h3 class="title">{{ __('WocAdmin.userManage') }}</h3>
                <p><a class="btn btn-primary icon-btn" href="{{ route('users.create') }}"><i class="fa fa-plus"></i>{{ __('WocAdmin.CreateUser') }}</a></p>
            </div>
            <div class="tile-body">
                <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                    <tr>
                        <th>{{ __('WocAdmin.No') }}</th>
                        <th>{{ __('WocAdmin.Name') }}</th>
                        <th>{{ __('WocAdmin.Email') }}</th>
                        <th>{{ __('WocAdmin.Roles') }}</th>
                        <th>{{ __('WocAdmin.Action') }}</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($data as $key => $user)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                            @if(!empty($user->getRoleNames()))
                                @foreach($user->getRoleNames() as $v)
                                <label class="badge badge-success">{{ $v }}</label>
                                @endforeach
                            @endif
                            </td>
                            <td>
                            <div class="btn-group">
                                <a class="btn btn-info" href="{{ route('users.show',$user->id) }}"><i class="fa fa-lg fa-eye"></i></a>
                                <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}"><i class="fa fa-lg fa-edit"></i></a>
                                {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                                    {!! Form::button('<i class="fa fa-lg fa-trash"></i>', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}
                                {!! Form::close() !!}
                            </div>

                            </td>
                        </tr>
                    @endforeach

                    {!! $data->render() !!}

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer_scripts')
    <!-- Data table plugin-->
    <script type="text/javascript" src="{{ asset('backend/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endsection