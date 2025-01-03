<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\MyDashboardController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceProviderApplicationController;
use App\Http\Controllers\ServiceProviderDashboardController;
use Carbon\Laravel\ServiceProvider;

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




Route::get('/', [Controller::class, 'myHome'])->name('my.Home');
Route::get('/myHome', [Controller::class, 'myHome'])->name('my.Home');
Route::get('/myAbout', [Controller::class, 'myAbout'])->name('my.About');
Route::get('/myFaqs', [Controller::class, 'myFaq'])->name('my.Faq');
Route::get('/myTestimonial', [Controller::class, 'myTestimonial'])->name('my.Testimonial');
Route::get('/myContact', [Controller::class, 'myContact'])->name('my.Contact');
Route::get('/myBlogs', [Controller::class, 'myBlogs'])->name('my.Blogs');
Route::get('/myBlogDetails/{id}', [Controller::class, 'myBlogDetails'])->name('my.BlogDetails');
Route::get('/myServices', [Controller::class, 'myServices'])->name('my.Services');
Route::get('/myServiceDetails/{service_id}', [Controller::class, 'myServiceDetails'])->name('my.ServiceDetails');

//updates
Route::get('/myApplication', [Controller::class, 'myApplication'])->name('my.Application');

Route::get('/manageApplication', [ServiceProviderApplicationController::class, 'manageApplication'])->name('manage-application');


Route::middleware(['auth'])->group(function () {
    Route::get('/service-provider/dashboard/{id}', [ServiceProviderDashboardController::class, 'index'])->name('provider.dashboard');
    Route::get('/service-provider/details/{id}', [Controller::class, 'serviceProviderDetails'])->name('service-provider.detail');
    Route::post('/apply-service-provider', [ServiceProviderApplicationController::class, 'store'])->name('apply-service-provider');
    Route::get('/application-form', [Controller::class, 'form'])->name('service-application-form');
    Route::post('/service-provider-applications/{id}/update-status', [ServiceProviderApplicationController::class, 'updateStatus'])->name('update-application-status');
    Route::post('/myTestimonial', [TestimonialController::class, 'addTestimonial'])->name('my.Testimonial');
    Route::post('/myAdminBookings/{service_id}', [BookingController::class, 'addBooking'])->name('add.Booking');
    Route::post('/myadmincontact', [ContactController::class, 'submitContactForm'])->name('my.SubmitMyContact');
});

//Register & Login
Route::middleware('redirect.dashboard')->group(function () {
    //Signup
    Route::get('/myRegister', [Controller::class, 'myRegister'])->name('my.Register');
    Route::post('/myRegister', [Controller::class, 'addRegister'])->name('add.Register');

    //Login
    Route::get('/myLogin', [Controller::class, 'myLogin'])->name('my.Login');
    Route::post('/myLogin', [Controller::class, 'addLogin'])->name('add.Login');
});

//Signout
Route::get('/myLgout', [Controller::class, 'myLogout'])->name('my.Logout');



//................................................................//

//for myadmin page

Route::middleware(['auth', 'my.admin'])->group(function () {

    //dashboard
    Route::get('/myAdminDashboard', [MyDashboardController::class, 'myAdminDashboard'])->name('my.AdminDashboard');
    Route::get('/dashboard', [MyDashboardController::class, 'myAdminDashboard'])->name('my.AdminDashboard');

    //adminlist

    Route::middleware(['superadmin'])->group(function () {
        Route::get('/myadminlist', [Controller::class, 'showAdminList'])->name('my.AdminList');
        Route::delete('/users/{id}', [Controller::class, 'destroy'])->name('users.destroy');
        Route::post('/promote-to-admin/{userId}', [Controller::class, 'promoteToAdmin'])->name('user.promoteToAdmin');
        Route::patch('/users/{id}/update-role', [Controller::class, 'updateRole'])->name('users.updateRole');
    });


    //testimonials
    Route::get('/myAdminTestimonials', [TestimonialController::class, 'myAdminTestimonials'])->name('my.AdminTestimonials');
    Route::delete('/testimonial/{testimonials_id}', [TestimonialController::class, 'destroy'])->name('delete.testimonial');


    //orders
    Route::put('/bookings/{id}', [BookingController::class, 'updateStatus'])->name('update.myAdminOrderStatus');
    Route::get('/myAdminBookings', [BookingController::class, 'getBookings'])->name('my.AdminBookings');

    //services
    Route::get('/myAdminServices', [ServicesController::class, 'myAdminServices'])->name('my.AdminServices');
    Route::post('/addAdminServices', [ServicesController::class, 'addAdminServices'])->name('add.AdminServices');
    Route::get('/updateAdminServices/{service_id}', [ServicesController::class, 'updateAdminServices'])->name('update.AdminServices');
    Route::put('/updatedAdminServices/{service_id}', [ServicesController::class, 'updatedAdminServices'])->name('updated.AdminServices');
    Route::post('/upload-service-images', [ServicesController::class, 'uploadServiceImages'])->name('service.upload');
    Route::delete('/admin/services/{service_id}', [ServicesController::class, 'deleteAdminService'])->name('delete.AdminServices');


    //faqs
    Route::get('/myAdminFaq', [FaqController::class, 'myAdminFaq'])->name('my.AdminFaq');
    Route::post('/myAdminFaq', [FaqController::class, 'addFaq']);
    Route::get('/delete/faq/{faq_id}', [FaqController::class, 'delFaq'])->name('del.faq');

    //contact
    Route::get('/myadmincontact', [ContactController::class, 'showContactPage'])->name('my.AdminContact');
});


//profilePage

Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
Route::put('/profile/password', [ProfileController::class, 'updatePassword'])->name('profile.password.update');
