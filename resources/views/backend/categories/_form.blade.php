<div class="row">
    @include('backend._layouts._partial.messages._alert')

    <div class="col-md-9">
        <div class="card">
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#Description" data-toggle="tab">{{ __('WocAdmin.description') }}</a></li>
                </ul>
            </div><!-- /.card-header -->

            <div class="card-body">
                <div class="form-group">
                    {!! Form::label('parent_id', __('WocAdmin.catParentId')) !!}
                    {!! Form::select('parent_id', $select_Category, $Category->parent_id, array('class' => 'form-control', 'placeholder' => __('WocAdmin.catParentId'), 'id' => 'select')); !!}
                </div>
                <div class="form-group">
                    {!! Form::label('order', __('WocAdmin.catOrder'), ['class' => 'control-label']) !!}
                    {!! Form::number('order', $Category->order, ['class' => 'form-control','placeholder' => __('WocAdmin.catOrder'),'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('name', __('WocAdmin.catName'), ['class' => 'control-label']) !!}
                    {!! Form::text('name', $Category->name, ['class' => 'form-control', 'id' => 'title', 'placeholder' => __('WocAdmin.catName')]) !!}
                </div>

            </div>
        </div>
    </div>

    <div class="col-md-3">

        <div class="card card-primary card-outline">

            <div class="card-header p-2">
                <p class="backHeader"> {{ __('WocAdmin.setting') }} </p>
            </div><!-- /.card-header -->

            <div class="card-body">

                <div class="form-group">
                    {!! Form::label('slug', __('WocAdmin.catSlug'), ['class' => 'control-label']) !!}
                    {!! Form::text('slug', $Category->slug, ['class' => 'form-control', 'id' => 'slug', 'placeholder' => __('WocAdmin.catSlug')]) !!}
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit(__('WocAdmin.Submit'), ['class' => 'btn btn-primary btn-lg btn-block']) !!}
            </div>

        </div>
        <!-- /.card -->
    </div>
</div>
