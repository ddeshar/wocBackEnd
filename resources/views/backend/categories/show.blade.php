@extends('backend._layouts.master')

@section('title', '')

@section('header_styles')

@endsection

@section('content')
<div class="col-md-6">
    <div class="card">
        <div class="card-title-w-btn">
            <h3 class="title">{{ $Category->name }}</h3>
            <p><a class="btn btn-primary icon-btn" href="{{ route('categories.edit', $Category->id) }}"><i class="fa fa-edit"></i> {{ __('WocAdmin.editCat') }} </a></p>
        </div>
        <div class="card-body">
            <div class="bs-component">
                <div class="panel-body"> {{ __('WocAdmin.parent_id') }}  : {{ $Category->parent_id }}</div>
                <div class="panel-body"> {{ __('WocAdmin.order') }}  : {{ $Category->order }}</div>
                <div class="panel-body"> {{ __('WocAdmin.Name') }}  : {{ $Category->name }}</div>
                <div class="panel-body"> {{ __('WocAdmin.slug') }}  : {{ $Category->slug }}</div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer_scripts')

@endsection