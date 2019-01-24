@extends('backend._layouts.master')

@php
    $title = __('WocBread.tagShow');
@endphp

@section('title', $title .' | '. __('WocBread.WocAdmin') )

@section('content')
    <div class="col-md-6">
        <div class="card">
            <div class="card-title-w-btn">
                <h3 class="title">{{ $datas->tag }}</h3>
                <p><a class="btn btn-primary icon-btn" href="{{ route('tags.edit', $datas->id) }}"><i class="fa fa-edit"></i>{{ __('Wocadmin.editTag')}}</a></p>
            </div>
        </div>
    </div>
@endsection
