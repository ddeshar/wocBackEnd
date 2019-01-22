@extends('backend._layouts.master')

@section('content')

    @include('backend._layouts._partial.messages._messages')
    
    {!! Form::open([ 'method' => 'patch', 'route' => ['tags.update',  $datas->id]]) !!}
        @include('backend.tags._form')
    {!! Form::close() !!}
@endsection