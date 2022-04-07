@extends('layouts.app')

@section('content')
    <main>
        @include('landing.header')
        @include('landing.hero-section')
        @include('landing.services-section')
        @include('landing.contactus-section')
        @include('landing.footer-section')   
    </main>
@endsection
