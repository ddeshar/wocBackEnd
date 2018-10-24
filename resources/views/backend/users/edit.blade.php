@extends('backend._layouts.master')

@section('content')

    @include('backend._layouts._partial.messages._messages')

<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <h3 class="tile-title">Edit "{{ $user->name }}" </h3>
            {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
                @include('backend.users._form')
            {!! Form::close() !!}
        </div>
    </div>
</div>


@endsection