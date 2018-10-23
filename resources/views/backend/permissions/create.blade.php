@extends('backend._layouts.master')

@section('content')

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <h3 class="tile-title">Add Permission</h3>

            {!! Form::open(['route' => 'permissions.store','method'=>'POST']) !!}

                <div class="form-group">
                    {{ Form::label('name', 'Name') }}
                    {{ Form::text('name', '', array('class' => 'form-control')) }}
                </div><br>
                @if(!$roles->isEmpty())<!-- //If no roles exist yet -->
                    <h4>Assign Permission to Roles</h4>

                    @foreach ($roles as $role) 
                        {{ Form::checkbox('roles[]',  $role->id ) }}
                        {{ Form::label($role->name, ucfirst($role->name)) }}<br>

                    @endforeach
                @endif
                <br>
                {{ Form::submit('Add', ['class' => 'btn btn-primary']) }}

            {{ Form::close() }}
        </div>
    </div>
</div>

@endsection