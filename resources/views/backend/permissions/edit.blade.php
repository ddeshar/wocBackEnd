@extends('backend._layouts.master')

@section('content')

    @include('backend._layouts._partial.messages._messages')

<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <h3 class="tile-title">Edit {{$permission->name}}</h3>
            {{ Form::model($permission, array('route' => array('permissions.update', $permission->id), 'method' => 'PUT')) }}
            {{-- Form model binding to automatically populate our fields with permission data --}}

                <div class="form-group">
                    {{ Form::label('name', 'Permission Name') }}
                    {{ Form::text('name', null, array('class' => 'form-control')) }}
                </div>
                <br>
                {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection
