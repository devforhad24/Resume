@extends('user.partials.master')

@section('title')
    Services
@endsection

@php
    $page = 'services';
@endphp

@section('content')
    <!--================ Start Header Area =================-->
    @include('user.partials.header')
    <!--================ End Header Area =================--> 

    <!--================ Start Banner Area =================-->
    <section class="banner_area mb-30">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Services</h2>
                    <div class="page_link">
                        <a href="index.html">Home</a>
                        <a href="about.html">Services</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Banner Area =================-->

    <!--================ Start Features Area =================-->
    @include('user.partials.features')
    <!--================ End Features Area =================-->

    <!--================ Start Testimonial Area =================-->
    @include('user.partials.testimonial')
    <!--================ End Testimonial Area =================-->

    <!--================ Start Newsletter Area =================-->
    @include('user.partials.newsletter')
    <!--================ End Newsletter Area =================-->

@endsection