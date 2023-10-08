@extends('layouts.app') <!-- You may adjust this based on your layout structure -->

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Feedback Submitted</div>
                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                        Thank you for your feedback! We have received your message.
                    </div>
                    <p>Your feedback is important to us, and we will review it shortly.</p>
                    <p><a href="{{ route('home') }}">Return to Home</a></p> <!-- Adjust the URL to your home page -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
