@extends('user.partials.master')

@section('title')
    Home
@endsection

@php
    $page = 'index';
@endphp

@section('content')

    <!--================ Start Header Area =================-->
    @include('user.partials.header')
    <!--================ End Header Area =================--> 

    <!--================ Start Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="banner_inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="banner_content">
                            <h3 class="text-uppercase">Hell0</h3>
                            <h1 class="text-uppercase">I am rahi satner</h1>
                            <h5 class="text-uppercase">senior wordpress developer</h5>
                            <div class="d-flex align-items-center">
                                <a class="primary_btn" href="#"><span>Hire Me</span></a>
                                <a class="primary_btn tr-bg" href="#"><span>Get CV</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="home_right_img">
                            <img class="" src="{{ asset('public/img/banner/home-right.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Home Banner Area =================-->

    <!--================ Start About Us Area =================-->
    @include('user.partials.about')
    <!--================ End About Us Area =================-->

    <!--================ Srart Brand Area =================-->
    @include('user.partials.brand')
    <!--================ End Brand Area =================-->

    <!--================ Start Features Area =================-->
    @include('user.partials.features')
    <!--================ End Features Area =================-->

    <!--================Start Portfolio Area =================-->
    @include('user.partials.portfolio')
    <!--================End Portfolio Area =================-->

    <!--================ Start Testimonial Area =================-->
    @include('user.partials.testimonial')
    <!--================ End Testimonial Area =================-->

    <!--================ Start Newsletter Area =================-->
    @include('user.partials.newsletter')
    <!--================ End Newsletter Area =================-->
    
@endsection
