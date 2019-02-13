@extends('backend._layouts.master')
<?php $title = $setting->display_name; ?>

@section('title', $title.' | E-Filing Backend')

@php
    $title = __('WocBread.settingEdit');
@endphp

@section('title', $title .' | '. __('WocBread.WocAdmin') )

@section('header_styles')

<link rel="stylesheet" href="{!! url('backend/plugins/datetimepicker/bootstrap-datetimepicker.css') !!}">
@endsection

@section('content')

{!! Form::open([ 'method' => 'patch', 'route' => ['setting.update',  $setting->id], 'files' => 'true' ]) !!}

<section class="content">
    <div class="container-fluid">
        @include('backend._layouts._partial.messages._messages')
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
                                @if ($setting->type == "text")
                                    {!! Form::label('group', $setting->display_name.' (TH)') !!}
                                    {!! Form::text('value', $setting->value, ['class' => 'form-control']) !!}
                                @elseif($setting->type == "text_area")
                                    {!! Form::label('group', $setting->display_name.' (TH)') !!}
                                    {!! Form::textarea('value', isset($setting->value) ? $setting->value : null, ['class' => 'form-control','id' => 'editoren']); !!}
                                @elseif($setting->type == "code_editor")

                                    {!! Form::label('group', $setting->display_name.' (TH)') !!}
                                    {!! Form::textarea('value', isset($setting->value) ? $setting->value : null, ['class' => 'form-control','id' => 'editoren']); !!}

                                @elseif($setting->type == "image" || $setting->type == "file")
                                    <div class="form-group">
                                        {!! Form::label("avatar","picture") !!}
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <a id="img1" data-input="thumbnail4" data-preview="imgth" class="btn btn-primary">
                                                <i class="fa fa-picture-o"></i> Picture
                                                </a>
                                            </span>
                                            {!! Form::text('value', $setting->value,  ['class' => 'form-control', 'id' => 'thumbnail4']) !!}
                                        </div>
                                        <img id="imgth" src="{{asset((isset($setting) && $setting->value!='')? $setting->value : 'images/unknown.png')}}" style="margin-top:15px;max-width:100%;">
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-2">
                                {!! Form::label('group', 'Group') !!}
                                <select class="form-control group_select" name="{{ $setting->key }}_group">
                                        @foreach($groups as $group)
                                        <option value="{{ $group }}" {!! $setting->group == $group ? 'selected' : '' !!}>{{ $group }}</option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        {!! Form::submit('ตกลง', ['class' => 'btn btn-primary btn-lg btn-block']) !!}
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
    {!! Form::close() !!}
{!! Form::close() !!}

@endsection

@section('footer_scripts')


    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js')}} "></script>
    <script src="{!! url('backend/plugins/datetimepicker/bootstrap-datetimepicker.js') !!}"></script>
    <script src="{!! url('backend/vendor/laravel-filemanager/js/stand-alone-button.js') !!}"></script>
    <script>
        $('#img1').filemanager('image');
        $('#img2').filemanager('image');    
    </script>
    @if($setting->type == "code_editor")
        @include('backend._layouts._partial.js._ckeditor')
    @endif
    @include('backend._layouts._partial.js._ckeditor')
    @include('backend._layouts._partial.js._slug')
@endsection