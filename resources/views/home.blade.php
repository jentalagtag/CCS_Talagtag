@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <h1>Welcome to HealthCare Progressive Web</h1>
    <p class="lead">your trusted partner in managing your health anytime, anywhere. 
        Access medical information, book appoinments, and stay connected with HealthCare
        professionals right at your fingertips</p>

    <a href="/about" class="btn btn-outline-primary m-2">Go to About Page</a>
    <a href="/contact" class="btn btn-outline-success m-2">Go to Contact Page</a>
@endsection

@section('script')
<script>
    document.addEventListener("DOMContentLoaded", () => {
        console.log("Home Page Loaded");
    });
</script>
@endsection