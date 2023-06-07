<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// desktop
Route::resource('/', App\Http\Controllers\Desktop\HomeController::class);

Route::resource('/accommodations', App\Http\Controllers\Desktop\VillaController::class);
// Route::get('/accommodations', [App\Http\Controllers\Desktop\VillaController::class, 'index'])->name('villas.index');
// Route::get('/accommodation/{slug}', [App\Http\Controllers\Desktop\VillaController::class, 'show'])->name('villas.show');

// Route::resource('/hidden-palace', App\Http\Controllers\Desktop\HiddenPalaceController::class);
Route::resource('/activities', App\Http\Controllers\Desktop\ExperienceController::class);
Route::resource('/facilities', App\Http\Controllers\Desktop\ResortFacilityController::class);
Route::resource('/dining', App\Http\Controllers\Desktop\DiningController::class);
Route::resource('/spa', App\Http\Controllers\Desktop\SpaController::class);
Route::resource('/weddings', App\Http\Controllers\Desktop\WeddingController::class);
Route::resource('/gallery', App\Http\Controllers\Desktop\GalleryController::class);
Route::resource('/contact-us', App\Http\Controllers\Desktop\ContactController::class);

Route::resource('/offers', App\Http\Controllers\Desktop\OfferController::class);
// Route::get('/offers', [App\Http\Controllers\Desktop\OfferController::class, 'index'])->name('offers.index');
// Route::get('/offer/{slug}', [App\Http\Controllers\Desktop\OfferController::class, 'show'])->name('offers.show');

Route::resource('/honeymoon', App\Http\Controllers\Desktop\HoneymoonController::class);

Route::resource('/story', App\Http\Controllers\Desktop\StoryController::class);
Route::resource('/policy-legal', App\Http\Controllers\Desktop\PolicyLegalController::class);
Route::resource('/awards', App\Http\Controllers\Desktop\AwardController::class);
Route::resource('/press', App\Http\Controllers\Desktop\PressController::class);
Route::resource('/videos', App\Http\Controllers\Desktop\VideoController::class);
// Route::resource('/day-guest', App\Http\Controllers\Desktop\DayGuestController::class);

// Route::resource('/blog', App\Http\Controllers\Desktop\BlogController::class);
Route::get('/blog', [App\Http\Controllers\Desktop\BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/post/{slug}', [App\Http\Controllers\Desktop\BlogController::class, 'show'])->name('blog.show');

Route::resource('/careers', App\Http\Controllers\Desktop\CareerController::class);
// Route::resource('/virtual-tour', App\Http\Controllers\Desktop\VirtualTourController::class);

Route::resource('/inquiry', App\Http\Controllers\Desktop\InquiryController::class);
Route::resource('/thank-you', App\Http\Controllers\Desktop\ThankYouController::class);

// mobile
// Route::get('/m', [App\Http\Controllers\Mobile\HomeController::class, 'index'])->name('mindex');
// Route::get('/m/blog', [App\Http\Controllers\Mobile\BlogController::class, 'index'])->name('mblog');
// Route::get('/m/blog/{slug}', [App\Http\Controllers\Mobile\BlogController::class, 'show'])->name('mblog.show');
// Route::get('/m/dining', [App\Http\Controllers\Mobile\DiningController::class, 'index'])->name('mdining');
// Route::get('/m/experience', [App\Http\Controllers\Mobile\ExperienceController::class, 'index'])->name('mexperience');
// Route::get('/m/gallery', [App\Http\Controllers\Mobile\GalleryController::class, 'index'])->name('mgallery');
// Route::get('/m/offer', [App\Http\Controllers\Mobile\OfferController::class, 'index'])->name('moffer');
// Route::get('/m/spa', [App\Http\Controllers\Mobile\SpaController::class, 'index'])->name('mspa');
// Route::get('/m/villa', [App\Http\Controllers\Mobile\VillaController::class, 'index'])->name('mvilla');

// mobile 2
Route::get('/m', [App\Http\Controllers\Mobile\HomeController::class, 'index'])->name('mindex');
Route::get('/m/blog', [App\Http\Controllers\Mobile\BlogController::class, 'index'])->name('mblog');
Route::get('/m/blog/{slug}', [App\Http\Controllers\Mobile\BlogController::class, 'show'])->name('mblog.show');
Route::get('/m/dining', [App\Http\Controllers\Mobile\DiningController::class, 'index'])->name('mdining');
Route::get('/m/hidden-palace', [App\Http\Controllers\Mobile\HiddenPalaceController::class, 'index'])->name('mhiddenpalace');
Route::get('/m/activities', [App\Http\Controllers\Mobile\ExperienceController::class, 'index'])->name('mexperience');
Route::get('/m/gallery', [App\Http\Controllers\Mobile\GalleryController::class, 'index'])->name('mgallery');
Route::get('/m/offers', [App\Http\Controllers\Mobile\OfferController::class, 'index'])->name('moffer');
Route::get('/m/spa', [App\Http\Controllers\Mobile\SpaController::class, 'index'])->name('mspa');
Route::get('/m/accommodations', [App\Http\Controllers\Mobile\VillaController::class, 'index'])->name('mvilla');
Route::get('/m/weddings', [App\Http\Controllers\Mobile\WeddingController::class, 'index'])->name('mwedding');
Route::get('/m/honeymoon', [App\Http\Controllers\Mobile\HoneymoonController::class, 'index'])->name('mhoneymoon');
Route::get('/m/contact', [App\Http\Controllers\Mobile\ContactUsController::class, 'index'])->name('mcontact');
Route::get('/m/facilities', [App\Http\Controllers\Mobile\ResortFacilityController::class, 'index'])->name('mfacility');


Route::get('/link', function () {
    $target = '/home/wcw3g0802d5s/filament_elevate/storage/app/public';
    $shortcut = '/home/wcw3g0802d5s/public_html/storage';
    symlink($target, $shortcut);
});
