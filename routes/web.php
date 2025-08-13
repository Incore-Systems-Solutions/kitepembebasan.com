<?php

use App\Http\Controllers\ArtikelController;
use App\Models\Artikel;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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

Route::get('/',[ArtikelController::class, 'index']);
Route::get('lang/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'id', 'zh', 'ar'])) {
        abort(400);
    }
    session(['locale' => $locale]);
    app()->setLocale($locale);
    return redirect()->back();
});
Route::get('/artikel/{slug}',[ArtikelController::class, 'detailArtikel']);
Route::get('/category/{slug}',[ArtikelController::class, 'categoryArtikel']);


Route::get('generate/artikel', [ArtikelController::class, 'generateArtikel']);
Route::get('generate/artikel-image', [ArtikelController::class, 'generateArtikelImage']);
// new route
Route::get('kontak-kami', function () {
    return view('pages.kontak-kami.contact');
});
Route::get('konsultan', function () {
    return view('pages.kontak-kami.index');
});
Route::get('sitemap', function () {
    return response()->file(public_path('sitemap.xml'));
});

Route::get('/kite-pembebasan', [BlogController::class, 'kitePembebasan']);
Route::get('/fasilitas-fiskal', [BlogController::class, 'fasilitasFiskal']);
Route::get('/industri-ekspor', [BlogController::class, 'industriEkspor']);
Route::get('/kawasan-berikat', [BlogController::class, 'kawasanBerikat']);
Route::get('/sistem-beacukai', [BlogController::class, 'sistemBeaCukai']);
Route::get('/sistem-inventory', [BlogController::class, 'sistemInventory']);
Route::get('/erp-manufaktur', [BlogController::class, 'erpManufaktur']);
Route::get('/pengawasan-barang', [BlogController::class, 'pengawasanBarang']);
Route::get('/solusi-industri', [BlogController::class, 'solusiIndustri']);
Route::get('/sistem-it-pabrik', [BlogController::class, 'sistemITPabrik']);