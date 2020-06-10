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

Route::get('/','Frontend\IndexController@index');
Route::post('/faq','Frontend\IndexController@faqs')->name('faqs');
Route::get('/faq/question','Frontend\IndexController@question');
Route::get('/blog/{slug}','Backend\BlogController@show');
Route::get('/about','Frontend\IndexController@about');
Route::get('/xutbe','Frontend\IndexController@xutbe');
Route::get('/faq','Frontend\IndexController@faq')->name('faq');
Route::post('/faq/search','Frontend\IndexController@faq_search')->name('faq.search');
Route::get('/holy-days','Frontend\IndexController@holy_days')->name('holy-days');




   
        Route::get('/dashboard', 'Backend\DefaultController@index')->name('dashboard.Index')->middleware('admin');
        Route::get('/admin', 'Backend\DefaultController@login')->name('login');
        Route::post('/logout', 'Backend\DefaultController@logout')->name('logout');
        Route::post('/login', 'Backend\DefaultController@authenticate')->name('Authenticate');
        Route::get('/admin/profile', 'Backend\ProfileController@index')->name('profile')->middleware('admin');
        Route::post('/admin/profile/update', 'Backend\ProfileController@update')->name('profile.update')->middleware('admin');
        Route::get('/admin/profile/create', 'Backend\ProfileController@create')->name('profile.create')->middleware('admin');
        Route::get('/admin/profile/add', 'Backend\ProfileController@add')->name('profile.add')->middleware('admin');
        Route::post('/admin/profile/create', 'Backend\ProfileController@create')->name('profile.create')->middleware('admin');
        Route::get('/admin/profile/list', 'Backend\ProfileController@list')->name('profile.list')->middleware('admin');
        Route::get('/admin/profile/delete/{id}', 'Backend\ProfileController@destroy')->name('profile.delete')->middleware('admin');
       
      
        Route::get('/admin/blogs', 'Backend\BlogController@index')->name('blog')->middleware('admin');
        Route::get('/admin/blogs/create', 'Backend\BlogController@create')->name('blog.create')->middleware('admin');
        Route::post('/admin/blogs/sortable', 'Backend\BlogController@sortable')->name('blog.Sortable')->middleware('admin');
        Route::post('/admin/blogs/store', 'Backend\BlogController@store')->name('blog.store')->middleware('admin');
        Route::post('/admin/blogs/update', 'Backend\BlogController@update')->name('blog.update')->middleware('admin');
        Route::get('/admin/blogs/delete/{id}', 'Backend\BlogController@destroy')->name('blog.delete')->middleware('admin');
        Route::get('/admin/about', 'Backend\AboutController@index')->name('about')->middleware('admin');
        Route::get('/admin/about/delete/file/{id}', 'Backend\AboutController@destroy_file')->name('about.delete')->middleware('admin');
        Route::get('/admin/blogs/edit/{id}', 'Backend\BlogController@edit')->name('blog.edit')->middleware('admin');
        Route::post('/admin/about/update', 'Backend\AboutController@update')->name('about.update')->middleware('admin');
        Route::get('/admin/Khutba', 'Backend\KhutbaController@index')->name('Khutba')->middleware('admin');
        Route::get('/admin/khutba/create', 'Backend\KhutbaController@create')->name('Khutba.create')->middleware('admin');
        Route::post('/admin/Khutba/sortable', 'Backend\KhutbaController@sortable')->name('Khutba.Sortable')->middleware('admin');
        Route::post('/admin/Khutba/store', 'Backend\KhutbaController@store')->name('Khutba.store')->middleware('admin');
        Route::post('/admin/Khutba/update', 'Backend\KhutbaController@update')->name('Khutba.update')->middleware('admin');
        Route::get('/admin/Khutba/delete/{id}', 'Backend\KhutbaController@destroy')->name('Khutba.delete')->middleware('admin');
        Route::get('/admin/Khutba/edit/{id}', 'Backend\KhutbaController@edit')->name('Khutba.edit')->middleware('admin');
      
        Route::get('/admin/namaz', 'Backend\NamazController@index')->name('namaz')->middleware('admin');
        Route::get('/admin/namaz/create', 'Backend\NamazController@create')->name('namaz.create')->middleware('admin');
        Route::get('/admin/namaz/file/add', 'Backend\NamazController@add_file')->name('namaz.file')->middleware('admin');
        Route::post('/admin/namaz/files/add', 'Backend\NamazController@add_files')->name('namaz.file_adds')->middleware('admin');
        Route::get('/admin/namaz/delete/file/{id}', 'Backend\NamazController@destroy_n')->name('namaz_f.delete')->middleware('admin');
      
       
        Route::post('/admin/namaz/sortable', 'Backend\NamazController@sortable')->name('namaz.Sortable')->middleware('admin');
        Route::post('/admin/namaz/store', 'Backend\NamazController@store')->name('namaz.store')->middleware('admin');
        Route::post('/admin/namaz/update', 'Backend\NamazController@update')->name('namaz.update')->middleware('admin');
        Route::get('/admin/namaz/delete/{id}', 'Backend\NamazController@destroy')->name('namaz.delete')->middleware('admin');
        Route::get('/admin/namaz/edit/{id}', 'Backend\NamazController@edit')->name('namaz.edit')->middleware('admin');
      
        Route::get('/admin/faq', 'Backend\FaqController@index')->name('faq.admin')->middleware('admin');
        Route::get('/admin/faq/create', 'Backend\FaqController@create')->name('faq.create')->middleware('admin');
        Route::post('/admin/faq/sortable', 'Backend\FaqController@sortable')->name('faq.Sortable')->middleware('admin');
        Route::post('/admin/faq/store', 'Backend\FaqController@store')->name('faq.store')->middleware('admin');
        Route::post('/admin/faq/update', 'Backend\FaqController@update')->name('faq.update')->middleware('admin');
        Route::get('/admin/faq/delete/{id}', 'Backend\FaqController@destroy')->name('faq.delete')->middleware('admin');
        Route::get('/admin/faq/edit/{id}', 'Backend\FaqController@edit')->name('faq.edit')->middleware('admin');
      
        Route::get('/admin/mubarek', 'Backend\MubarekController@index')->name('mubarek')->middleware('admin');
        Route::get('/admin/mubarek/create', 'Backend\MubarekController@create')->name('mubarek.create')->middleware('admin');
        Route::post('/admin/mubarek/sortable', 'Backend\MubarekController@sortable')->name('mubarek.Sortable')->middleware('admin');
        Route::post('/admin/mubarek/store', 'Backend\MubarekController@store')->name('mubarek.store')->middleware('admin');
        Route::post('/admin/mubarek/update', 'Backend\MubarekController@update')->name('mubarek.update')->middleware('admin');
        Route::get('/admin/mubarek/delete/{id}', 'Backend\MubarekController@destroy')->name('mubarek.delete')->middleware('admin');
        Route::get('/admin/mubarek/edit/{id}', 'Backend\MubarekController@edit')->name('mubarek.edit')->middleware('admin');
      
        Route::get('/admin/settings', 'Backend\SettingsController@index')->name('settings')->middleware('admin');
        Route::post('/admin/settings/update', 'Backend\SettingsController@update')->name('settings.update')->middleware('admin');
      
        Route::get('/home', 'HomeController@index')->name('home');


// Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
