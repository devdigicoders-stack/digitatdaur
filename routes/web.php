<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $blogs = (new BlogController)->getHomeBlogs(3);

    return view('welcome', compact('blogs'));
})->name('home');

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blog/{url}', [BlogController::class, 'show'])->name('blogs.show');
Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms-and-conditions', [PageController::class, 'terms'])->name('terms');
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');
Route::get('/robots.txt', [SitemapController::class, 'robots'])->name('robots');
Route::post('/submit-lead', [LeadController::class, 'submit'])->name('lead.submit');
