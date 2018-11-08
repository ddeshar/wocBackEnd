@extends('backend._layouts.master')

@section('content')

    @include('backend._layouts._partial.messages._messages')

    {!! Form::open([ 'method' => 'patch', 'route' => ['posts.update',  $datas->id], 'files' => 'true' ]) !!}
        @include('backend.posts._form')
    {!! Form::close() !!}
@endsection

@section('footer_scripts')
    <script src="{!! url('vendor/laravel-filemanager/js/stand-alone-button.js') !!}"></script>
    <script src="{!! url('js/plugins/select2.min.js') !!}"></script>
    <script> 
        $('#lfm').filemanager('image');
        $('#demoSelect').select2();
    </script>
    @include('backend._layouts._partial.js._ckeditor')
    @include('backend._layouts._partial.js._slug')
@endsection