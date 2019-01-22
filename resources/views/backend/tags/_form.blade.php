<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <h3 class="tile-title">Tags</h3>
            <div class="tile-body">
                <div class="form-group">
                    {!! Form::label('tag', 'tag') !!}
                    {!! Form::text('tag', $datas->tag, ['class' => 'form-control', 'id' => 'tag', 'placeholder' => 'tag']) !!}
                </div>
            </div>

            <div class="tile-footer">
                <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Submit</button>&nbsp;&nbsp;&nbsp;
            </div>
        </div>
    </div>
</div>
