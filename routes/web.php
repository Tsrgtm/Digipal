<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactForm;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::prefix('services')->group(function () {
    Route::get('360-digital-marketing', function () {
        return view('services.marketing');
    })->name('services.marketing');

    Route::get('video-production', function () {
        return view('services.video-prod');
    })->name('services.video-prod');

    Route::get('social-media-marketing', function () {
        return view('services.smm');
    })->name('services.smm');

    Route::get('podcast-creation', function () {
        return view('services.podcast');
    })->name('services.podcast');

    Route::get('web-development', function () {
        return view('services.web-dev');
    })->name('services.web-dev');

    Route::get('seo', function () {
        return view('services.seo');
    })->name('services.seo');
});

Route::get('contact', function () {
    return view('pages.contact');
})->name('contact');

Route::post('contact', [ContactForm::class, 'submit'])->name('contact.submit');

Route::get('blogs', function () {
    return view('pages.blogs');
})->name('blogs');

Route::get('request-a-proposal', function () {
    return view('pages.request-proposal');
})->name('proposal');

Route::get('blogs/single', function () {
    return view('pages.single-blog');
})->name('single-blog');

Route::get('about', function () {
    return view('pages.about');
})->name('about');


require __DIR__ . '/auth.php';
