@extends('layouts.app')

@section('title', 'Contact Page')

@section('content')
<h1>Contact Us</h1>
<div class="contact-info mb-4 p-4 bg-warning text-dark rounded">
    <p>HealthCare PWA is designed to make healthcare accessible. 
        Have questions or need assistance? 
        We’d love to hear from you.</p>
    
    <div class="contact-details">
        <p><strong>Location:</strong> HealthCare PWA in Sta. Cruz Sur, Iriga City</p>
        <p><strong>Email:</strong> support@healthcarepwa.com</p>
        <p><strong>Phone:</strong> +63 912 345 6789</p>
    </div>
</div>

<a href="/home" class="btn btn-outline-primary m-2">Back to Home</a>
<a href="/about" class="btn btn-outline-success m-2">Go to about Page</a>

@endsection
