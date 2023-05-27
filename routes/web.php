<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\BackendAdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrganizationAuthController;
use App\Http\Controllers\postController;
use App\Http\Controllers\UserAuthController;
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
// signup
Route::get('/organizationsignup', [OrganizationAuthController::class, 'organizationsignup'])->name('organizationsignup');
Route::get('/usersignup', [UserAuthController::class, 'usersignup'])->name('usersignup');
Route::get('/adminsignup', [AdminAuthController::class, 'adminsignup'])->name('adminsignup');

// login
Route::get('/organizationlogin', [OrganizationAuthController::class, 'organizationlogin'])->name('organizationlogin');
Route::get('/userlogin', [UserAuthController::class, 'userlogin'])->name('userlogin');
Route::get('/adminlogin', [AdminAuthController::class, 'adminlogin'])->name('adminlogin');


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/post', [HomeController::class, 'post'])->name('post');







// Backend
Route::get('/adminprofile', [BackendAdminController::class, 'adminprofile'])->name('adminprofile');
Route::get('/createpost', [postController::class, 'createpost'])->name('createpost');
Route::get('/usermypost', [postController::class, 'usermypost'])->name('usermypost');
Route::get('/addblogs', [BackendAdminController::class, 'addblogs'])->name('addblogs');
Route::get('/bloglist', [BackendAdminController::class, 'bloglist'])->name('bloglist');
Route::get('/postlist', [BackendAdminController::class, 'postlist'])->name('postlist');
Route::get('/inboxlist', [BackendAdminController::class, 'inboxlist'])->name('inboxlist');
Route::get('/admindashboard', [BackendAdminController::class, 'admindashboard'])->name('admindashboard');





// Route::get('/organization', function () {
//     return view('frontend.auth.organizationSignUp');
// });
// Route::get('/userSignUp', function () {
//     return view('frontend.auth.userSignUp');
// });
// Route::get('/blogs', function () {
//     return view('frontend.home.blogs');
// });

// Route::get('/addblogs', function () {
//     return view('backend.adminadd.addblogs');
// });
// Route::get('/bloglist', function () {
//     return view('backend.adminadd.bloglist');
// });
