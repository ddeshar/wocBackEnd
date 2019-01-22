@extends('backend._layouts.master')

@section('title', '')

@section('header_styles')

@endsection

@section('content')
    {!! Form::open([ 'method' => 'patch', 'route' => ['categories.update',  $Category->id]]) !!}
        @include('backend.categories._form')
    {!! Form::close() !!}
@endsection

@section('footer_scripts')
<script type="text/javascript">    
    $("#title").keyup(function(){
        var str = $(this).val();
        var trims = $.trim(str)
        var slug = trims.replace(/[^a-z0-9]/gi, '-').replace(/-+/g, '-').replace(/^-|-$/g, '')
        $("#slug").val(slug.toLowerCase())
    })
</script>
@endsection