<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\CustomerController;
use App\Livewire\OrderHistory;

// Home route
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// Backend routes
Route::get('/feedback', function () {
    return view('Back-end.feedback');
});

Route::get('/shipment', function () {
    return view('Back-end.Shipment');
});

// Additional routes
Route::get('/ship', function () {
    return view('additional.ship');
});

Route::get('/plane', function () {
    return view('additional.plane');
});

Route::get('/Transport', function () {
    return view('additional.Transportation');
});

Route::get('/Truck', function () {
    return view('additional.Truck');
});

// Sub pages routes
Route::get('/about', function () {
    return view('sub_pages.About');
});

Route::get('/service', function () {
    return view('sub_pages.service');
});

Route::get('/members', function () {
    return view('sub_pages.ourpeople');
});

Route::get('/career', function () {
    return view('sub_pages.career');
});

Route::get('/faq', function () {
    return view('sub_pages.faq');
});

Route::get('/contact', function () {
    return view('sub_pages.contact');
});

// Services routes
Route::get('/truck', function () {
    return view('Services.trucking');
});

Route::get('/air', function () {
    return view('Services.airtransportation');
});

Route::get('/marine', function () {
    return view('Services.marine');
});

Route::get('/moving', function () {
    return view('Services.moving');
});

Route::get('/shipping', function () {
    return view('Services.shipping');
});

Route::get('/transport', function () {
    return view('Services.transportation');
});

// Authenticated routes
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Email verification routes
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

// Email verification handler
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect()->route('dashboard',['verified' => 1]);
})->middleware(['auth', 'signed'])->name('verification.verify');

// Resending email verifications
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// Feedback routes
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');

// Customer routes
Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');

// Order routes
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');


Route::get('/profile', function () {
    return view('profile.show');
})->name('profile.show');

// User Panels Route

// Dashboard route
Route::get('/app', function () {
    return view('Components.layout.app');
})->name('app');
// Shipments
Route::get('/shipment', function () {
    return view('sub_pages.shipment');
})->name('shipment');
//order route
Route::get('/order', function () {
    return view('sub_pages.order');
})->name('order');
// Order History
Route::get('/history', function () {
    return view('sub_pages.Orders_History');
})->name('history');
// FeedBack
Route::get('/feed', function () {
    return view('sub_pages.Feedback');
})->name('feed');
//Customer Details
Route::get('/customer', function () {
    return view('sub_pages.customer');
})->name('customer');

//User panels components
Route::get('/order-form', function () {
    return view('Userpanel.user_components.order_form');
});

Route::get('/feed-form', function () {
    return view('Userpanel.user_components.feedback_form');
});

Route::get('/customer-form', function () {
    return view('Userpanel.user_components.customer_form');
});


Route::get('/order-history', OrderHistory::class)->name('order-history');