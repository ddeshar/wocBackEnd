@extends('backend._layouts.master')


@section('content')

<div class="card card-success card-outline">
    <div class="card-body box-profile">
        <div class="text-center">
            <img class="profile-user-img img-fluid img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User profile picture">
        </div>

        <h3 class="profile-username text-center">{{ $user->name }}</h3>

        <p class="text-muted text-center">{{ $user->email }}</p>

        <ul class="list-group list-group-unbordered mb-3">
            <strong>Roles:</strong>
            @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
                    <li class="list-group-item">{{ $v }}</li>
                @endforeach
            @endif
        </ul>

        <a href="{{ route('users.edit',$user->id) }}" class="btn btn-primary btn-block"><b>Edit</b></a>
    </div>
    <!-- /.card-body -->
</div>

@endsection