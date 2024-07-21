<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CausesController;
use App\Http\Controllers\ContacController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OurTeamController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\ProgramController;
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
Route::get('articles', [PublicationController::class, 'article'])->name('articles');
Route::get('articles/{id}', [PublicationController::class, 'singleArticle'])->name('single-article');
Route::get('laporan-keuangan', [PublicationController::class, 'laporanKeuangan'])->name('laporan-keuangan');

Route::get('causes', [CausesController::class, 'index'])->name('causes');

Route::get('ayd-sehat', [ProgramController::class, 'aydSehat'])->name('ayd-sehat');
Route::get('ayd-cerdas', [ProgramController::class, 'aydCerdas'])->name('ayd-cerdas');
Route::get('/programs', [ProgramController::class, 'index'])->name('programs.index');
Route::get('/program/{id}', [ProgramController::class, 'show'])->name('program.show');
Route::get('/program/{id}/photos', [ProgramController::class, 'getPhotos'])->name('program.photos');


Route::get('/donate', [DonateController::class, 'index'])->name('donate.index');
Route::post('/donate', [DonateController::class, 'store'])->name('donate.store');
Route::get('/success', [DonateController::class, 'success'])->name('success');
Route::get('/callback', [DonateController::class, 'callback'])->name('callback');


Route::get('team', [OurTeamController::class, 'index'])->name('team');
Route::get('contact', [ContacController::class, 'index'])->name('contact');
Route::get('service', [ServiceController::class, 'index'])->name('service');
