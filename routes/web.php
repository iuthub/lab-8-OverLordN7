
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
    return view('blog/index');
});
Route::group(['prefix' => 'admin'], function() {
    Route::get('admin/',function (){
        return view('admin/index');
    });
    Route::get('admin/create',function (){
        return view('admin/create');
    });
    Route::get('admin/edit/{id}',function ($id){
        return view('admin/edit');
    });

});
Route::get("/about",function (){{
    return view('other/about');
}});

Route::group(['prefix' => 'admin'], function() {
    Route::get('', [
        'uses' => 'PostController@getAdminIndex',
        'as' => 'admin.index'
    ]);
});
Route::get('/', [
    'uses' => 'PostController@getIndex',
    'as' => 'blog.index'
]);

Route::get('post/{id}', [
    'uses' => 'PostController@getPost',
    'as' => 'blog.post'
]);
