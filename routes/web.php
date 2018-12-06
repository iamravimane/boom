<?php

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





 Route::get('/','HomeController@index');




 Route::any('/{myslug}', array( 'uses'=>'ReportController@show'))
 ->where('myslug','^([0-9A-Za-z\-]+)?-market');



Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});

//latest report
Route::get('/latestreport', 'ReportController@getAllReport')->name('latestreport');

//searchbar on homepage
Route::get('/home/search', 'ReportController@searchReport');

Route::get('/reportdetails/reportDescription', 'ReportController@reportDescription');

Route::get('/reportdetails/reportToc', 'ReportController@reportToc');


Route::get('/shopping-cart','CartController@index');

Route::get('/add','CartController@store');

Route::get('/checkout/{id}','CartController@checkout');


//payment-modes
Route::get('/payment-modes', function () {
    return view('pages.paymentmodes');
})->name('paymentmodes');

//privacy-policy
Route::get('/privacy-policy', function () {
    return view('pages.privacypolicy');
})->name('privacypolicy');

//gdpr-policy
Route::get('/gdpr-policy', function () {
    return view('pages.gdprpolicy');
})->name('gdprpolicy');

//disclaimer
Route::get('/disclaimer', function () {
    return view('pages.disclaimer');
})->name('disclaimer');

//return-policy
Route::get('/return-policy', function () {
    return view('pages.returnpolicy');
})->name('returnpolicy');

//sitemap
Route::get('/sitemap', function () {
    return view('pages.sitemap');
})->name('sitemap');




//search by query
Route::get('/advanced-search/search', 'ReportController@advancedSearchReport');

//search by category
Route::get('/advanced-search/catgorysearch', 'ReportController@categorySearchReport');

//search by price and category
Route::get('/advanced-search/pricesearch', 'ReportController@priceSearchReport');

//search by price
Route::get('/advanced-search/onlypricesearch', 'ReportController@onlyPriceSearchReport');

//latest report on adavanced search
Route::get('/advanced-search/latest', 'ReportController@showLatestReport');

Route::get('/advanced-search', function () {
    return view('pages.advancedsearch');
})->name('advancedsearch');



Auth::routes();



 // Route::get('publishersAnyData', 'PublisherController@anyData')->name('publishersAnyData');


Route::get('/data', 'BannerController@anyData')->name('banner.data');

Route::group(['prefix' => 'admin'], function () {
    Route::resource('category', 'CategoryController');
    Route::resource('publishers', 'PublisherController');

    Route::resource('banners', 'BannerController');

    Route::resource('coupans', 'CouponsController');


    


    Route::resource('press','PressReleaseController');
    Route::resource('news','NewsController');
    Route::resource('report','ReportController');
    Route::resource('cms','CmsController');


    Route::get('/excel-import', function () {
        return view('admin.report.excelimport');
    });
    
    Route::get('/sub-categories', 'CategoryController@getSubcategories');
    Route::post('/fetch-sub-categories', 'CategoryController@selectSubCategories');
    Route::post('upload', 'ReportController@import')->name('excelimport');
    

    

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

