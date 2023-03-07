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

// Route::get('/', function () {
//     return view('welcome2');
// });

// Route::get('/xyz', function () {
//     return view('xyz');
// });

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

// Route::get('/faq', function () {
//     return view('faq');
// });

https://akinalaw.com/read_full_post/11

Route::get('/booking', function () {
    return view('booking');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/service1', function () {
    return view('service1');
});

Route::get('/service2', function () {
    return view('service2');
});

Route::get('/service3', function () {
    return view('service3');
});

Route::get('/service4', function () {
    return view('service4');
});

Route::get('/disclaimer_and_privacy_policy', function () {
    return view('disclaimer_and_privacy_policy');
});


// Route::get('/confirm_btn', function () {
//     return view('confirm_btn');
// });

// Route::get('confirm_btn', 'GeneralController@confirm_btn');
Route::get('/', 'GeneralController@welcome2');
// Route::get('/services', 'GeneralController@practice_area');
// Route::get('/services/{id}', 'GeneralController@services');



Route::get('/read_full_post/{article_id}', 'GeneralController@read_full_post');
Route::get('/blog', 'GeneralController@blog');
Route::get('/search_articles_public', 'GeneralController@search_articles_public');

// Route::group(['middleware' => ['auth', 'permission:can-view-dashboard-admin|can-view-dashboard-client']], function () {
    Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');
// });


////////////////////////////11.LOGIN CREDENTIALS///////////////////////////////
Route::get('reset_credentials/{user_id}', 'UserController@reset_credentials');
Route::post('/save_reset_credentials/{user_id}', 'UserController@save_reset_credentials');


///////////////////////////////6.USERS///////////////////////////////////////////
Route::get('/manage_users', 'UserController@manage_users')->name('manage_users');
Route::get('view_user_details/{id}', 'UserController@view_user_details');
Route::get('/register_user', 'UserController@register_user');
Route::post('/store_user', 'UserController@store_user');
Route::get('edit_user/{id}', 'UserController@edit_user');
Route::patch('save_updated_user_record/{user_id}', 'UserController@save_updated_user_record');
Route::get('/delete_user/{user}', 'UserController@delete_user');

//roles
Route::get('manage_roles', 'RoleController@manage_roles');
Route::get('create_role',  'RoleController@create_role');
Route::post('store_role',  'RoleController@store_role');
Route::get('view_role/{id}', 'RoleController@view_role');
Route::get('edit_role/{id}', 'RoleController@edit_role');
Route::patch('store_updated_role/{id}', 'RoleController@store_updated_role');
Route::get('delete_role/{id}', 'RoleController@delete_role');

Route::get('assign_permissions_to_user/{id}', 'RoleController@assign_permissions_to_user');
Route::patch('store_assign_permissions_to_user/{id}', 'RoleController@store_assign_permissions_to_user');

Route::get('users_with_special_permissions', 'RoleController@users_with_special_permissions');


///////////////////////////////////////////////////////////

//Permissions
Route::get('manage_permissions', 'PermissionController@manage_permissions');
Route::get('create_permission',  'PermissionController@create_permission');
Route::post('store_permission',  'PermissionController@store_permission');
Route::get('view_permission/{id}', 'PermissionController@view_permission');
Route::get('edit_permission/{id}', 'PermissionController@edit_permission');
Route::patch('store_updated_permission/{id}', 'PermissionController@store_updated_permission');
Route::get('delete_permission/{id}', 'PermissionController@delete_permission');

////email sending/////////////////////////////
Route::post('/submit_contact_info', 'MailController@submit_contact_info');
Route::post('/subscribe', 'MailController@subscribe')->name('subscribe');
/////////////////////////////////////

////////appointment form//////////////////
// Route::post('/appointment_form', 'MailController@appointment_form')->name('appointment_form');
Route::post('/submit_appointment_form', 'MailController@submit_appointment_form')->name('appointmsubmit_appointment_forment_form');
//////////////////////////////////



    ////////////////////////////non accessible article links///////////////////////////////////
    Route::get('/create_new_article', 'ArticleController@create_new_article');
    Route::post('/store_new_article', 'ArticleController@store_new_article');
    Route::get('/edit_article/{article_id}', 'ArticleController@edit_article');
    Route::get('/delete_article/{article_id}', 'ArticleController@delete_article');
    Route::get('/delete_article_file/{id}', 'ArticleController@delete_article_file');
    Route::patch('/store_edited_article/{article_id}', 'ArticleController@store_edited_article');
    Route::patch('/publish_post/{article_id}', 'ArticleController@publish_post');
    Route::get('/request_for_review/{article_id}', 'ArticleController@request_for_review');



    ////////////////////////////accessible article links///////////////////////////////////
    Route::get('/search_articles_admin', 'ArticleController@search_articles_admin');
    Route::get('/all_blog_posts_admin', 'ArticleController@all_blog_posts_admin');
    Route::get('/unpublished_posts', 'ArticleController@unpublished_posts');
    Route::get('/read_full_article_admin/{article_id}', 'ArticleController@read_full_article_admin');
    Route::post('/store_article_comment', 'ArticleController@store_article_comment');




    ////////////////////admin area///////////////////////////////

require __DIR__.'/auth.php';
