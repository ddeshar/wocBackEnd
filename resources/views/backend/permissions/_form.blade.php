<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, ['placeholder' => 'Name','class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Permission:</strong>
            <br/>
            <?php 
                $col = collect($permission)->groupBy(function($text){
                    return explode('-', $text->name)[0];
                });

                $status = [
                    'list' => 'ดูข้อมูล',
                    'create' => 'สร้าง',
                    'edit' => 'แก้ไข',
                    'delete' => 'ลบ'
                ];
            ?>

            <div class="row">
                @foreach($col as $key => $val)    
                    <div class="col-md-3">
                        <div class="card card-success card-outline">
                        <div class="card-header">
                            <h3 class="card-title">{{ $key }}</h3>
                        </div>
                        <div class="card-body">
                            <div class="checkbox">
                                <input type="checkbox" class="{{ $key }}" id="{{ $key }}1"> เลือกทั้งหมด
                            </div>
                            @foreach($val as $text)
                                <div class="checkbox">
                                    @if($create == "create")
                                        {{ Form::checkbox('permission[]', $text->id, false, array('class' => $key)) }}
                                    @else
                                        {{ Form::checkbox('permission[]', $text->id, in_array($text->id, $rolePermissions) ? true : false, ['class' => $key]) }}
                                    @endif
                                    <?php
                                        $exploded = explode('-', $text->name);
                                    ?>
                                    {{ $status[$exploded[1]] }}
                                </div>
                            @endforeach
                        </div>
                        <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                @endforeach
            </div>
        </div>
    </div>
    <div class="tile-footer">
        <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Submit</button>&nbsp;&nbsp;&nbsp;
        <a class="btn btn-secondary" href="{{ route('roles.index') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
    </div>

</div>
