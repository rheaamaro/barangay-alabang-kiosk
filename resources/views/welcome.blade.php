@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card p-5 text-center">
            <h1 class="display-5 fw-bold mb-3">Welcome to Barangay Alabang Community Kiosk</h1>
            <p class="lead text-muted mb-5">Request services, get your queue number online, and skip the long lines at the Barangay Hall!</p>
            
            <div class="row g-4 mb-5">
                <div class="col-md-4">
                    <div class="card p-4 h-100">
                        <h3>📋 View Services</h3>
                        <p>See what documents we offer, requirements, and fees.</p>
                        <a href="{{ url('/services') }}" class="btn btn-primary">View Services</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4 h-100">
                        <h3>🎟️ Get in Line</h3>
                        <p>Reserve your queue number online before visiting the Barangay Hall.</p>
                        <a href="{{ url('/queue') }}" class="btn btn-success">Get Queue Number</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4 h-100">
                        <h3>🔍 Track Status</h3>
                        <p>Check your position in the queue anytime using your reference number.</p>
                        <a href="{{ url('/track') }}" class="btn btn-info text-white">Track Request</a>
                    </div>
                </div>
            </div>

            <div class="alert alert-info">
                <strong>💡 Reminder:</strong> Please arrive at the Barangay Hall when your number is near. Thank you!
            </div>
        </div>
    </div>
</div>
@endsection
