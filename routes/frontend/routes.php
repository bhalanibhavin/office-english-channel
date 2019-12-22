<?php 

Route::get('/', [
    'as'    => 'common.home',
    'uses'  => 'FrontEnd\HomeController@index'
]);

Route::get('/page/{slug}', [
    'as'    => 'frontend.cmspage',
    'uses'  => 'FrontEnd\HomeController@getCMSPage'
]);

Route::post('/inquiry', [
    'as'    => 'common.inquiry',
    'uses'  => 'FrontEnd\HomeController@inquiry'
]);

Route::get('/students', [
    'as'    => 'common.students',
    'uses'  => 'FrontEnd\HomeController@students'
]);

Route::get('/blogs', [
    'as'    => 'common.blogs',
    'uses'  => 'FrontEnd\HomeController@blogs'
]);

Route::get('/blogs/{slug}', [
    'as'    => 'common.blog.details',
    'uses'  => 'FrontEnd\HomeController@blogDetails'
]);

Route::get('/trial-ielts', [
    'as'    => 'common.trial-ielts',
    'uses'  => 'FrontEnd\HomeController@trialIELTS'
]);

Route::post('/save-trial-ielts', [
    'as'    => 'common.save-trial-ielts',
    'uses'  => 'FrontEnd\HomeController@saveTrialIELTS'
]);

Route::post('/save-contact-form', [
    'as'    => 'common.contact-form',
    'uses'  => 'FrontEnd\HomeController@saveContactForm'
]);
?>