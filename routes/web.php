<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Homepage
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Services Page
Route::get('/services', function () {
    return view('services');
})->name('services');

// Queue Page — Show Form & Handle Submission
Route::get('/queue', function () {
    return view('queue');
})->name('queue');

Route::post('/queue', function (Request $request) {
    // Generate queue number: ALABANG-YY-XXXX
    $year = date('y');
    $random = str_pad(rand(1, 9999), 4, '0', STR_PAD_LEFT);
    $queueNumber = "ALABANG-{$year}-{$random}";
    
    return redirect()->back()
        ->with('queue_number', $queueNumber)
        ->with('name', $request->full_name)
        ->with('service', $request->service)
        ->with('date', $request->date);
});

// Track Request Page
Route::get('/track', function () {
    return view('track');
})->name('track');

Route::post('/track', function (Request $request) {
    $input = strtoupper(trim($request->queue_number));
    
    // Demo status logic — in full version, this checks your database
    if (str_starts_with($input, 'ALABANG-') && strlen($input) >= 12) {
        $statuses = ['Waiting', 'Serving', 'Completed'];
        $randomStatus = $statuses[array_rand($statuses)];
        
        return redirect()->back()
            ->with('status', $randomStatus)
            ->with('queue_num', $input)
            ->with('req_name', 'Sample Resident')
            ->with('service_type', 'Barangay Clearance');
    }
    
    return redirect()->back()->with('status', 'Not Found');
});
