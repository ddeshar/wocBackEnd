@extends('backend._layouts.master')

@php
    $title = __('WocBread.postCreate');
@endphp

@section('title', $title .' | '. __('WocBread.WocAdmin') )

@section('header_styles')
<link rel="stylesheet" href="{!! url('backend/plugins/datetimepicker/bootstrap-datetimepicker.css') !!}">
@endsection

@section('content')

    @include('backend._layouts._partial.messages._messages')

    {!! Form::open([ 'route' => 'posts.store', 'method' => 'POST', 'files' => 'true']) !!}
        @include('backend.posts._form')
    {!! Form::close() !!}

@endsection

@section('footer_scripts')
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js')}} "></script>
    <script src="{!! url('backend/plugins/datetimepicker/bootstrap-datetimepicker.js') !!}"></script>
    <script src="{!! url('backend/vendor/laravel-filemanager/js/lfm.js') !!}"></script>
    <script src="{!! url('backend/js/plugins/select2.min.js') !!}"></script>
    <script> 
        $('#lfm').filemanager('image');
        $('#demoSelect').select2();
    </script>
    @include('backend._layouts._partial.js._ckeditor')
    @include('backend._layouts._partial.js._slug')
@endsection