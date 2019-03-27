@extends('backend._layouts.master')

@php
    $title = __('WocBread.dashboard');
@endphp

@section('title', $title .' | '. __('WocBread.WocAdmin') )

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">@lang('passwords.password') <h2>ทดสอบ</h2></div>
      </div>
    </div>
  </div>
@endsection

@section('footer_scripts')

@endsection