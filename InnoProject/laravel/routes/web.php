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

Route::get('/', function () {
    return view('welcome');
});
Route::any('core/settings', 'SettingsController@index')->middleware('CORS');
Route::any('Startups/StartupsApi', 'Backend\StartupsController@StartupApi')->middleware('CORS');
Route::any('/Startups/filter', 'Backend\StartupsController@fullFilter')->middleware('CORS');
Route::any('/core/partners', 'Backend\PartnersController@PartnersApi')->middleware('CORS');
Route::any('/konkurs/banners/api', 'Backend\KonkursController@KonkursBannersApi')->middleware('CORS');
Route::any('KonkursApi', 'Backend\KonkursController@Api')->middleware('CORS');
Route::any('/core/userInfo', 'Backend\UserController@userInfo')->middleware('CORS');
Route::any('/core/userMobile', 'Backend\UserController@mobileNumber')->middleware('CORS');
Route::any('/core/userEmail', 'Backend\UserController@userEmail')->middleware('CORS');
Route::any('/core/userPassword', 'Backend\UserController@userPassword')->middleware('CORS');
Route::post('/core/userImage', 'Backend\UserController@userImage')->middleware('CORS');
Route::any('/JuriApi', 'Backend\UserController@JuriApi')->middleware('CORS');
Route::any('/PagesApi', 'Backend\PagesController@Api')->middleware('CORS');
Route::any('/SliderApi', 'Backend\SliderController@SliderApi')->middleware('CORS');
Route::any('/core/about/', 'Backend\AboutController@AboutApi')->middleware('CORS');
Route::any('/TimelineApi', 'Backend\TimelineController@TimelineApi')->middleware('CORS');
Route::any('/core/team', 'Backend\TeamsController@TeamsApi')->middleware('CORS');
Route::any('/core/subscribe', 'Backend\SubscriberController@subscribeAdd')->middleware('CORS');
Route::any('/Loa', 'Backend\UserController@userApi')->middleware('CORS');
Route::post('api/loginApi','Backend\DefaultController@LoginApi');
Route::post('auth/signup','Backend\DefaultController@signupApi')->middleware('CORS');
Route::any('auth/settings','Backend\DefaultController@AuthApi')->middleware('CORS');
Route::any('api/country_filter','Backend\StartupsController@filterCountryList')->middleware('CORS');
Route::any('api/country/all','Backend\StartupsController@AllCountryList')->middleware('CORS');
Route::any('api/innovative_directions','Backend\StartupsController@filterDirectionsList')->middleware('CORS');
Route::any('api/sectors/all','Backend\StartupsController@sectorsAll')->middleware('CORS');
Route::any('/core/news', 'Backend\BlogController@blogApi')->middleware('CORS');
Route::any('/core/news/{id}', 'Backend\BlogController@blogFindApi')->middleware('CORS');
Route::any('/core/terms', 'Backend\TermsConditionsController@Api')->middleware('CORS');
Route::any('/core/howitworks', 'Backend\HowitworksController@IndexApi')->middleware('CORS');
Route::any('/core/howitworks/{id}', 'Backend\HowitworksController@DetailApi')->middleware('CORS');
Route::any('/startup/new/information', 'Backend\StartupsController@CreateApi')->middleware('CORS');
Route::post('/startup/{statup_id}/information', 'Backend\StartupsController@UpdateApi')->middleware('CORS');
Route::any('/startup/{statup_id}/follow', 'Backend\StartupsController@followApi')->middleware('CORS');
Route::post('/startup/{statup_id}/files', 'Backend\StartupsController@addFilesApi')->middleware('CORS');
Route::post('/startup/{file_id}/files/remove', 'Backend\StartupsController@removeFilesApi')->middleware('CORS');
Route::any('/startup/mystartups', 'Backend\StartupsController@myStartupApi')->middleware('CORS');
Route::any('/slider/favor', 'Backend\SliderController@SliderFavorApi')->middleware('CORS');
Route::any('/startup/follow/list', 'Backend\StartupsController@followListApi')->middleware('CORS');
Route::any('/startup/point', 'Backend\StartupsController@PointsApi')->middleware('CORS');
Route::any('/startup/points/list/', 'Backend\StartupsController@PointsListApi')->middleware('CORS');
Route::post('api/startup/view', 'Backend\StartupsController@Startup_view')->middleware('CORS');
Route::any('api/startup/view/count/{id}', 'Backend\StartupsController@Startup_view_count')->middleware('CORS');

