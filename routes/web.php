<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Process\Process;

// Route::get('/', 'UserController@index');
Route::get('/', function() {
    // $routes = Route::getRoutes();
    $workDir = env('APP_DEPLOY_DIR');
    $process = Process::fromShellCommandline($workDir . '/deploy.sh');
    $process->setWorkingDirectory($workDir);
    $process->run();
    dd($process->getOutput());
});

Route::post('/deploy', 'GitDeployController@pull');

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::group(['prefix' => 'users'], function () {
        Route::get('/', 'UserController@index')->name('users.index');
        Route::put('/update/{id}', 'UserController@update')->name('users.update');
        Route::post('/update/{id}', 'UserController@update')->name('users.update');
        Route::post('/addAlt/{id}', 'UserController@addAlt')->name('users.addAlt');
        Route::delete('/delete/{id}', 'UserController@destroy')->name('users.delete');
        Route::get('/deletedUsers', 'UserController@deletedUsers')->name('users.deletedUsers');
        Route::post('/restore/{id}', 'UserController@restoreUser')->name('users.restore');
        Route::get('{modal}/{id}/load-{action}', 'UserController@loadModal');
        Route::get('shipStats/{shipid}/{userid}', 'UserController@shipStats');
    });
});


Route::get('/login', 'UserController@login')->name('login');
Route::get('/openid/auth', 'UserController@openid')->name('openid');
Route::get('/home', 'UserController@dashboard')->name('dashboard');

Auth::routes(
    [
        'register' => false,
        'login' => false,
        'reset' => false
    ]
);
