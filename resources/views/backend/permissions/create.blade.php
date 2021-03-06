@extends('backend._layouts.master')

@php
    $title = __('WocBread.permissionCreate');
@endphp

@section('title', $title .' | '. __('WocBread.WocAdmin') )

@section('content')

    @include('backend._layouts._partial.messages._messages')

    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">{{ __('WocAdmin.CreatePer') }}</h3>

                {!! Form::open(['route' => 'permissions.store','method'=>'POST']) !!}

                    <div class="form-group">
                        {{ Form::label('name', __('WocAdmin.Name')) }}
                        {{ Form::text('name', '', array('class' => 'form-control')) }}
                    </div><br>
                    @if(!$roles->isEmpty())<!-- //If no roles exist yet -->
                        <h4> {{ __('WocAdmin.assignPerToRoles') }} </h4>

                        @foreach ($roles as $role) 
                            {{ Form::checkbox('roles[]',  $role->id ) }}
                            {{ Form::label($role->name, ucfirst($role->name)) }}<br>

                        @endforeach
                    @endif
                    <br>
                    {{ Form::submit(__('WocAdmin.Submit'), ['class' => 'btn btn-primary']) }}

                {{ Form::close() }}
            </div>
        </div>
    </div>

@endsection
