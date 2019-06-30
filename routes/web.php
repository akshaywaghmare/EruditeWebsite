<?php

Route::get('/', function () {
     $page_title="Erudite Softwares";
    return view('welcome',compact('page_title'));
});

Route::get('home','WebsiteController@index')->name('home');

Route::prefix('company')->group(function () {
    Route::get('about','WebsiteController@About')->name('about');
    Route::get('why-us','WebsiteController@WhyUs')->name('why-us');
    Route::get('careers','WebsiteController@Careers')->name('careers');
    Route::get('contact','WebsiteController@Contact')->name('contact');
});


Route::prefix('services')->group(function () {
    Route::get('product-development','WebsiteController@ProductDevelopment')->name('product-development');
    Route::get('website-development','WebsiteController@WebsiteDevelopment')->name('website-development');
    Route::get('mobile-development','WebsiteController@MobileDevelopment')->name('mobile-development');
    Route::get('custom-software-development','WebsiteController@CustomSoftwareDevelopment')->name('custom-software-development');
    Route::get('ui-ux-design','WebsiteController@UIUXDesign')->name('ui-ux-design');
    Route::get('digital-strategy','WebsiteController@DigitalStrategy')->name('digital-strategy');
});


Route::prefix('industries')->group(function () {
    Route::get('health-care','WebsiteController@HealthCare')->name('health-care');
    Route::get('logistics-and-transportation','WebsiteController@LogisticsAndTransportation')->name('logistics-and-transportation');
    Route::get('real-estate','WebsiteController@RealEstate')->name('real-estate');
    Route::get('retail','WebsiteController@Retail')->name('retail');
});

