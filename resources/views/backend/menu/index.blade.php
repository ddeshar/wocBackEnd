@extends('backend._layouts.master')

@php
    $title = __('WocBread.menus');
@endphp

@section('title', $title .' | '. __('WocBread.WocAdmin') )

@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
            <h2>{{ __('WocAdmin.addMenu') }}</h2>
            {!! Menu::render() !!}
        </div>
      </div>
    </div>
  </div>

@endsection


@push('scripts')
    @include('backend.menu.scripts')

@endpush