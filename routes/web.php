<?php

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

Route::get('/', 'indexController@index');

Route::get('/index', 'indexController@index');

Route::get('/post', function () {
    return view('user.post_layout');
});

// Route::group(['middleware' => 'guest'], function() {
//     Route::match(['get', 'post'], '/login', ['as' => 'login', 'uses' => 'Usercontroller@login']);
// });
Route::post('/login', 'LoginController@login');
Route::post('/register', 'LoginController@create');
Route::get('/logout', 'LoginController@logout');

Route::group(['prefix'=>'/post', 'middleware' => 'auth'],function(){
    Route::get('take-care', 'BlogController@postViewCare');
    Route::get('discuss', 'BlogController@postViewDiscuss');
    Route::post('uploadPost', 'BlogController@uploadPost');
    // Route::get('shop', 'Postcontroller@postViewCare');
});

Route::group(['prefix'=>'blog'],function(){
    Route::get('/take-care', 'BlogController@viewBlogTakeCare');
    Route::get('/hot-posts', 'BlogController@viewBlogHot');
    Route::get('/new-posts', 'BlogController@viewBlogNew');
    Route::get('/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
    Route::get('/', 'BlogController@viewBlogNew');
});
Route::group(['prefix'=>'user', 'middleware' => 'auth'],function(){
    Route::get('/my-post', 'BlogController@myBlog');
});

Route::group(['prefix'=>'admin', 'middleware' => 'auth'],function(){
    Route::get('/index', 'AdminController@allowBlogView');
    Route::get('/allow-blog', 'AdminController@allowBlogView');
    Route::get('/allow-blog/{id}', 'AdminController@allowBlog');
    Route::get('/manager-blog/unpublic/{id}', 'AdminController@unpublicBlog');
    Route::get('/manager-blog/public/{id}', 'AdminController@publicBlog');
    Route::get('/manager-blog/delete/{id}', 'AdminController@deleteBlog');
    Route::get('/manager-blog', 'AdminController@managerBlogView');
    Route::get('/manager-user', 'AdminController@managerUserView');
    Route::get('/manager-user/block/{id}', 'AdminController@block');
    Route::get('/manager-user/unblock/{id}', 'AdminController@unBlock');
    Route::get('/manager-user/delete/{id}', 'AdminController@deleteUser');
    Route::get('/logout', 'LoginController@logout');
});

Route::get('/fail', function () {
    return redirect('index')->with('emptyLogin', 'Chưa đăng nhập!');
})->name('index');

// Route::get('/blog/{slug}', ['as' => 'blog.single', 'uses' => 'PostController@getSingle'])->where('slug', '[\w\d\-\_]+');
