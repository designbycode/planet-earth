<?php

    use App\Http\Controllers\AboutUsPageController;
    use App\Http\Controllers\ContactUsPageController;
    use App\Http\Controllers\Events\EventsIndexPageController;
    use App\Http\Controllers\Events\EventsShowPageController;
    use App\Http\Controllers\HomePageController;
    use App\Http\Controllers\Trailers\TrailersIndexController;
    use App\Http\Controllers\Trailers\TrailersShowController;
    use Illuminate\Support\Facades\Route;

    Route::get('/', HomePageController::class)->name('home');
    Route::get('/about-us', AboutUsPageController::class)->name('about-us');
    Route::get('/film-festivals', EventsIndexPageController::class)->name('film-festivals.index');
    Route::get('/film-festivals/{event:slug}', EventsShowPageController::class)->name('film-festivals.show');
    Route::get('/contact-us', ContactUsPageController::class)->name('contact-us');
    Route::get('/trailers', TrailersIndexController::class)->name('trailers.index');
    Route::get('/trailers/{trailer}', TrailersShowController::class)->name('trailers.show');
