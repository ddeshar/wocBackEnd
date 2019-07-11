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

Route::get('hello','HomeController@indexgd')->name('ss');
Route::get('dffer','HomeController@indexsd')->name('aa');
Route::get('dfsse','HomeController@indexd')->name('ss');

    Auth::routes(); 

    // ** admin group
    Route::group([
        'prefix' => 'admin',
        'middleware' => 'auth'
        ], function() {
        
        Route::get('/', 'HomeController@index')->name('admin');
        Route::get('/home', 'HomeController@index')->name('home');
        Route::get('/menu', 'Backend\MenuController@index')->name('menu');
        Route::post('/menu/addcustommenu',               'Backend\MenuController@addcustommenu')->name('haddcustommenu');
        Route::post('/menu/deleteitemmenu',              'Backend\MenuController@deleteitemmenu')->name('hdeleteitemmenu');
        Route::post('/menu/deletemenug',                 'Backend\MenuController@deletemenug')->name('hdeletemenug');
        Route::post('/menu/createnewmenu',               'Backend\MenuController@createnewmenu')->name('hcreatenewmenu');
        Route::post('/menu/generatemenucontrol',         'Backend\MenuController@generatemenucontrol')->name('hgeneratemenucontrol');
        Route::post('/menu/updateitem',                  'Backend\MenuController@updateitem')->name('hupdateitem');

        // Route::post('menu/addcustommenu', array('as' => 'haddcustommenu', 'uses' => 'Backend\MenuController@addcustommenu'));
        // Route::post('menu/deleteitemmenu', array('as' => 'hdeleteitemmenu', 'uses' => 'Backend\MenuController@deleteitemmenu'));
        // Route::post('menu/deletemenug', array('as' => 'hdeletemenug', 'uses' => 'Backend\MenuController@deletemenug'));
        // Route::post('menu/createnewmenu', array('as' => 'hcreatenewmenu', 'uses' => 'Backend\MenuController@createnewmenu'));
        // Route::post('menu/generatemenucontrol', array('as' => 'hgeneratemenucontrol', 'uses' => 'Backend\MenuController@generatemenucontrol'));
        // Route::post('menu/updateitem', array('as' => 'hupdateitem', 'uses' => 'Backend\MenuController@updateitem'));

        Route::resources([
            'roles'          =>    'Backend\RoleController',
            'users'          =>    'Backend\UserController',
            'permissions'    =>    'Backend\PermissionController',
            // 'menu'           =>    'Backend\MenuController',
            'group'          =>    'Backend\GroupController',
            'posts'          =>    'Backend\PostsController',
            'pages'          =>    'Backend\PagesController',
            'setting'        =>    'Backend\SettingsController',
            'categories'     =>    'Backend\CategoriesController'
          ]);

        Route::get('generator', ['uses' => 'Backend\ProcessController@getGenerator']);
        Route::post('generator', ['uses' => 'Backend\ProcessController@postGenerator']);
    });
