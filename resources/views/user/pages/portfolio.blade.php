@extends('user.partials.master')

@section('title')
    Portfolio
@endsection

@php
    $page = 'portfolio';
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
                    <h2>Portfolio</h2>
                    <div class="page_link">
                        <a href="index.html">Home</a>
                        <a href="portfolio.html">Portfolio</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Banner Area =================-->

    <!--================Start Portfolio Area =================-->
    @include('user.partials.portfolio')
    <!--================End Portfolio Area =================-->

    <!--================ Start Newsletter Area =================-->
    @include('user.partials.newsletter')
    <!--================ End Newsletter Area =================-->

@endsection
