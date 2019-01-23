<div class="tile-body">
    <div class="form-group">
        <label class="control-label">{{ __('WocAdmin.Name') }}</label>
        {!! Form::text('name', null, array('placeholder' => __('WocAdmin.Name'),'class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        <label class="control-label">{{ __('WocAdmin.Email') }}</label>
        {!! Form::text('email', null, array('placeholder' => __('WocAdmin.Email'),'class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        <label class="control-label">{{ __('WocAdmin.pass') }}</label>
        {!! Form::password('password', array('placeholder' => __('WocAdmin.pass'),'class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        <label class="control-label">{{ __('WocAdmin.conPass') }}</label>
        {!! Form::password('confirm-password', array('placeholder' => __('WocAdmin.conPass'),'class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        <label class="control-label">{{ __('WocAdmin.role') }}</label> <br>
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
    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>{{ __('WocAdmin.Submit')}}</button>&nbsp;&nbsp;&nbsp;
    <a class="btn btn-secondary" href="{{ route('users.index') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>{{ __('WocAdmin.Cancel')}}</a>
</div>