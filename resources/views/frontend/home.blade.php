@extends('welcome')
@section('og:title', 'Home')
@section('keywords', 'builders, guilding materials expert near me')
@section('description', 'The best building experts in Nairobi and Kenya as a whole')
@section('og:description', 'The best building experts in Nairobi and Kenya as a whole')
@section('og:url', route('home'))
@section('og:image', asset('frontend/img/footer-img.jpg'))
@section('content')
    <!-- Carousel Start -->
    <x-carousel />
    <!-- Carousel End -->

    <!-- About Start -->
    <x-about />

    <!-- About End -->

    <!-- Features Start -->

    <x-features />
    <!-- Features End -->


    <!-- Services Start -->
    <x-services />

    <!-- Services End -->


    <!-- Blog Start -->
    <x-blog />
    <!-- Blog End -->
@endsection
