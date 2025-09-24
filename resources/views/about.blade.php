@extends('layouts.app')

@section('title', 'About Page')

@section('content')
    <h1 class="text-success">About Us</h1>
    <p class="lead">HealthCare PWA is designed to make 
        healthcare more accessible and convenient. 
        Our platform combines the speed of a mobile app 
        with the flexibility of a website. 
        Whether you need to consult a doctor, track your wellness, 
        or receive health updates, we’re here to support your 
        journey toward better health.</p>

    <a href="/home" class="btn btn-outline-primary m-2">Back to Home</a>
    <a href="/contact" class="btn btn-outline-success m-2">Go to Contact Page</a>

@endsection

@section('script')
<script>
    document.addEventListener("DOMContentLoaded", () => {
        console.log("About Page Loaded");
    });
</script>
@endsection