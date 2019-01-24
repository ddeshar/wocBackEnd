@extends('backend._layouts.master')

@php
    $title = __('WocBread.UserEdit');
@endphp

@section('title', $title .' | '. __('WocBread.WocAdmin') )

@section('content')

    @include('backend._layouts._partial.messages._messages')

<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <h3 class="tile-title">{{ __('WocAdmin.edit') }} "{{ $user->name }}" </h3>
            {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
                @include('backend.users._form')
            {!! Form::close() !!}
        </div>
    </div>
</div>


@endsection