Route::any('/core/notification', 'Backend\DefaultController@NotifyApi')->middleware('CORS');
Route::any('/auth/email/verify/{verification_code}', 'Backend\UserController@verifyEmail')->middleware('CORS');
Route::any('/startup/new', 'Backend\StartupsController@CreateApi')->middleware('CORS');
Route::post('/startup/{statup_id}', 'Backend\StartupsController@UpdateApi')->middleware('CORS');
Route::get('/startup/{statup_id}', 'Backend\StartupsController@InfoApi')->middleware('CORS');
Route::get('/startup/all/{statup_id}', 'Backend\StartupsController@AllStartupsDetail')->middleware('CORS');
Route::get('/read/all/notifications', 'Backend\DefaultController@readAllApi')->middleware('CORS');
Route::get('/startup/delete/files', 'Backend\StartupsController@removeFilesApi')->middleware('CORS');
Route::get('/startup/application/questions', 'Backend\StartupsController@Questions')->middleware('CORS');
Route::get('/programs/all', 'Backend\ProgramsController@indexApi')->middleware('CORS');
Route::get('/startup/apply/programs', 'Backend\StartupsController@apply_programs')->middleware('CORS');
Route::get('/startup/apply/competition', 'Backend\StartupsController@apply_programs')->middleware('CORS');
Route::get('/startup/applicants/count', 'Backend\StartupsController@countcompetitionapplicants')->middleware('CORS');
Route::get('/konkurs/voice/limit', 'Backend\KonkursController@voice_limit_api')->middleware('CORS');
Route::get('/competition/list', 'Backend\KonkursController@competition_list')->middleware('CORS');
Route::get('/competition/members/count', 'Backend\StartupsController@competition_count')->middleware('CORS');
Route::get('/competition/members', 'Backend\StartupsController@CompetitionMembersApi')->middleware('CORS');
Route::get('/competition/give/voice', 'Backend\StartupsController@giveVoiceApi')->middleware('CORS');
Route::get('/competition/voice/gived/list', 'Backend\StartupsController@voice_gived_list')->middleware('CORS');
Route::get('/competition/voicegive/user/start', 'Backend\StartupsController@voice_start')->middleware('CORS');
Route::get('/competition/startup/list/forJuri', 'Backend\StartupsController@startupListForJuri')->middleware('CORS');
Route::get('/competition/startup/list/all', 'Backend\StartupsController@Allcompetition_membersApi')->middleware('CORS');
Route::post('/competition/startup/juri/give/voice', 'Backend\StartupsController@juri_give_voice')->middleware('CORS');


