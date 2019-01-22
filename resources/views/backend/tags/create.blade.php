@extends('backend._layouts.master')

@section('content')

    @include('backend._layouts._partial.messages._messages')

    {!! Form::open([ 'route' => 'tags.store', 'method' => 'POST']) !!}
        @include('backend.tags._form')
    {!! Form::close() !!}
@endsection