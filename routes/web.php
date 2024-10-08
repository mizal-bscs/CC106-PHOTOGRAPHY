<?php

use App\Livewire\Auth\AuthHome;
use App\Livewire\Auth\AuthServices;
use App\Livewire\Auth\AuthPreNup;
use App\Livewire\Auth\AuthPredebut;
use App\Livewire\Auth\AuthPortrait;
use App\Livewire\Auth\AuthWedding;
use App\Livewire\Auth\AuthLogin;
use App\Livewire\Auth\AuthContact;
use App\Livewire\Auth\AuthAbout;
use App\Livewire\Auth\AuthBooking;
use Illuminate\Support\Facades\Route;

 
Route::get('/', AuthHome::class)->name('home');
Route::get('/services', AuthServices::class)->name('services');
Route::get('/pre-nup', AuthPreNup::class)->name('pre-nup');
Route::get('/predebut', AuthPredebut::class)->name('predebut');
Route::get('/portrait', AuthPortrait::class)->name('portrait');
Route::get('/wedding', AuthWedding::class)->name('wedding');
Route::get('/login', AuthLogin::class)->name('login');
Route::get('/about', AuthAbout::class)->name('about');
Route::get('/contact', AuthContact::class)->name('contact');
Route::get('/booking', AuthBooking::class)->name('booking');