// Auth::routes();
    Route::middleware(['admin'])->group(function () {
      Route::post('/remove/all/things', 'Backend\KonkursController@All_Delete')->name('remove_all');
      Route::get('/notify/delete/{id}', 'Backend\DefaultController@Notify_Delete');
      Route::get('/notify/all/delete', 'Backend\DefaultController@Notify_Delete_all');
       Route::get('/users', 'Backend\UserController@index')->name('users');
         Route::get('/user/requests', 'Backend\UserController@requests')->name('user.requests');

     
         Route::post('/user/AjaxRole', 'Backend\UserController@AjaxRole')->name('user.AjaxRole');
            Route::get('/settings', 'SettingsController@read')->name('settings.Index');
            Route::post('/settings', 'SettingsController@sortable')->name('settings.Sortable');
            Route::get('/settings/delete/{id}', 'SettingsController@destroy');
            Route::get('/settings/edit/{id}', 'SettingsController@edit')->name('settings.Edit');
            Route::post('/settings/{id}', 'SettingsController@update')->name('settings.Update');
     Route::get('/user/approve/{id}', 'Backend\UserController@approve');
            Route::get('/user/delete/{id}', 'Backend\UserController@destroy');
            Route::get('user/Ajax/edit/{id}', 'Backend\UserController@AjaxEdit');
            Route::get('/user/block/{id}', 'Backend\UserController@block');
            Route::get('/user/unblock/{id}', 'Backend\UserController@unblock');
            Route::get('user/ajaxSearch', 'Backend\UserController@ajaxSearch');
            Route::any('/terms', 'Backend\TermsConditionsController@index')->name('terms.Index');
            Route::get('/terms/edit/{id}', 'Backend\TermsConditionsController@edit')->name('Terms.edit');
            Route::post('/terms/{id}', 'Backend\TermsConditionsController@update')->name('terms.update');
            
            Route::any('/howitworks/add','Backend\HowitworksController@no');
            Route::any('/howitworks', 'Backend\HowitworksController@index')->name('howitworks.Index');
            Route::get('/howitworks/edit/{id}', 'Backend\HowitworksController@edit')->name('howitworks.edit');
            Route::post('/howitworks/{id}', 'Backend\HowitworksController@update')->name('howitworks.update');
            Route::get('/howitworks/delete/{id}', 'Backend\HowitworksController@destroy');
            Route::get('/howitworks/create', 'Backend\HowitworksController@create')->name('howitworks.create');
            
            Route::get('/InnovativeDirections', 'Backend\InnovativeDirections@index')->name('InnovDirect.Index');
            Route::get('/InnovativeDirections/create', 'Backend\InnovativeDirections@create')->name('InnovDirect.create');
            Route::post('/InnovativeDirections/store', 'Backend\InnovativeDirections@store')->name('InnovDirect.store');
              Route::post('/InnovativeDirections/update/{id}', 'Backend\InnovativeDirections@update')->name('InnovDirect.update');
            Route::get('/InnovativeDirections/edit/{id}', 'Backend\InnovativeDirections@edit')->name('InnovDirect.edit');
            Route::get('/InnovativeDirections/delete/{id}', 'Backend\InnovativeDirections@destroy');

             Route::get('/partners', 'Backend\PartnersController@index')->name('Partners.Index');
             Route::get('/notifications', 'Backend\DefaultController@notifications');
            Route::get('/Partners/create', 'Backend\PartnersController@create')->name('Partners.create');
            Route::post('/notifications/read/all', 'Backend\DefaultController@motify_read_onclick');
            
            Route::post('/Partners/store', 'Backend\PartnersController@store')->name('Partners.store');
              Route::post('/Partners/update/{id}', 'Backend\PartnersController@update')->name('Partners.update');
            Route::get('/Partners/edit/{id}', 'Backend\PartnersController@edit')->name('Partners.edit');
            Route::get('/Partners/delete/{id}', 'Backend\PartnersController@destroy');
            

            Route::get('/Pages', 'Backend\PagesController@index')->name('Pages.Index');
            Route::get('/Pages/create', 'Backend\PagesController@create')->name('Pages.create');
            Route::post('/Pages/store', 'Backend\PagesController@store')->name('Pages.store');
            Route::put('/Pages/update/{id}', 'Backend\PagesController@update')->name('Pages.update');
            Route::get('/Pages/edit/{id}', 'Backend\PagesController@edit')->name('Pages.edit');
            Route::get('/Pages/delete/{id}', 'Backend\PagesController@destroy');

             Route::get('/Pages/block/{id}', 'Backend\PagesController@block')->name('pages.block');
              Route::get('/Pages/unblock/{id}', 'Backend\PagesController@unblock')->name('pages.unblock');
             
            Route::get('/Category', 'Backend\CategoryController@index')->name('Category.Index');
            Route::get('/Category/create', 'Backend\CategoryController@create')->name('Category.create');
            Route::post('/Category/store', 'Backend\CategoryController@store')->name('Category.store');
              Route::post('/Category/update/{id}', 'Backend\CategoryController@update')->name('Category.update');
            Route::get('/Category/edit/{id}', 'Backend\CategoryController@edit')->name('Category.edit');
            Route::get('/Category/delete/{id}', 'Backend\CategoryController@destroy');
            Route::get('/startups', 'Backend\StartupsController@index')->name('startups');
           
            Route::get('/startups/delete/{id}', 'Backend\StartupsController@destroy');
            Route::get('/startups/favor/{id}', 'Backend\StartupsController@favor');
            Route::get('/startups/edit/{id}', 'Backend\StartupsController@edit')->name('startups.edit');
            Route::put('/startups/update/{id}', 'Backend\StartupsController@update')->name('startups.update');
            Route::get('/startups/create', 'Backend\StartupsController@create')->name('startups.create');
              Route::post('/startups/store', 'Backend\StartupsController@store')->name('startups.store');
               Route::get('/startups/block/{id}', 'Backend\StartupsController@block')->name('startups.block');
              Route::get('/startups/unblock/{id}', 'Backend\StartupsController@unblock')->name('startups.unblock');
               Route::get('/startups/videorequests', 'Backend\StartupsController@Videorequests')->name('startup.videorequests');
               Route::get('/startups/requests', 'Backend\StartupsController@requests')->name('startup.requests');

               Route::get('/startups/applicants', 'Backend\StartupsController@applicants')->name('startup.applicants');
               Route::get('/startups/competition/members', 'Backend\StartupsController@competition_members')->name('startup.competition_members');
               
               Route::get('/startups/applicants/delete/{id}', 'Backend\StartupsController@applicants_delete')->name('startup.delete');

               
               Route::get('/startup/approve/{id}', 'Backend\StartupsController@approve');
               Route::get('/startup/approvevideo/{id}', 'Backend\StartupsController@approvevideo');
               Route::get('/startup/unapproovevideo/{id}', 'Backend\StartupsController@unapproovevideo');
               Route::get('/startup/approve_applicants/{id}', 'Backend\StartupsController@approve_applicants');
               
               Route::post('/startup/add/giveCriteriaVoice', 'Backend\StartupsController@giveCriteriaVoice')->name('startups.giveCriteriaVoice');
               
               Route::post('/startup/update/giveCriteriaVoice', 'Backend\StartupsController@giveCriteriaVoice_update')->name('startups.giveCriteriaVoice_update');
               Route::post('/startup/update/juri/voice', 'Backend\StartupsController@juripointsupdate')->name('startups.juripointsupdate');
               Route::post('/startup/update/user/voice', 'Backend\StartupsController@userpointsupdate')->name('startups.userpointsupdate');
               Route::get('/startups/topTwenty/{id}', 'Backend\StartupsController@TopTwenty')->name('startups.TopTwenty');
               Route::post('/startups/complicant/delete', 'Backend\StartupsController@ApplicantDelete')->name('startups.comp.delete');
               

               Route::get('/startup/file/{id}/delete', 'Backend\StartupsController@destroy_file');
               Route::get('/teams', 'Backend\TeamsController@index')->name('teams.index');
               Route::post('/startups/comment/{id}', 'Backend\StartupsController@comment')->name('startups.comment');
            Route::get('/teams/delete/{id}', 'Backend\TeamsController@destroy');
            Route::get('/teams/favor/{id}', 'Backend\TeamsController@favor');
            Route::get('/teams/edit/{id}', 'Backend\TeamsController@edit')->name('teams.edit');
            Route::put('/teams/update/{id}', 'Backend\TeamsController@update')->name('teams.update');
            Route::get('/teams/create', 'Backend\TeamsController@create')->name('teams.create');
              Route::post('/teams/store', 'Backend\TeamsController@store')->name('teams.store');
               Route::get('/teams/block/{id}', 'Backend\TeamsController@block')->name('teams.block');
              Route::get('/teams/unblock/{id}', 'Backend\TeamsController@unblock')->name('teams.unblock');
               Route::get('/teams/requests', 'Backend\TeamsController@requests')->name('teams.requests');
               Route::get('/teams/approve/{id}', 'Backend\TeamsController@approve');

               Route::get('/konkurs', 'Backend\KonkursController@index')->name('konkurs.index');
           
            Route::get('/konkurs/delete/{id}', 'Backend\KonkursController@destroy');
            Route::get('/konkurs/favor/{id}', 'Backend\KonkursController@favor');
            Route::get('/konkurs/edit/{id}', 'Backend\KonkursController@edit')->name('konkurs.edit');
            Route::put('/konkurs/update/{id}', 'Backend\KonkursController@update')->name('konkurs.update');
            Route::get('/konkurs/create', 'Backend\KonkursController@create')->name('konkurs.create');
              Route::post('/konkurs/store', 'Backend\KonkursController@store')->name('konkurs.store');
              Route::get('/konkurs/block/{id}', 'Backend\KonkursController@block')->name('konkurs.block');
              Route::get('/konkurs/unblock/{id}', 'Backend\KonkursController@unblock')->name('konkurs.unblock');
              Route::get('/action_plan/delete/{id}', 'Backend\KonkursController@destroy_action');
              Route::get('/konkurs/banners/', 'Backend\KonkursController@banners_index')->name('konkurs.banners');
            
              Route::get('/konkurs/banners/create', 'Backend\KonkursController@banners_create')->name('konkurs_banners.create');
  
              Route::post('/konkurs/banners/store', 'Backend\KonkursController@banners_store')->name('konkurs_banners.store');
                Route::post('/konkurs/banners/update/{id}', 'Backend\KonkursController@banners_update')->name('konkurs_banners.update');
              Route::get('/konkurs/banners/edit/{id}', 'Backend\KonkursController@banners_edit')->name('konkurs_banners.edit');
              Route::get('/konkurs/banners/delete/{id}', 'Backend\KonkursController@banners_destroy');
              
               Route::get('/news', 'Backend\BlogController@index')->name('news');
           
            Route::get('/news/delete/{id}', 'Backend\BlogController@destroy');
         
            Route::get('/news/edit/{id}', 'Backend\BlogController@edit')->name('news.edit');
            Route::put('/news/update/{id}', 'Backend\BlogController@update')->name('news.update');
            Route::get('/news/create', 'Backend\BlogController@create')->name('news.create');
              Route::post('/news/store', 'Backend\BlogController@store')->name('news.store');
              Route::get('/news/block/{id}', 'Backend\BlogController@block')->name('news.block');
              Route::get('/news/unblock/{id}', 'Backend\BlogController@unblock')->name('news.unblock');
              Route::get('/news', 'Backend\BlogController@index')->name('news');
              Route::get('/subs', 'Backend\SubscriberController@index')->name('subs');
              Route::get('/subs/delete/{id}', 'Backend\SubscriberController@destroy');
           
              Route::get('/subs/edit/{id}', 'Backend\SubscriberController@edit')->name('subs.edit');
              Route::put('/subs/update/{id}', 'Backend\SubscriberController@update')->name('subs.update');
              Route::get('/subs/create', 'Backend\SubscriberController@create')->name('subs.create');
                Route::post('/subs/store', 'Backend\SubscriberController@store')->name('subs.store');
                Route::get('/subs/block/{id}', 'Backend\SubscriberController@block')->name('subs.block');
                Route::get('/subs/unblock/{id}', 'Backend\SubscriberController@unblock')->name('subs.unblock');
              //  Route::get('/konkurs/block/{id}', 'Backend\KonkursController@block')->name('konkurs.block');
              // Route::get('/konkurs/unblock/{id}', 'Backend\KonkursController@unblock')->name('konkurs.unblock');
              //  Route::get('/konkurs/requests', 'Backend\KonkursController@requests')->name('konkurs.requests');
              //  Route::get('/konkurs/approve/{id}', 'Backend\KonkursController@approve');

              Route::get('/slider', 'Backend\SliderController@index')->name('slider');
              Route::post('/slider', 'Backend\SliderController@sortable')->name('slider.Sortable');
              Route::get('/slider/delete/{id}', 'Backend\SliderController@destroy');
              Route::get('/slider/edit/{id}', 'Backend\SliderController@edit')->name('slider.Edit');
              Route::post('/sliders/updates/{id}', 'Backend\SliderController@updates')->name('sliders.updates');
              Route::get('/slider/create', 'Backend\SliderController@create')->name('slider.create');
              Route::post('/sliders/stores', 'Backend\SliderController@stores')->name('slider.stores');
              Route::get('/about', 'Backend\AboutController@index')->name('about');
              Route::get('/about/edit/{id}', 'Backend\AboutController@edit')->name('about.Edit');
              Route::put('/about/updates/{id}', 'Backend\AboutController@updatess')->name('abouts.updates');
  
              Route::get('/programs', 'Backend\ProgramsController@index')->name('programs.Index');
              Route::get('/programs/create', 'Backend\ProgramsController@create')->name('programs.create');
              Route::post('/programs/store', 'Backend\ProgramsController@store')->name('programs.store');
                Route::post('/programs/update/{id}', 'Backend\ProgramsController@update')->name('programs.update');
              Route::get('/programs/edit/{id}', 'Backend\ProgramsController@edit')->name('programs.edit');
              Route::get('/programs/delete/{id}', 'Backend\ProgramsController@destroy');
  
             
    });
    Route::namespace('Backend')->group(function () {
 

        Route::middleware(['admin'])->group(function () {

            //BLOG
            Route::post('/blog/sortable', 'BlogController@sortable')->name('blog.Sortable');
            Route::resource('blog', 'BlogController');

            //Startup
             Route::post('/startups/sortable', 'StartupsController@sortable')->name('startups.Sortable');
             Route::resource('Startups', 'StartupsController');

             //Teams
             Route::post('/teams/sortable', 'TeamsController@sortable')->name('teams.Sortable');
             Route::resource('teams', 'TeamsController');
            //PAGE
            Route::post('/page/sortable', 'PagesController@sortable')->name('page.Sortable');
            Route::resource('page', 'PagesController');

        

               //Category
            Route::post('/category/sortable', 'PageController@sortable')->name('Category.Sortable');
            
            //ADMIN
            Route::post('/user/sortable', 'UserController@sortable')->name('user.Sortable');
            Route::resource('user', 'UserController');
      
    });

});

Route::get('/login','Backend\DefaultController@login')->name('login');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Backend\DefaultController@logout')->name('Logout')->middleware('admin');
 Route::post('/login', 'Backend\DefaultController@authenticate')->name('authenticate');
Route::get('/dashboard','Backend\DefaultController@index')->name('dashboard')->middleware('admin');
Route::get('/','Backend\DefaultController@login');
Route::post('auth/login', 'AuthController@login');
Route::post('auth/logout', 'AuthController@logout');
Route::post('auth/refresh', 'AuthController@refresh');
Route::get('auth/me', 'AuthController@me')->middleware('CORS');
Route::get('startups/filter','Backend\StartupsController@fullFilter');
Route::get('auth/verify/{verification_code}', 'Backend\DefaultController@verifyUser');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.request');
Route::get('auth/password/reset', 'Backend\UserController@recover')->name('password.reset');
Route::post('auth/password/recovery/', 'Backend\UserController@recoverPass')->name('password.reco');