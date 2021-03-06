@extends('backend._layouts.master')

@php
    if(isset($group)){
        $title = __('WocBread.groupEdit');
    } else{
        $title = __('WocBread.groupCreate');
    }
@endphp

@section('title', $title .' | '. __('WocBread.WocAdmin') )

@section('content')

    @include('backend._layouts._partial.messages._messages')

    @if(isset($group))
        {!! Form::open([ 'method' => 'patch', 'route' => ['group.update',  $group->id]]) !!}
    @else
        {!! Form::open([ 'route' => 'group.store', 'method' => 'POST']) !!}
    @endif
    @include('backend._layouts._partial.messages._alert')
        
        <div class="row">
            
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                    
                    <div class="card-body">

                        <div class="form-group">
                            {!! Form::label('value', __('WocAdmin.groupValue'), ['class' => 'control-label']) !!}
                            {!! Form::text('value', isset($group->value) ? $group->value : null,  ['class' => 'form-control', 'id' => 'value','required' => 'required']) !!}
                            
                            @if(count($errors))
                                <span class="text-danger">{{ $errors->first('value') }}</span>
                            @endif
                        </div>
      
                        <div class="form-group">
                            {!! Form::label('name', __('WocAdmin.groupName'), ['class' => 'control-label']) !!}
                            {!! Form::text('name', isset($group->name) ? $group->name : null,  ['class' => 'form-control', 'id' => 'name','required' => 'required']) !!}
                            
                            @if(count($errors))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card card-primary card-outline">
                    <div class="card-header p-2">
                        <p class="backHeader"> {{ __('WocAdmin.setting') }} </p>
                    </div>
                    
                    <div class="card-footer">
                        {!! Form::submit(__('WocAdmin.Submit'), ['class' => 'btn btn-primary btn-lg btn-block']) !!}
                    </div>

                </div>
            </div>

        </div>

    {!! Form::close() !!}
@endsection
