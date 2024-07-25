<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CausesController;
use App\Http\Controllers\ContacController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OurTeamController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PublicationController;
use App\Jobs\SendEmailJob;
use App\Mail\SendEmail;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('profil', [AboutController::class, 'profile'])->name('profil');
Route::get('struktur', [AboutController::class, 'structure'])->name('struktur');
Route::get('legal-formal', [AboutController::class, 'legalFormal'])->name('legal-formal');

Route::get('rekening-donasi', [ServiceController::class, 'rekeningDonasi'])->name('rekening-donasi');
Route::get('jemput-layanan', [ServiceController::class, 'jemputLayanan'])->name('jemput-layanan');
Route::get('kantor-layanan', [ServiceController::class, 'kantorLayanan'])->name('kantor-layanan');

Route::get('event', [PublicationController::class, 'event'])->name('event');
Route::get('artikel', [PublicationController::class, 'article'])->name('artikel');
Route::get('laporan-keuangan', [PublicationController::class, 'laporanKeuangan'])->name('laporan-keuangan');
Route::get('detail', [PublicationController::class, 'singleArticle'])->name('article-single');

Route::get('causes', [CausesController::class, 'index'])->name('causes');

Route::get('donation', [DonateController::class, 'index'])->name('donate');
Route::post('donation/store', [DonateController::class, 'store'])->name('donate.store');
Route::get('/success', [DonateController::class, 'success'])->name('success');


Route::get('team', [OurTeamController::class, 'index'])->name('team');
Route::get('contact', [ContacController::class, 'index'])->name('contact');
Route::get('service', [ServiceController::class, 'index'])->name('service');


Route::post('send-email', function (Request $request) {
    
    $data['email'] = 'raihandzikra20@gmail.com';

    dispatch(new SendEmailJob($data));

    return 'success';
});
