<?php 

Route::get('/admin', [
    'uses'  => 'Admin\LoginController@index'
]);

Route::get('/admin/login', [
    'as'    => 'common.login',
    'uses'  => 'Admin\LoginController@index'
]);

Route::post('/admin/check-login', [
    'as'    => 'common.check.login',
    'uses'  => 'Admin\LoginController@postLogin'
]);

Route::get('/admin/forgot-password', [
    'as'    => 'common.get.forgot.password',
    'uses'  => 'Admin\LoginController@getForgotPassword'
]);

Route::post('/admin/check-forgot-password', [
    'as'    => 'common.post.forgot.password',
    'uses'  => 'Admin\LoginController@postForgotPassword'
]);

Route::get('/admin/update-password', [
    'as'    => 'common.get.update.password',
    'uses'  => 'Admin\LoginController@getUpdatePassword'
]);

Route::post('/admin/check-update-password', [
    'as'    => 'common.post.update.password',
    'uses'  => 'Admin\LoginController@postUpdatePassword'
]);

Route::get('/admin/logout', [
    'as'    => 'common.logout',
    'uses'  => 'Admin\LoginController@logout'
]);

/* ******************************************************************************** */
/* ******************************************************************************** */

/* Routes which are available for users who are logged into Administrator Pagel */
Route::group(['prefix' => 'admin', 'middleware' => 'adminauth'], function () {

    //URL for remove image.
    Route::post('/common/image', [
            'as'    => 'admin.common.remove.image',
            'uses'  => 'Admin\CommonController@postImageRemove'
    ]);

    Route::get('/home', [
        'as'    => 'admin.home',
        'uses'  => 'Admin\HomeController@index'
    ]);

    //routes for administrators 
    Route::get('/administrators/list', [
            'as'    => 'admin.administrators.index',
            'uses'  => 'Admin\AdministratorsController@index'
    ]);
    Route::get('/administrators/add', [
            'as'    => 'admin.administrators.create',
            'uses'  => 'Admin\AdministratorsController@create'
    ]);
    Route::post('/administrators/store', [
            'as'    => 'admin.administrators.store',
            'uses'  => 'Admin\AdministratorsController@store'
    ]);
    Route::get('/administrators/edit/{id}', [
            'as'    => 'admin.administrators.edit',
            'uses'  => 'Admin\AdministratorsController@edit'
    ]);
    Route::post('/administrators/update', [
            'as'    => 'admin.administrators.update',
            'uses'  => 'Admin\AdministratorsController@update'
    ]);
    Route::get('/administrators/delete/{id}', [
            'as'    => 'admin.administrators.delete',
            'uses'  => 'Admin\AdministratorsController@destroy'
    ]);
    Route::get('/administrators/get-list', [
            'as'    => 'admin.administrators.getlist',
            'uses'  => 'Admin\AdministratorsController@getList'
    ]);

    //routes for settings 
    Route::get('/settings/edit/{id}', [
            'as'    => 'admin.settings.edit',
            'uses'  => 'Admin\SettingsController@edit'
    ]);
    Route::post('/settings/update', [
            'as'    => 'admin.settings.update',
            'uses'  => 'Admin\SettingsController@update'
    ]);
    
    //routes for galleries 
    Route::get('/galleries/list', [
            'as'    => 'admin.galleries.index',
            'uses'  => 'Admin\GalleriesController@index'
    ]);
    Route::get('/galleries/add', [
            'as'    => 'admin.galleries.create',
            'uses'  => 'Admin\GalleriesController@create'
    ]);
    Route::post('/galleries/store', [
            'as'    => 'admin.galleries.store',
            'uses'  => 'Admin\GalleriesController@store'
    ]);
    Route::get('/galleries/edit/{id}', [
            'as'    => 'admin.galleries.edit',
            'uses'  => 'Admin\GalleriesController@edit'
    ]);
    Route::post('/galleries/update', [
            'as'    => 'admin.galleries.update',
            'uses'  => 'Admin\GalleriesController@update'
    ]);
    Route::get('/galleries/delete/{id}', [
            'as'    => 'admin.galleries.delete',
            'uses'  => 'Admin\GalleriesController@destroy'
    ]);
    Route::get('/galleries/get-list', [
            'as'    => 'admin.galleries.getlist',
            'uses'  => 'Admin\GalleriesController@getList'
    ]);
    
    //routes for blogcategories 
    Route::get('/blogcategories/list', [
            'as'    => 'admin.blogcategories.index',
            'uses'  => 'Admin\BlogCategoriesController@index'
    ]);
    Route::get('/blogcategories/add', [
            'as'    => 'admin.blogcategories.create',
            'uses'  => 'Admin\BlogCategoriesController@create'
    ]);
    Route::post('/blogcategories/store', [
            'as'    => 'admin.blogcategories.store',
            'uses'  => 'Admin\BlogCategoriesController@store'
    ]);
    Route::get('/blogcategories/edit/{id}', [
            'as'    => 'admin.blogcategories.edit',
            'uses'  => 'Admin\BlogCategoriesController@edit'
    ]);
    Route::post('/blogcategories/update', [
            'as'    => 'admin.blogcategories.update',
            'uses'  => 'Admin\BlogCategoriesController@update'
    ]);
    Route::get('/blogcategories/delete/{id}', [
            'as'    => 'admin.blogcategories.delete',
            'uses'  => 'Admin\BlogCategoriesController@destroy'
    ]);
    Route::get('/blogcategories/get-list', [
            'as'    => 'admin.blogcategories.getlist',
            'uses'  => 'Admin\BlogCategoriesController@getList'
    ]);

    // routes for blogcategories 
    Route::get('/blogs/list', [
            'as'    => 'admin.blogs.index',
            'uses'  => 'Admin\BlogsController@index'
    ]);
    Route::get('/blogs/add', [
            'as'    => 'admin.blogs.create',
            'uses'  => 'Admin\BlogsController@create'
    ]);
    Route::post('/blogs/store', [
            'as'    => 'admin.blogs.store',
            'uses'  => 'Admin\BlogsController@store'
    ]);
    Route::get('/blogs/edit/{id}', [
            'as'    => 'admin.blogs.edit',
            'uses'  => 'Admin\BlogsController@edit'
    ]);
    Route::post('/blogs/update', [
            'as'    => 'admin.blogs.update',
            'uses'  => 'Admin\BlogsController@update'
    ]);
    Route::get('/blogs/delete/{id}', [
            'as'    => 'admin.blogs.delete',
            'uses'  => 'Admin\BlogsController@destroy'
    ]);
    Route::get('/blogs/get-list', [
            'as'    => 'admin.blogs.getlist',
            'uses'  => 'Admin\BlogsController@getList'
    ]);

    //routes for students
    Route::get('/students/list', [
            'as'    => 'admin.students.index',
            'uses'  => 'Admin\StudentsController@index'
    ]);
    Route::get('/students/add', [
            'as'    => 'admin.students.create',
            'uses'  => 'Admin\StudentsController@create'
    ]);
    Route::post('/students/store', [
            'as'    => 'admin.students.store',
            'uses'  => 'Admin\StudentsController@store'
    ]);
    Route::get('/students/edit/{id}', [
            'as'    => 'admin.students.edit',
            'uses'  => 'Admin\StudentsController@edit'
    ]);
    Route::post('/students/update', [
            'as'    => 'admin.students.update',
            'uses'  => 'Admin\StudentsController@update'
    ]);
    Route::get('/students/delete/{id}', [
            'as'    => 'admin.students.delete',
            'uses'  => 'Admin\StudentsController@destroy'
    ]);
    Route::get('/students/get-list', [
            'as'    => 'admin.students.getlist',
            'uses'  => 'Admin\StudentsController@getList'
    ]);

    //routes for inquiryforms 
    Route::get('/inquiryforms/list', [
            'as'    => 'admin.inquiryforms.index',
            'uses'  => 'Admin\InquiryFormsController@index'
    ]);
    Route::get('/inquiryforms/show/{id}', [
            'as'    => 'admin.inquiryforms.show',
            'uses'  => 'Admin\InquiryFormsController@show'
    ]);
    Route::get('/inquiryforms/delete/{id}', [
            'as'    => 'admin.inquiryforms.delete',
            'uses'  => 'Admin\InquiryFormsController@destroy'
    ]);
    Route::get('/inquiryforms/get-list', [
            'as'    => 'admin.inquiryforms.getlist',
            'uses'  => 'Admin\InquiryFormsController@getList'
    ]);

    //routes for inquiryforms 
    Route::get('/trial-ieltsforms/list', [
            'as'    => 'admin.trialieltsforms.index',
            'uses'  => 'Admin\TrialIeltsFormsController@index'
    ]);
    Route::get('/trial-ieltsforms/show/{id}', [
            'as'    => 'admin.trialieltsforms.show',
            'uses'  => 'Admin\TrialIeltsFormsController@show'
    ]);
    Route::get('/trial-ieltsforms/delete/{id}', [
            'as'    => 'admin.trialieltsforms.delete',
            'uses'  => 'Admin\TrialIeltsFormsController@destroy'
    ]);
    Route::get('/trial-ieltsforms/get-list', [
            'as'    => 'admin.trialieltsforms.getlist',
            'uses'  => 'Admin\TrialIeltsFormsController@getList'
    ]);

    //Pages related routes
    Route::get('/pages/list', [
            'as'    => 'admin.general.pages.index',
            'uses'  => 'Admin\General\PagesController@index'
    ]);
    Route::get('/pages/add', [
            'as'    => 'admin.general.pages.create',
            'uses'  => 'Admin\General\PagesController@create'
    ]);
    Route::post('/pages/store', [
            'as'    => 'admin.general.pages.store',
            'uses'  => 'Admin\General\PagesController@store'
    ]);
    Route::get('/pages/edit/{id}', [
            'as'    => 'admin.general.pages.edit',
            'uses'  => 'Admin\General\PagesController@edit'
    ]);
    Route::post('/pages/update', [
            'as'    => 'admin.general.pages.update',
            'uses'  => 'Admin\General\PagesController@update'
    ]);
    Route::get('/pages/delete/{id}', [
            'as'    => 'admin.general.pages.delete',
            'uses'  => 'Admin\General\PagesController@destroy'
    ]);
    Route::get('/pages/get-list', [
            'as'    => 'admin.general.pages.getlist',
            'uses'  => 'Admin\General\PagesController@getList'
    ]);

    //routes for page content 
    Route::get('/page-content/edit/{id}', [
            'as'    => 'admin.pagecontent.edit',
            'uses'  => 'Admin\PageContentController@edit'
    ]);
    Route::post('/page-content/update', [
            'as'    => 'admin.pagecontent.update',
            'uses'  => 'Admin\PageContentController@update'
    ]);
});
?>