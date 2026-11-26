@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <h2 class="mb-4">📋 Available Services</h2>
        
        <div class="card mb-4">
            <div class="card-body">
                <p class="text-muted">Select a service to view details and requirements. You can request a queue number from the list.</p>
            </div>
        </div>

        <!-- Service Cards -->
        <div class="row g-4">
            <!-- Barangay Clearance -->
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Barangay Clearance</h5>
                    </div>
                    <div class="card-body">
                        <p><strong>Description:</strong> Proof that you are a resident of good standing in Barangay Alabang.</p>
                        <p><strong>Requirements:</strong></p>
                        <ul>
                            <li>Valid ID</li>
                            <li>Proof of Residency (e.g., Utility Bill)</li>
                            <li>1x1 ID Photo</li>
                        </ul>
                        <p><strong>Fee:</strong> ₱50.00</p>
                        <a href="{{ url('/queue') }}" class="btn btn-primary w-100">Request This Service</a>
                    </div>
                </div>
            </div>

            <!-- Certificate of Residency -->
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-0">Certificate of Residency</h5>
                    </div>
                    <div class="card-body">
                        <p><strong>Description:</strong> Certifies that you are a resident of Barangay Alabang.</p>
                        <p><strong>Requirements:</strong></p>
                        <ul>
                            <li>Valid Government ID showing address</li>
                            <li>Barangay ID (if available)</li>
                        </ul>
                        <p><strong>Fee:</strong> Free of Charge</p>
                        <a href="{{ url('/queue') }}" class="btn btn-success w-100">Request This Service</a>
                    </div>
                </div>
            </div>

            <!-- Certificate of Indigency -->
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header bg-warning text-dark">
                        <h5 class="mb-0">Certificate of Indigency</h5>
                    </div>
                    <div class="card-body">
                        <p><strong>Description:</strong> For students and residents needing assistance from government or private institutions.</p>
                        <p><strong>Requirements:</strong></p>
                        <ul>
                            <li>Certificate from Kagawad or Purok Leader</li>
                            <li>Valid ID / School ID</li>
                            <li>Recent Photo</li>
                        </ul>
                        <p><strong>Fee:</strong> Free of Charge</p>
                        <a href="{{ url('/queue') }}" class="btn btn-warning w-100">Request This Service</a>
                    </div>
                </div>
            </div>

            <!-- Business Permit -->
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header bg-danger text-white">
                        <h5 class="mb-0">Business Permit</h5>
                    </div>
                    <div class="card-body">
                        <p><strong>Description:</strong> Required for businesses operating within Barangay Alabang.</p>
                        <p><strong>Requirements:</strong></p>
                        <ul>
                            <li>Application Form</li>
                            <li>Proof of Business Location</li>
                            <li>Owner's Valid ID</li>
                            <li>DTI Registration (for Sole Proprietorship)</li>
                        </ul>
                        <p><strong>Fee:</strong> ₱300.00 — ₱1,000.00 depending on business type</p>
                        <a href="{{ url('/queue') }}" class="btn btn-danger w-100">Request This Service</a>
                    </div>
                </div>
            </div>

            <!-- Barangay ID -->
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header bg-info text-white">
                        <h5 class="mb-0">Barangay ID</h5>
                    </div>
                    <div class="card-body">
                        <p><strong>Description:</strong> Official identification card for residents of Barangay Alabang.</p>
                        <p><strong>Requirements:</strong></p>
                        <ul>
                            <li>Proof of Residency</li>
                            <li>1x1 ID Photo</li>
                            <li>Personal Appearance for Photo Capture</li>
                        </ul>
                        <p><strong>Fee:</strong> ₱100.00</p>
                        <a href="{{ url('/queue') }}" class="btn btn-info text-white w-100">Request This Service</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
