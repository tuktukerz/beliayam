<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FormOrderController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SeoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LegalController;
use App\Http\Controllers\SectionBannerController;
use App\Http\Controllers\SiteIdentityController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WelcomeController::class, 'show'])->name('welcome');
Route::get('product', [ProductController::class, 'showListProduct'])->name('showListProduct');
Route::get('privacy', [LegalController::class, 'listPrivacy'])->name('privacy');
Route::get('tos', [LegalController::class, 'listTos'])->name('tos');
Route::get('about', [AboutUsController::class, 'show'])->name('about');
Route::get('order', [FormOrderController::class, 'formView'])->name('order');


Auth::routes([
    'register' => true, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('admin/site-identity', SiteIdentityController::class);
    Route::resource('admin/banner', SectionBannerController::class);
    Route::resource('admin/pricing', PricingController::class);
    Route::resource('admin/content', ContentController::class);
    Route::resource('admin/product', ProductController::class);
    Route::resource('admin/legal', LegalController::class);
    Route::resource('admin/faq', FaqController::class);
    Route::resource('admin/form', FormOrderController::class);
    Route::resource("admin/seo", SeoController::class);
});
