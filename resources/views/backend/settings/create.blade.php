@extends('backend._layouts.master')
    
@php
    $title = __('WocBread.settingCreate');
@endphp

@section('title', $title .' | '. __('WocBread.WocAdmin') )


@section('content')

    <?php
        $type = [
            ''              => 'Choose type',
            'text'          => 'Text',
            'text_area'     => 'Text area',
            'code_editor'   => 'Code editor',
            'file'          => 'File',
            'image'         => 'Image',
            'banner'        => 'Banner'
        ];
    ?>


    {!! Form::open([ 'route' => 'setting.store', 'method' => 'POST', 'files' => 'true']) !!}
<section class="content">
    <div class="container-fluid">
        @include('backend._layouts._partial.messages._messages')
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 form-group">
                                {!! Form::label('display_name', __('WocAdmin.Name')) !!}
                                {!! Form::text('display_name', null, ['class' => 'form-control', 'id' => 'display_name', 'placeholder' => __('WocAdmin.settingName')]) !!}
                            </div>
                            <div class="col-md-3 form-group">
                                {!! Form::label('key', __('WocAdmin.Key')) !!}
                                {!! Form::text('key', null, ['class' => 'form-control', 'id' => 'key', 'placeholder' => __('WocAdmin.settingKey')]) !!}
                            </div>
                            <div class="col-md-3 form-group">
                                {!! Form::label('type', __('WocAdmin.type')) !!}
                                {!! Form::select('type', $type, $settings->type, ['class' => 'form-control', 'id' => __('WocAdmin.type')]) !!}
                            </div>
                            <div class="col-md-3 form-group">
                                {!! Form::label('group', __('WocAdmin.group')) !!}
                                <select class="form-control group_select group_select_new" name="group">
                                    @foreach($groups as $group)
                                        <option value="{{ $group }}">{{ $group }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        {!! Form::submit(__('WocAdmin.Submit'), ['class' => 'btn btn-primary btn-lg btn-block']) !!}
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
    {!! Form::close() !!}
    
@endsection

