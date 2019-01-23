@extends('backend._layouts.master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-title-w-btn">
                <h3 class="title"> {{ __('WocAdmin.showRole') }} </h3>
                <p><a class="btn btn-primary icon-btn" href="{{ route('roles.index') }}"> {{ __('WocAdmin.back') }} </a></p>
            </div>
            <div class="tile-body">
                <div class="form-group">
                    <strong> {{ __('WocAdmin.Name') }} :</strong>
                    {{ $role->name }}
                </div>
                    <?php 
                        $col = collect($rolePermissions)->groupBy(function($text){
                            return explode('-', $text->name)[0];
                        });

                        $status = [
                            'list' => __('WocAdmin.listRole'),
                            'create' => __('WocAdmin.createRole'),
                            'edit' => __('WocAdmin.editRole'),
                            'delete' => __('WocAdmin.deleteRole')
                        ];
                    ?>
                    <h5>Permissions:</h5>
                <div class="row">
                    @foreach($col as $key => $val)    
                        <div class="col-md-3">
                            <div class="card card-warning card-outline">
                            <div class="card-header">
                                <h3 class="card-title">{{ $key }}</h3>
                            </div>
                            <div class="card-body">
                                @foreach($val as $text)
                                    <?php
                                        $exploded = explode('-', $text->name);
                                    ?>
                                    <li>{{ $status[$exploded[1]] }}</li>                                
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
    </div>
</div>

@endsection