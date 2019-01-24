@extends('backend._layouts.master')

@php
    $title = __('WocBread.tagEdit');
@endphp

@section('title', $title .' | '. __('WocBread.WocAdmin') )

@section('content')

    @include('backend._layouts._partial.messages._messages')
    
    {!! Form::open([ 'method' => 'patch', 'route' => ['tags.update',  $datas->id]]) !!}
        @include('backend.tags._form')
    {!! Form::close() !!}
@endsection