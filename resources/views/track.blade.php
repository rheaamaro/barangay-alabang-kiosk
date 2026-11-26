@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <h2 class="mb-4 text-center">🔍 Track Your Request</h2>
        
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ url('/track') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Enter Queue / Reference Number</label>
                        <input type="text" name="queue_number" class="form-control" placeholder="e.g., ALABANG-24-0018" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Check Status</button>
                </form>
            </div>
        </div>

        <!-- Status Result -->
        @if(session('status'))
        <div class="card">
            <div class="card-header text-center">
                <h5>Request Status</h5>
            </div>
            <div class="card-body text-center">
                <p class="h4">
                    @if(session('status') == 'Waiting')
                        <span class="badge status-waiting px-4 py-2">⏳ Waiting</span>
                    @elseif(session('status') == 'Serving')
                        <span class="badge status-serving px-4 py-
2">✅ Serving</span>                    @elseif(session('status') == 'Completed')
                        <span class="badge status-completed px-4 py-2">✅ Completed</span>
                    @else
                        <span class="badge bg-secondary px-4 py-2">❌ Not Found</span>
                    @endif
                </p>
                @if(session('status') != 'Not Found' && session('status'))
                <p class="mt-3"><strong>Queue #:</strong> {{ session('queue_num') }}</p>
                <p><strong>Name:</strong> {{ session('req_name') }}</p>
                <p><strong>Service:</strong> {{ session('service_type') }}</p>
                @endif
                <a href="{{ url('/track') }}" class="btn btn-secondary mt-3">Check Another</a>
            </div>
        </div>
        @endif

        <div class="alert alert-info mt-4">
            <strong>💡 How to use:</strong> Enter your queue number exactly as it was issued (e.g., ALABANG-24-0018). You don't need to log in — just enter your reference number!
        </div>
    </div>
</div>
@endsection
