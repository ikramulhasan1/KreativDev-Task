<?php

use App\Http\Controllers\PaymentGateways\FlutterwaveController;
use App\Http\Controllers\PaymentGateways\MollieController;
use App\Http\Controllers\PaymentGateways\RazorpayController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\VerifyCsrfToken;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PaymentGateways\PaypalController;
use App\Http\Controllers\PaymentGateways\SSLCommerzController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\SubCategoryController;


Route::get('/', function () {
    return redirect()->route('categories.index');
});

Route::resources([
    'categories' => CategoryController::class,
    'sub-categories' => SubCategoryController::class,
]);
