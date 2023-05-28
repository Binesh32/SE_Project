<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\BackendAdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\inboxController;
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
;

//Admin Signup
Route::get('/adminSignIn', function () {
    if (auth()->guard('admin')->check()) {
        return redirect('/');
    } else {
        return view('frontend.auth.adminLogin');
    }
})->name('admin.signin');
Route::get('/adminsignup', [AdminAuthController::class, 'adminsignup'])->name('adminsignup');
Route::post('/admins-register', [AdminAuthController::class, 'adminRegister'])->name('admin.register');
Route::post('/admins-SignIn', [AdminAuthController::class, 'adminSignIn'])->name('admin.SignIn');
Route::get('/customer/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Organization signup
Route::get('/organizationSignIn', function () {
    if (auth()->guard('organizationadmin')->check()) {
        return redirect('/');
    } else {
        return view('frontend.auth.organizationLogin');
    }
})->name('organization.signin');
Route::get('/organizationsignup', [OrganizationAuthController::class, 'organizationsignup'])->name('organizationsignup');
Route::post('/organization-register', [AdminAuthController::class, 'organizationRegister'])->name('organization.register');
Route::post('/organization-SignIn', [AdminAuthController::class, 'organizationSignIn'])->name('organization.SignIn');
Route::get('/customer/logout', [AdminAuthController::class, 'logout'])->name('organization.logout');

//User SignUp
Route::get('/userSignIn', function () {
    if (auth()->guard('useradmin')->check()) {
        return redirect('/');
    } else {
        return view('frontend.auth.userLogin');
    }
})->name('user.signin');
Route::get('/usersignup', [UserAuthController::class, 'usersignup'])->name('usersignup');
Route::post('/users-register', [AdminAuthController::class, 'usersRegister'])->name('users.register');
Route::post('/users-SignIn', [AdminAuthController::class, 'usersSignIn'])->name('users.SignIn');
Route::get('/customer/logout', [AdminAuthController::class, 'logout'])->name('user.logout');

// login
Route::get('/organizationlogin', [OrganizationAuthController::class, 'organizationlogin'])->name('organization.login');
Route::get('/userlogin', [UserAuthController::class, 'userlogin'])->name('userlogin');
Route::get('/adminlogin', [AdminAuthController::class, 'adminlogin'])->name('adminlogin');

Route::group(['middleware' => ['auth:admin']], function() {
    Route::get('/users', [AdminAuthController::class, 'users']);
  });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/post', [HomeController::class, 'post'])->name('post');

// Backend
Route::get('/adminprofile', [BackendAdminController::class, 'adminsprofile'])->name('adminprofile');
Route::get('/createpost', [postController::class, 'createpost'])->name('createpost');
Route::get('/usermypost', [postController::class, 'usermypost'])->name('usermypost');
Route::get('/addblogs', [BackendAdminController::class, 'addblogs'])->name('add.blogs');
Route::get('/bloglist', [BackendAdminController::class, 'blogslist'])->name('bloglist');
Route::get('/postlist', [BackendAdminController::class, 'postelist'])->name('postlist');
Route::get('/inboxlist', [BackendAdminController::class, 'inboxslist'])->name('inboxlist');
Route::get('/admindashboard', [BackendAdminController::class, 'admindashboard'])->name('admindashboard');

//Edit Blogs
Route::get('/editBlogs/{id}', [BackendAdminController::class, 'editBlogs'])->name('edit.Blogs');
Route::post('/edit-Blogs/{id}', [BackendAdminController::class, 'updateBlogs'])->name('update.Blogs');
//Edit Post
Route::get('/editPost/{id}', [postController::class, 'editPost'])->name('edit.Post');
Route::post('/edit-post/{id}', [postController::class, 'updatePost'])->name('update.Post');

//Edit Admin Profile
Route::post('/update-profile/{id}', [AdminAuthController::class, 'updateProfile'])->name('updateAdmin.profile');
Route::get('/edit-profile/{id}', [AdminAuthController::class, 'editProfile'])->name('editAdmin.profile');



// Create Post
Route::post('/createPost', [postController::class, 'createDataPost'])->name('create.Post');

//comment post
Route::post('/createPost', [postController::class, 'commentDataPost'])->name('comment.Post');

//blog post
Route::post('/createblogs', [BackendAdminController::class, 'blogDataPost'])->name('blog.Post');
// Inbox Post
Route::post('/inboxPost', [inboxController::class, 'inboxDataPost'])->name('inbox.Post');

