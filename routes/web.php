<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyRegistrationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\TermConditionController;
use App\Http\Controllers\VideoTutorialController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/company-register', [CompanyRegistrationController::class, 'create'])->name('company-register.create')->middleware('slug.present');
Route::post('/company-register', [CompanyRegistrationController::class, 'store'])->name('company-register.store');
Route::post('/company-register/validate-field', [CompanyRegistrationController::class, 'validateField'])->name('company-register.validate-field');
Route::get('/company-register/confirm', [CompanyRegistrationController::class, 'confirm'])->name('company-register.confirm');

Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/faqs', [FaqController::class, 'index'])->name('faqs.index');
Route::get('/video-tutorials', [VideoTutorialController::class, 'index'])->name('video-tutorials.index');
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact-us.index');
Route::post('/contact-us', [ContactController::class, 'sendMail'])->name('contact-us.sendMail');
Route::get('/terms-conditions', [TermConditionController::class, 'index'])->name('terms-conditions.index');
Route::get('/privacy-policy', [PrivacyPolicyController::class, 'index'])->name('privacy-policy.index');
