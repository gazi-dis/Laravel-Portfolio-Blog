<?php

use App\Http\Controllers\Redirect;
use App\Setting;
use Illuminate\Support\Facades\Route;

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
Auth::routes();

Route::group(['prefix' => '/'], function () {
    Route::get('/', 'FrontendController@index');
});

Route::get('/admin/login', 'AdminController@loginIndex')->name('ozel-login');
Route::get('/admin/reset-pw-email', 'PasswordController@resetIndex')->name('password.reset');
Route::post('/admin/reset-password-email' , 'PasswordController@sendResetLinkEmail');
Route::post('/admin/reset-password' , 'PasswordController@reset');
Route::get('/admin/reset-password/{token}' , 'PasswordController@showResetForm');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/post/{slug}', [
    'uses' => 'FrontendController@singlePost',
    'as' => 'post.single',
]);
Route::get('/tag/{id}', [
    'uses' => 'FrontendController@tag',
    'as' => 'tag.single',
]);
Route::get('/category/{id}', [
    'uses' => 'FrontendController@category',
    'as' => 'category.single',
]);
Route::get('/blog', 'FrontendController@blogIndex');

Route::post('/send-mail','AdminController@mailsend');

Route::group(['middleware' => ['auth']], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', function () {
            return redirect('admin/login');
        });
        Route::get('/dashboard', 'AdminController@index');
        Route::get('/settings', 'AdminController@settingsIndex');
        Route::get('/profile', 'AdminController@profileIndex');
        Route::get('/about', 'AdminController@aboutSettings');
        Route::get('/services', 'AdminController@servicesSettings');
        Route::get('/projects', 'AdminController@projectsSettings');
        Route::get('/hire', 'AdminController@hireSettings');
        Route::get('/contact', 'AdminController@contactSettings');
        Route::get('/footer', 'AdminController@footerSettings');

        Route::get('/basic-table', function () {return view('admin.basic-table');});
        Route::get('/blank', function () {return view('admin.blank');});
        Route::get('/buttons', function () {return view('admin.buttons');});
        Route::get('/calendar', function () {return view('admin.calendar');});
        Route::get('/charts', function () {return view('admin.charts');});
        Route::get('/chat', function () {return view('admin.chat');});
        Route::get('/compose', function () {return view('admin.compose');});
        Route::get('/datatable', function () {return view('admin.datatable');});
        Route::get('/email', function () {return view('admin.email');});
        Route::get('/forms', function () {return view('admin.forms');});
        Route::get('/google-maps', function () {return view('admin.google-maps');});
        Route::get('/ui', function () {return view('admin.ui');});
        Route::get('/vector-maps', function () {return view('admin.vector-maps');});

        Route::get('/404', function () {return view('admin.404');});
        Route::get('/500', function () {return view('admin.500');});

        Route::post('/setting-update', 'AdminController@settingUpdate');
        Route::post('/profile-update', 'AdminController@profileUpdate');
        Route::post('/avatar-update', 'AdminController@avatarUpdate');
        Route::post('/about-update', 'AdminController@aboutUpdate');
        Route::post('/update-service/{id}', 'AdminController@serviceUpdate');
        Route::post('/update-project/{id}', 'AdminController@projectUpdate');
        Route::post('/information-update', 'AdminController@infoUpdate');

        Route::post('/hire-update', 'AdminController@hireUpdate');
        Route::post('/contact-update', 'AdminController@contactUpdate');
        Route::post('/footer-update', 'AdminController@footerUpdate');

        Route::post('/add-service', 'AdminController@addService');
        Route::post('/add-project', 'AdminController@addProject');

        Route::get('/delete-service/{id}', 'AdminController@deleteService');
        Route::get('/delete-project/{id}', 'AdminController@deleteProject');

        Route::get('/post/create', [
            'uses' => 'PostsController@create',
            'as' => 'post.create',
        ]);

        Route::post('/post/store', [
            'uses' => 'PostsController@store',
            'as' => 'post.store',
        ]);
        Route::get('/posts', [
            'uses' => 'PostsController@index',
            'as' => 'posts',
        ]);
        Route::get('/posts/delete/{id}', [
            'uses' => 'PostsController@destroy',
            'as' => 'posts.delete',
        ]);
        Route::get('/posts/trashed', [
            'uses' => 'PostsController@trashed',
            'as' => 'posts.trashed',
        ]);
        Route::get('/posts/kill/{id}', [
            'uses' => 'PostsController@kill',
            'as' => 'post.kill',
        ]);
        Route::get('/posts/restore/{id}', [
            'uses' => 'PostsController@restore',
            'as' => 'posts.restore',
        ]);
        Route::get('/posts/edit/{id}', [
            'uses' => 'PostsController@edit',
            'as' => 'posts.edit',
        ]);
        Route::post('/posts/update/{id}', [
            'uses' => 'PostsController@update',
            'as' => 'posts.update',
        ]);

        Route::get('/category/create', [
            'uses' => 'CategoryController@create',
            'as' => 'category.create',
        ]);

        Route::post('/category/store', [
            'uses' => 'CategoryController@store',
            'as' => 'category.store',
        ]);

        Route::get('/categories', [
            'uses' => 'CategoryController@index',
            'as' => 'categories',
        ]);
        Route::get('/category/edit/{id}', [
            'uses' => 'CategoryController@edit',
            'as' => 'category.edit',
        ]);
        Route::get('/category/delete/{id}', [
            'uses' => 'CategoryController@destroy',
            'as' => 'category.delete',
        ]);
        Route::post('/category/update/{id}', [
            'uses' => 'CategoryController@update',
            'as' => 'category.update',
        ]);
        Route::get('/tags', [
            'uses' => 'TagsController@index',
            'as' => 'tags',
        ]);
        Route::get('/tags/create', [
            'uses' => 'TagsController@create',
            'as' => 'tag.create',
        ]);
        Route::post('/tags/store', [

            'uses' => 'TagsController@store',
            'as' => 'tag.store',
        ]);
        Route::get('/tags/edit/{id}', [
            'uses' => 'TagsController@edit',
            'as' => 'tag.edit',
        ]);
        Route::post('/tags/update/{id}', [
            'uses' => 'TagsController@update',
            'as' => 'tag.update',
        ]);
        Route::get('/tags/delete/{id}', [
            'uses' => 'TagsController@destroy',
            'as' => 'tag.delete',
        ]);
    });
});


