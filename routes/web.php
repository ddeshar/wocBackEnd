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

    // Auth::routes(); 

    // Authentication Routes...
    $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
    $this->post('login', 'Auth\LoginController@login');
    $this->post('logout', 'Auth\LoginController@logout')->name('logout');

    // Registration Routes...
    $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    $this->post('register', 'Auth\RegisterController@register');

    // Password Reset Routes...
    $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    $this->post('password/reset', 'Auth\ResetPasswordController@reset');

    // ** admin group
    Route::group([
        'prefix' => 'admin',
        'middleware' => 'auth'
        // ,
        // 'as' => 'admin.'
        ], function() {
        
        Route::get('/', 'HomeController@index')->name('admin');
        Route::get('/home', 'HomeController@index')->name('home');

        Route::resources([
            'roles'          =>    'Backend\RoleController',
            'users'          =>    'Backend\UserController',
            'permissions'    =>    'Backend\PermissionController',
            'menu'           =>    'Backend\MenuController',
            'group'          =>    'Backend\GroupController',
            'posts'          =>    'Backend\PostsController',
            'pages'          =>    'Backend\PagesController',
            'setting'        =>    'Backend\SettingsController',
            'categories'     =>    'Backend\CategoriesController',
            'tags'           =>    'Backend\TagsController' 
          ]);

        // For Json Encode
        Route::get('json-menu/{id}', 'MenuController@getGroupname')->name('jsonmenuid');

    });
