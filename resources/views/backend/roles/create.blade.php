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
            <h3 class="tile-title">Create New Roles</h3>
            {!! Form::open(['route' => 'roles.store','method'=>'POST']) !!}
                @include('backend.roles._form')
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection

@section('footer_scripts')

    <?php 
        $col = collect($permission)->groupBy(function($text){
            return explode('-', $text->name)[0];
        });
    ?>

    <script>
        @foreach($col as $key => $val)
            $("#{{ $key }}1").click(function () {
                $(".{{ $key }}").prop('checked', $(this).prop('checked'));
            });
        @endforeach
    </script>
@endsection