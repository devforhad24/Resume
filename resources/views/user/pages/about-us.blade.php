@extends('user.partials.master')

@section('title')
    About Us
@endsection

@php
    $page = 'about';
@endphp

@section('content')

    <!--================ Start Header Area =================-->
    @include('user.partials.header')
    <!--================ End Header Area =================-->

    <!--================ Start Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>About Us</h2>
                    <div class="page_link">
                        <a href="index.html">Home</a>
                        <a href="about.html">About</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Banner Area =================-->

    <!--================ Start About Us Area =================-->
    @include('user.partials.about')
    <!--================ End About Us Area =================-->

    <!--================ Srart Brand Area =================-->
    @include('user.partials.brand')
    <!--================ End Brand Area =================-->

    <!--================ Start Testimonial Area =================-->
    @include('user.partials.testimonial')
    <!--================ End Testimonial Area =================-->

    <!--================ Start Newsletter Area =================-->
    @include('user.partials.newsletter')
    <!--================ End Newsletter Area =================-->


@endsection