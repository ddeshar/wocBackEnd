<div class="row">
    @include('backend._layouts._partial.messages._alert')

    <div class="col-md-9">
        <div class="card">
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#Description" data-toggle="tab">รายละเอียด</a></li>
                </ul>
            </div><!-- /.card-header -->

            <div class="card-body">
                <div class="form-group">
                    {!! Form::label('parent_id', 'Category parent id') !!}
                    {!! Form::select('parent_id', $select_Category, $Category->parent_id, array('class' => 'form-control', 'placeholder' => 'Enter your Category parent id' , 'id' => 'select')); !!}
                </div>
                <div class="form-group">
                    {!! Form::label('order', 'Category order :', ['class' => 'control-label']) !!}
                    {!! Form::number('order', $Category->order, ['class' => 'form-control','placeholder' => 'Category order','required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('name', 'Category name :', ['class' => 'control-label']) !!}
                    {!! Form::text('name', $Category->name, ['class' => 'form-control', 'id' => 'title', 'placeholder' => 'Category name']) !!}
                </div>

            </div>
        </div>
    </div>

    <div class="col-md-3">

        <div class="card card-primary card-outline">

            <div class="card-header p-2">
                <p class="backHeader">การตั้งค่า</p>
            </div><!-- /.card-header -->

            <div class="card-body">

                <div class="form-group">
                    {!! Form::label('slug', 'Category slug :', ['class' => 'control-label']) !!}
                    {!! Form::text('slug', $Category->slug, ['class' => 'form-control', 'id' => 'slug', 'placeholder' => 'Category slug']) !!}
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('ตกลง', ['class' => 'btn btn-primary btn-lg btn-block']) !!}
            </div>

        </div>
        <!-- /.card -->
    </div>
</div>
