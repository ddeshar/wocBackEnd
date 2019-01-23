@extends('backend._layouts.master')

@section('content')

    @include('backend._layouts._partial.messages._messages')

<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <h3 class="tile-title"> {{ __('WocAdmin.editRoles') }} </h3>
            {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
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