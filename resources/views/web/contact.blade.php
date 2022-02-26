@extends('layouts.web')
@section('title')
Contact Us
@endsection
@section('content')
<div class="breadcrumb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-5">
                <div class="part-txt">
                    <h1>Contact Us</h1>
                    <ul>
                        <li>Home</li>
                        <li><i class="icofont-double-right"></i></li>
                        <li class="current">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact">
    <div class="container">
        <div class="row no-gutters justify-content-between">
            <div class="col-xl-6 col-lg-6">
                <div class="form-area">
                    <div class="title">
                        <h2>Get In Touch:</h2>
                        <p>Send us a message and we shall respond ASAP!</p>
                    </div>
                    <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" placeholder="Name" required name="name" id="name" value="{{ old('name') }}">
                        @error('name')
                        <span class="alert alert-danger">{{ $message }}</span>
                        @enderror
                        <input type="tel" placeholder="Phone Number" required name="phone" id="phone"
                            value="{{ old('phone') }}">
                        @error('phone')
                        <span class="alert alert-danger">{{ $message }}</span>
                        @enderror
                        <input type="email" placeholder="Email" required name="email" id="email"
                            value="{{ old('email') }}">
                        @error('email')
                        <span class="alert alert-danger">{{ $message }}</span>
                        @enderror
                        <textarea placeholder="Your Message..." required name="message"
                            id="message">{{ old('message') }}</textarea>
                        @error('message')
                        <span class="alert alert-danger">{{ $message }}</span>
                        @enderror
                        <button type="submit" class="def-btn">Submit Now <i class="icofont-double-right"></i></button>
                    </form>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="address-area">
                    <div class="single-box">
                        <div class="title">
                            <h3>Address</h3>
                        </div>
                        <div class="details">
                            <ul>
                                <li><span><i class="icofont-clock-time"></i></span>{{ $settings['officeTime'] }}</li>
                                <li><span><i class="icofont-ui-call"></i></span>{{ $settings['phone'] }}</li>
                                <li><span><i class="icofont-email"></i></span><a href="mailto:{{ $settings['email'] }}"
                                        class="__cf_email__" data-cfemail="45282c3c2a35052a35312a2b292c2b206b2b2031">{{
                                        $settings['email'] }}</a>
                                </li>
                                <li><span><i class="icofont-google-map"></i></span> {{ $settings['officeAddress'] }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
