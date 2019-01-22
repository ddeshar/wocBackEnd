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
                            {!! Form::label('description', 'รายละเอียด (TH)', ['class' => 'control-label']) !!}
                            {!! Form::textarea('description',  isset($datas->description) ? $datas->description : null, ['class' => 'form-control', 'id' => 'newa', 'rows' => '14']); !!}
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
                        <div class="form-group">
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
                    {!! Form::select('status', Wocglobal::backStatus(), $datas->status, ['class' => 'form-control', 'id' => 'status']); !!}
                </div>

                <div class="form-group">
                    {!! Form::label('slug', 'slug:', ['class' => 'control-label']) !!}
                    {!! Form::text('slug', $datas->slug, ['class' => 'form-control', 'id' => 'slug', 'placeholder' => 'URL slug', 'readonly' => 'true']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('category_id', 'Post Category') !!}
                    {!! Form::select('category_id', $categories, $datas->category_id, ['class' => 'form-control', 'id' => 'select']); !!}
                </div>

                <div class="form-group">
                    {!! Form::label('tags', 'Select tags :', ['class' => 'control-label']) !!}
                    {!! Form::select('tags[]', $tags, isset($postTags) ? $postTags : [], ['class' => 'form-control','id' => 'demoSelect', 'multiple','tabindex'=>'-1', 'aria-hidden'=>'true']) !!}
                </div>
            </div>
        
            <div class="card-footer">
                {!! Form::submit('ตกลง', ['class' => 'btn btn-primary btn-lg btn-block']) !!}
            </div>

        </div>
        <!-- /.card -->
    </div>

</div>