<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', 'CustomerLoginController@login');
Route::post('register', 'CustomerLoginController@register');
Route::group(['middleware' => 'auth:api'], function(){
Route::get('users-history-job', 'ApiController@UsersHistoryJob');
Route::get('user/detail', 'CustomerLoginController@checkusers');
Route::post('logout', 'CustomerLoginController@logout');
Route::get('listjob', 'ApiController@listjob');
Route::get('detail-job/{jobs_id}', 'ApiController@DetailListJob');
Route::get('listeducation', 'ApiController@listeducation');
Route::get('listarea', 'ApiController@listLiveInArea');
Route::get('listjobspecialist', 'ApiController@JobSpecialist');
Route::get('listetnic', 'ApiController@Etniclist');
Route::get('listgroup', 'ApiController@ListGroup');

Route::post('profile-create', 'ApiController@profilecreate');
Route::get('detail-profile', 'ApiController@detailprofile');
Route::put('profile-update', 'ApiController@profileedit');
Route::post('applyjob', 'ApiController@applyjob');
}); 


