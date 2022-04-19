@extends('front.layouts.app')

@section('content')
    {{-- @include('front.partials.header')
    @include('front.partials.banner')
    @include('front.partials.services')
    @include('front.partials.courses')
    @include('front.partials.simple')
    @include('front.partials.testimonials')
    @include('front.partials.contact') --}}

    <h1>Test</h1>
    <div style="width: 500px; height: 500px;">
        {!! Mapper::render() !!}
    </div>
@endsection