@extends('twill::layouts.main')

@section('appTypeClass', 'body--buckets')

@php
    $bucketSectionLinks = $bucketSectionLinks ?? [];
@endphp

@push('extra_css')
    @if (app()->isProduction())
        <link href="{{ twillAsset('main-buckets.css') }}" rel="preload" as="style" crossorigin />
    @endif
    <link href="{{ twillAsset('main-buckets.css') }}" rel="stylesheet" crossorigin />
    <style type="text/css">
        .button.bucket__action {
            background-color: #ffffff !important;
            border-radius: 2px !important;
        }

        .button.bucket__action:hover {
            color: #000 !important;
            border-color: #000 !important;
            font-weight: 600;
        }

        .button.bucket__action.selected {
            opacity: 1 !important;
        }

        .button--icon.button--bucket--1 {
            color: #7ca4a2;
            border-color: #7ca4a2;
        }

        .button--icon.button--bucket--1.selected {
            color: #ffffff !important;
            font-weight: 600;
            border-color: #7ca4a2;
            background-color: #7ca4a2 !important;
        }

        .button--icon.button--bucket--2 {
            color: #ffffff;
            border-color: #70769f;
        }

        .button--icon.button--bucket--2.selected {
            color: #ffffff !important;
            font-weight: 600;
            border-color: #70769f;
            background-color: #70769f !important;

        }

        .button.bucket__action.button--close {
            border-color: #fff !important;
            border-width: 0px;
            background-color: transparent !important;
        }

        .button.bucket__action.button--close:hover {
            border-color: #fff !important;
            background-color: #e5e5e5 !important;
        }

        .bucket__action.item__dropdown>.button {
            background-color: transparent !important;
            border-width: 0px !important;
            border-radius: 2px;
        }

        .bucket__action.item__dropdown>.button:hover {
            background-color: #e5e5e5 !important;
            border-width: 0px !important;
        }
    </style>
@endpush

@push('extra_js_head')
    @if (app()->isProduction())
        <link href="{{ twillAsset('main-buckets.js') }}" rel="preload" as="script" crossorigin />
    @endif
@endpush

@section('content')
    <a17-buckets title="{{ $bucketSourceTitle ?? twillTrans('twill::lang.buckets.source-title') }}"
        empty-buckets="{{ twillTrans('twill::lang.buckets.none-featured') }}"
        empty-source="{{ twillTrans('twill::lang.buckets.none-available') }}" :restricted="{!! json_encode($restricted ?? true) !!}"
        :extra-actions="{{ json_encode($bucketSectionLinks) }}">
        {{ $bucketsSectionIntro ?? twillTrans('twill::lang.buckets.intro') }}
    </a17-buckets>
@stop

@section('initialStore')
    window['{{ config('twill.js_namespace') }}'].STORE.buckets = {
    saveUrl: {!! json_encode($saveUrl) !!},
    items: {!! json_encode($items) !!},
    source: {!! json_encode($source) !!},
    dataSources: {!! json_encode($dataSources) !!},
    page: 1,
    maxPage: {{ $maxPage ?? 1 }},
    offset: {{ $offset ?? 10 }},
    filter: {}
    }
@stop

@push('extra_js')
    <script src="{{ twillAsset('main-buckets.js') }}" crossorigin></script>
@endpush
