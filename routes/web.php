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

    Auth::routes(); 

    // ** admin group
    Route::group([
        'prefix' => 'admin',
        'middleware' => 'auth'
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
            'categories'     =>    'Backend\CategoriesController'
          ]);

        Route::get('generator', ['uses' => 'Backend\ProcessController@getGenerator']);
        Route::post('generator', ['uses' => 'Backend\ProcessController@postGenerator']);

    });
