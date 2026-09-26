<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/privacy-policy', function () {
    return view('pages.privacy');
})->name('privacy');

Route::get('/terms-of-service', function () {
    return view('pages.terms');
})->name('terms');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/portfolio', function () {
    return view('pages.portfolio');
})->name('portfolio');

Route::get('/blog', [App\Http\Controllers\BlogPostController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [App\Http\Controllers\BlogPostController::class, 'show'])->name('blog.show');

Route::post('/contact-submit', [App\Http\Controllers\ProjectInquiryController::class, 'submit'])->name('contact.submit');

// Auth Routes
Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'authenticate'])->name('login.post')->middleware('guest');
Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');
    Route::get('/inquiries', [App\Http\Controllers\AdminController::class, 'inquiries'])->name('inquiries');
    
    // Blog CMS Routes
    Route::get('/blogs', [App\Http\Controllers\AdminController::class, 'blogs'])->name('blogs');
    Route::get('/blogs/create', [App\Http\Controllers\AdminController::class, 'createBlog'])->name('blogs.create');
    Route::post('/blogs', [App\Http\Controllers\AdminController::class, 'storeBlog'])->name('blogs.store');
    Route::get('/blogs/{id}/edit', [App\Http\Controllers\AdminController::class, 'editBlog'])->name('blogs.edit');
    Route::put('/blogs/{id}', [App\Http\Controllers\AdminController::class, 'updateBlog'])->name('blogs.update');
    Route::delete('/blogs/{id}', [App\Http\Controllers\AdminController::class, 'deleteBlog'])->name('blogs.delete');

    // Careers CMS Routes
    Route::resource('careers', App\Http\Controllers\AdminCareerController::class);
    Route::get('careers/{career}/applications', [App\Http\Controllers\AdminCareerController::class, 'applications'])->name('careers.applications');
    Route::patch('applications/{application}/status', [App\Http\Controllers\AdminCareerController::class, 'updateApplicationStatus'])->name('applications.status');

    // Ad Pixels CMS Route
    Route::resource('pixels', App\Http\Controllers\AdPixelController::class);
});

// Careers Public Routes
Route::get('/karir', [App\Http\Controllers\CareerController::class, 'index'])->name('careers.index');
Route::get('/karir/{slug}', [App\Http\Controllers\CareerController::class, 'show'])->name('careers.show');
Route::post('/karir/{slug}/apply', [App\Http\Controllers\CareerApplicationController::class, 'store'])->name('careers.apply');

// Services Public Route
Route::get('/layanan/{slug}', [App\Http\Controllers\ServiceController::class, 'show'])->name('services.show');

// Sitemap
Route::get('/sitemap.xml', [App\Http\Controllers\SitemapController::class, 'index'])->name('sitemap');

