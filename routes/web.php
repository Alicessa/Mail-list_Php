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
//conant表路由
Route::post('Contact/codoup',"ContactController@codoup")->name("contact.codoup");
Route::get('Contact/conup',"ContactController@conup")->name("contact.conup");
Route::get('Contact/delete',"ContactController@delete")->name("contact.delete");

Route::get('Contact/conadd',"ContactController@conadd")->name("contact.conadd");
Route::post('Contact/condoadd',"ContactController@condoadd")->name("contact.condoadd");
Route::get('Contact/contactlist',"ContactController@contactlist")->name("contact.contactlist");






//////////////////////
Route::get('Users/delete',"UsersController@delete")->name("users.delete");

Route::get('Group/updata',"GroupController@updata")->name("group.updata");
Route::get('Group/delete',"GroupController@delete")->name("group.delete");
Route::post('Group/updata',"GroupController@doupdata")->name("group.updata");
Route::get('Group/add',"GroupController@add")->name("group.add");
Route::post('Group/add',"GroupController@saveadd")->name("group.add");
Route::get('Group/grouplist',"GroupController@grouplist")->name("group.grouplist");




Route::get('Users/userslist',"UsersController@userslist")->name("users.userslist");
Route::get('Users/updata',"UsersController@updata")->name("users.updata");
Route::post('Users/updata',"UsersController@doupdata")->name("users.updata");
Route::get('Users/userlogin',"UsersController@userlogin")->name("users.userlogin");
Route::post('Users/userlogin',"UsersController@dologin")->name("users.dologin");
Route::get('Users/add',"UsersController@add")->name("users.add");
Route::post('Users/add',"UsersController@saveadd")->name("users.add");

Route::get('/', function () {
    return view('welcome');
});
