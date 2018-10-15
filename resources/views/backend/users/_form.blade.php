<div class="tile-body">
    <div class="form-group">
        <label class="control-label">Name</label>
        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        <label class="control-label">Email</label>
        {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        <label class="control-label">Password</label>
        {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        <label class="control-label">Confirm Password</label>
        {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        <label class="control-label">Role</label> <br>
        @foreach($roles as $role)
            @if($create == "create")
                <label>{!! Form::checkbox('roles[]', $role, false, ['class' => 'name']) !!} 
            @else
                {{ Form::checkbox('roles[]', $role, in_array($role, $userRole)) }}
            @endif
            {{ $role }}</label> <br>
        @endforeach 
    </div>

</div>

<div class="tile-footer">
    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Submit</button>&nbsp;&nbsp;&nbsp;
    <a class="btn btn-secondary" href="{{ route('users.index') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
</div>