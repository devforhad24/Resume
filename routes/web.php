<?php

use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\TestimonialControlller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/about-us', [FrontendController::class, 'about'])->name('about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/portfolio', [FrontendController::class, 'portfolio'])->name('portfolio');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// admin group middleware
Route::middleware(['auth','role:admin'])->group(function(){


    Route::get('/admin/dashboard',[AdminController::class,'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout',[AdminController::class,'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile',[AdminController::class,'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store',[AdminController::class,'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password',[AdminController::class,'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/update/password',[AdminController::class,'AdminUpdatePassword'])->name('admin.update.password');

    Route::get('/admin/all-service', [ServicesController::class, 'allService'])->name('all.service');
    Route::get('/admin/add-service', [ServicesController::class, 'createService'])->name('add.service');
    Route::post('/admin/store-service', [ServicesController::class, 'storeService'])->name('store.service');
    Route::get('/admin/edit-service/{id}', [ServicesController::class, 'editService'])->name('edit.service');
    Route::post('/admin/update-service/{id}', [ServicesController::class, 'updateService'])->name('update.service');
    Route::get('/admin/delete-service/{id}', [ServicesController::class, 'deleteService'])->name('delete.service');
    Route::get('/change-status/{id}', [ServicesController::class, 'changeStatus'])->name('change.status');

    Route::get('/admin/testimonials', [TestimonialControlller::class, 'allTestimonials'])->name('testimonials');
    Route::get('/admin/add-testimonial', [TestimonialControlller::class, 'addTestimonial'])->name('add.testimonial');
    Route::post('/admin/store-testimonial', [TestimonialControlller::class, 'storeTestimonial'])->name('store.testimonial');
    Route::get('/admin/edit-testimonial/{id}', [TestimonialControlller::class, 'editTestimonial'])->name('edit.testimonial');
    Route::post('/admin/update-testimonial/{id}', [TestimonialControlller::class, 'updateTestimonial'])->name('update.testimonial');
    Route::get('/admin/delete-testimonial/{id}', [TestimonialControlller::class, 'deleteTestimonial'])->name('delete.testimonial');

}); // end group admin middleware


// agent group middleware
Route::middleware(['auth','role:agent'])->group(function(){
    Route::get('/agent/dashboard',[AgentController::class,'AgentDashboard'])->name('agent.dashboard');
}); // end group agent middleware


Route::get('/admin/login',[AdminController::class,'AdminLogin'])->name('admin.login');