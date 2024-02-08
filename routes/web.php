<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\OrganizationsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\FormTemplatesController;
use App\Http\Controllers\FormFieldsController;
use App\Http\Controllers\FormSubmissionsController;
use App\Http\Controllers\SubmissionDataController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\PermissionsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Organizations Routes
Route::resource('organizations', OrganizationsController::class);

// Categories Routes
Route::resource('categories', CategoriesController::class);

// Form Templates Routes
Route::resource('form_templates', FormTemplatesController::class);

// Form Fields Routes
Route::resource('form_fields', FormFieldsController::class);

// Form Submissions Routes
Route::resource('form_submissions', FormSubmissionsController::class);

// Submission Data Routes
Route::resource('submission_data', SubmissionDataController::class);

// Users Routes
Route::resource('users', UsersController::class);

// Roles Routes
Route::resource('roles', RolesController::class);

// Permissions Routes
Route::resource('permissions', PermissionsController::class);