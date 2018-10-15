@extends('backend._layouts.master')

@section('content')

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif


<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <h3 class="tile-title">Create New User</h3>
            {!! Form::open(['route' => 'users.store','method'=>'POST']) !!}
                @include('backend.users._form')
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection