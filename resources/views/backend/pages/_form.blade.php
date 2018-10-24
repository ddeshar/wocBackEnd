<div class="row">
    @include('backend._layouts._partial.messages._alert')
    <!-- /.col -->
    <div class="col-md-9">
        <div class="card">
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#Description" data-toggle="tab">รายละเอียด</a></li>
                    <li class="nav-item"><a class="nav-link" href="#CoverImage" data-toggle="tab">ภาพปก</a></li>
                    <li class="nav-item"><a class="nav-link" href="#SEO" data-toggle="tab">SEO</a></li>
                </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
                <div class="tab-content">

                    <div class="active tab-pane" id="Description">
                        <div class="form-group">
                            {!! Form::label('title', 'หัวเรื่อง (TH)', ['class' => 'control-label']) !!}
                            {!! Form::text('title', $datas->title,  ['class' => 'form-control', 'id' => 'title', 'placeholder' => 'หัวเรื่อง','required' => 'required']) !!}
                        </div>
                        
                        <div class="form-group">
                            {!! Form::label('body', 'รายละเอียด (TH)', ['class' => 'control-label']) !!}
                            {!! Form::textarea('body',  isset($datas->body) ? $datas->body : null, ['class' => 'form-control', 'id' => 'newa', 'rows' => '14']); !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('DateEvent', 'วันที่ลงข่าว', ['class' => 'control-label']) !!}
                            <div class="input-group">
                                <input type="text" class="form-control float-right datetimepicker" name="event" id="datetimepicker1" value="{{ $datas->event }}">
                                <div class="input-group-prepend">
                                <span class="input-group-text datetimepicker-addon">
                                    <i class="fa fa-calendar"></i>
                                </span>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="tab-pane" id="CoverImage">
                        
                        <div class="row">
                            <div class="col-md-12">
                                {!! Form::label('image', 'Image', ['class' => 'control-label']) !!}
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <a id="lfm" data-input="thumbnailen" data-preview="image" class="btn btn-primary">
                                        <i class="fa fa-picture-o"></i> Choose
                                        </a>
                                    </span>
                                    {!! Form::text('image', isset($datas->image) ? $datas->image : null, ['class' => 'form-control', 'id' => 'thumbnailen']) !!}     

                                </div>
                                <img id="image" src="{{asset((isset($datas) && $datas->image!='')? $datas->image : 'images/unknown.png')}}" style="margin-top:15px;max-width:100%;">
                            </div>

                            <div class="col-md-12">
                                {!! Form::label('desk', 'รูปภาพแสดงบนหน้าจอ', ['class' => 'control-label']) !!}
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <a id="des" data-input="thumbnailth" data-preview="th" class="btn btn-primary">
                                        <i class="fa fa-picture-o"></i> เลือกไฟล์
                                        </a>
                                    </span>
                                    {!! Form::text('desk', isset($datas->desk) ? $datas->desk : null, ['class' => 'form-control', 'id' => 'thumbnailth']) !!}     
                                </div>
                                <img id="th" src="{{asset((isset($datas) && $datas->desk!='')? $datas->desk : 'images/unknown.png')}}" style="margin-top:15px;max-width:100%;">
                            </div>

                            <div class="col-md-12">
                                {!! Form::label('mob', 'รูปภาพแสดงบนโทรศัพท์ (EN)', ['class' => 'control-label']) !!}
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <a id="mob" data-input="thumbnailmoben" data-preview="moen" class="btn btn-primary">
                                        <i class="fa fa-picture-o"></i> เลือกไฟล์
                                        </a>
                                    </span>
                                    {!! Form::text('mob', isset($datas->mob) ? $datas->mob : null, ['class' => 'form-control', 'id' => 'thumbnailmoben']) !!}     
                                </div>
                                <img id="moen" src="{{asset((isset($datas) && $datas->mob!='')? $datas->mob : 'images/unknown.png')}}" style="margin-top:15px;max-width:100%;">
                            </div>
                        </div>

                    </div>

                    <div class="tab-pane" id="SEO">

                        <div class="form-group">
                            {!! Form::label('metaTitle', 'Seo Title Th') !!}
                            {!! Form::text('metaTitle', $datas->metaTitle , ['class' => 'form-control', 'id' => 'metaTitle', 'placeholder' => 'Seo Title']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('metaDescription', 'Meta Description Th') !!}
                            {!! Form::textarea('metaDescription', $datas->metaDescription , ['class' => 'form-control', 'rows'=>'5']); !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('metaKeywords', 'Meta Keywords Th') !!}
                            {!! Form::textarea('metaKeywords', $datas->metaKeywords , ['class' => 'form-control', 'rows'=>'5']); !!}
                        </div>

                    </div>

                </div>
                <!-- /.tab-content -->
            </div><!-- /.card-body -->
        </div>
        <!-- /.nav-tabs-custom -->
    </div>
    <!-- /.col -->

    <div class="col-md-3">

        <div class="card card-primary card-outline">

            <div class="card-header p-2">
                <p>การตั้งค่า</p>
            </div><!-- /.card-header -->
            <div class="card-body">

                <div class="form-group">
                    {!! Form::label('status', 'สถานะ') !!}
                    {!! Form::select('status', Wocglobal::backStatus(), $datas->status, array('class' => 'form-control', 'id' => 'status')); !!}
                </div>

                <div class="form-group">
                    {!! Form::label('slug', 'slug:', ['class' => 'control-label']) !!}
                    {!! Form::text('slug', $datas->slug, ['class' => 'form-control', 'id' => 'slug', 'placeholder' => 'URL slug', 'readonly' => 'true']) !!}
                </div> 

            </div>
        
            <div class="card-footer">
                {!! Form::submit('ตกลง', ['class' => 'btn btn-primary btn-lg btn-block']) !!}
            </div>

        </div>
        <!-- /.card -->
    </div>

</div>