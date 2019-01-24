@extends('backend._layouts.master')

@php
    $title = __('WocBread.userCreate');
@endphp

@section('title', $title .' | '. __('WocBread.WocAdmin') )

@section('content')

    @include('backend._layouts._partial.messages._messages')


<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <h3 class="tile-title">{{ __('WocAdmin.CreateUser') }}</h3>
            {!! Form::open(['route' => 'users.store','method'=>'POST']) !!}
                @include('backend.users._form')
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection