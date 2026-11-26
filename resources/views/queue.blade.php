@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <h2 class="mb-4">🎟️ Get Your Queue Number</h2>
        
        <!-- Form -->
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ url('/queue') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" name="full_name" class="form-control" placeholder="Enter your full name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contact Number</label>
                        <input type="tel" name="contact" class="form-control" placeholder="09XX-XXX-XXXX" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select Service</label>
                        <select name="service" class="form-select" required>
                            <option value="">-- Choose a service --</option>
                            <option value="Barangay Clearance">Barangay Clearance — ₱50.00</option>
                            <option value="Certificate of Residency">Certificate of Residency — Free</option>
                            <option value="Certificate of Indigency">Certificate of Indigency — Free</option>
                            <option value="Business Permit">Business Permit — ₱300–1,000</option>
                            <option value="Barangay ID">Barangay ID — ₱100.00</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Date of Visit</label>
                        <input type="date" name="date" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Generate Queue Number</button>
                </form>
            </div>
        </div>

        <!-- Queue Number Display (Shown after submission) -->
        @if(session('queue_number'))
        <div class="card bg-success text-white text-center p-4">
            <h3>✅ Queue Number Generated!</h3>
            <p class="display-4 fw-bold">{{ session('queue_number') }}</p>
            <p><strong>Name:</strong> {{ session('name') }}</p>
            <p><strong>Service:</strong> {{ session('service') }}</p>
            <p><strong>Date:</strong> {{ session('date') }}</p>
            <hr>
            <p class="mb-0">📌 Please save or write down your queue number.<br>Arrive at the Barangay Hall before your turn!</p>
        </div>
        @endif
    </div>
</div>
@endsection
