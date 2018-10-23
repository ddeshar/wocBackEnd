@extends('backend._layouts.master')

@section('content')
<?php
    $active = [
        '1' => 'ใช่',
        '0' => 'ไม่ใช่'
    ];

    $type = [
        'ext' => 'ลิ้งจากภายนอก',
        'internal' => 'ลิ้งภายใน',
        'page' => 'เพจ'
    ];
?>

    @include('backend._layouts._partial.messages._messages')

    @if(isset($item))
        {!! Form::open([ 'method' => 'patch', 'route' => ['menu.update',  $item->id], 'files' => 'true']) !!}
    @else
        {!! Form::open([ 'route' => 'menu.store', 'method' => 'POST', 'files' => 'true']) !!}
    @endif
        <div class="row">
            
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#Description" data-toggle="tab">รายละเอียด</a></li>
                            <li class="nav-item"><a class="nav-link" href="#Icon" data-toggle="tab">รูปภาพเมนู</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">

                            <div class="active tab-pane" id="Description">

                                <div class="row">
                                    <div class="form-group col-md-12">
                                        {!! Form::label('title', 'หัวเรื่อง (TH):', ['class' => 'control-label']) !!}
                                        {!! Form::text('title', isset($item->title) ? $item->title : null,  ['class' => 'form-control', 'id' => 'title','required' => 'required']) !!}

                                        @if($errors->has('title'))
                                            <span class="text-danger">{{ $errors->first('title') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-3">
                                        {!! Form::label('link_type', 'ประเภทของลิ้ง') !!}
                                        {!! Form::select('link_type', $type, isset($item->linktype) ? $item->linktype : null, ['class' => 'form-control']) !!}
                                    </div>
                                    
                                    <div class="form-group col-md-6"id="external">
                                        {!! Form::label('path', 'ลิ้งจากภายนอก :', ['class' => 'control-label']) !!}
                                        {!! Form::text('external', isset($item->path) ? $ext : null,  ['class' => 'form-control', 'id' => 'external']) !!}

                                        @if($errors->has('path'))
                                            <span class="text-danger">{{ $errors->first('path') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-6" id="internal" style="display: none;">
                                        {!! Form::label('path', 'ลิ้งภายใน :', ['class' => 'control-label']) !!}
                                        {!! Form::select('internal', $lists, isset($item->path) ? $item->path : null, ['class' => 'form-control', 'id' => 'internal']) !!}

                                        @if($errors->has('path'))
                                            <span class="text-danger">{{ $errors->first('path') }}</span>
                                        @endif
                                    </div>
                                    
                                    <div class="form-group col-md-6" id="page" style="display: none;">
                                        {!! Form::label('path', 'เพจ :', ['class' => 'control-label']) !!}
                                        {!! Form::select('page', $pages, isset($item->path) ? $item->path : null, ['class' => 'form-control', 'id' => 'page']) !!}

                                        @if($errors->has('path'))
                                            <span class="text-danger">{{ $errors->first('path') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-3">
                                        {!! Form::label('class', 'CSS Class :', ['class' => 'control-label']) !!}
                                        {!! Form::text('class', isset($item->class) ? $item->class : null,  ['class' => 'form-control', 'id' => 'class']) !!}
                                    </div>

                                </div>
                            </div>
                            
                            <div class="tab-pane" id="Icon">
                                <div class="col-md-12">
                                    {!! Form::label('icon', ' รูปภาพเมนู', ['class' => 'control-label']) !!}
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <a id="iconimg" data-input="iconp" data-preview="icons" class="btn btn-primary">
                                            <i class="fa fa-picture-o"></i> Choose
                                            </a>
                                        </span>
                                        {!! Form::text('icon', isset($item->icon) ? $item->icon : null, ['class' => 'form-control', 'id' => 'iconp']) !!}
                                    </div>
                                    <img id="icons" src="{{asset((isset($item) && $item->icon!='')? $item->icon : 'images/unknown.png')}}" style="margin-top:15px;max-width:100%;">
                                </div>
                            </div>
                        </div>           
                    </div><!-- /.card-body -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->

            <div class="col-md-3">

                <div class="card card-primary card-outline">

                    <div class="card-header p-2">
                        <p>Setting</p>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                    
                        <div class="form-group">
                            {!! Form::label('active', 'เปิดการใช้งาน') !!}
                            {!! Form::select('active', $active, isset($item->active) ? $item->active : null, ['class' => 'form-control', 'id' => 'active']) !!}

                            @if($errors->has('parent'))
                                <span class="text-danger">{{ $errors->first('parent') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            {!! Form::label('group_id', 'กลุ่ม') !!}
                            {!! Form::select('group_id', $gro, isset($item->group_id) ? $item->group_id : null, ['class' => 'form-control', 'id' => 'group_id']) !!}

                            @if($errors->has('group_id'))
                                <span class="text-danger">{{ $errors->first('group_id') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            {!! Form::label('parent', 'เลือกกลุ่มเมนู') !!}
                            <select name="parent" id="parent" class="form-control">
                                @if(isset($item))
                                    @foreach($selectMenu as $key => $value)
                                        <option value="{{$key}}" @if(isset($item) && $item->parent === $key) selected="selected" @endif >{{$value}}</option>
                                    @endforeach
                                @else
                                    <option>เลือกกลุ่มเมนู</option>
                                @endif
                            </select>

                            @if($errors->has('parent'))
                                <span class="text-danger">{{ $errors->first('parent') }}</span>
                            @endif
                        </div>
                        
                        <div class="form-group">
                            {!! Form::label('order', 'เรียงลำดับการแสดงผล :', ['class' => 'control-label']) !!}
                            {!! Form::number('order', isset($item->order) ? $item->order : null,  ['class' => 'form-control', 'id' => 'order','required' => 'required']) !!}

                            @if($errors->has('order'))
                                <span class="text-danger">{{ $errors->first('order') }}</span>
                            @endif
                        </div>

                    </div>

                    <div class="card-footer">
                        {!! Form::submit('ตกลง', ['class' => 'btn btn-primary btn-lg btn-block']) !!}
                    </div>

                </div>
            <!-- /.card -->
            </div>

        </div>
    {!! Form::close() !!}
@endsection

@section('footer_scripts')
<script src="{!! url('vendor/laravel-filemanager/js/lfm.js') !!}"></script>
    <script> 
        $('#iconimg').filemanager('image');
    </script>

    <script>
        $(document).ready(function() {

            $('select[name="group_id"]').on('change', function(){
                var groupId = $(this).val();
                if(groupId) {
                    $.ajax({
                        url:"{{url('admin/json-menu/')}}/"+groupId,
                        type:"GET",
                        dataType:"json",
                        beforeSend: function(){
                            $('#loader').css("visibility", "visible");
                        },

                        success:function(data) {
                            $('select[name="parent"]').empty();

                            $.each(data, function(key, value){

                                $('select[name="parent"]').append('<option value="'+ key +'">' + value + '</option>');

                            });
                        },

                        complete: function(){
                            $('#loader').css("visibility", "hidden");
                        }
                    });
                } else {
                    $('select[name="parent"]').empty();
                }

            });

        });
    </script>

    @include('backend._layouts._partial.js._link_type')
@endsection