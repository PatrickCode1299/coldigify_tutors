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


Route::get('/', [App\Http\Controllers\WelcomeController::class, 'showWelcome']); 
Route::get('/checkout/{id}', [App\Http\Controllers\CheckoutController::class, 'index'])->name('checkout'); 
Route::get('/payments', [App\Http\Controllers\PaymentDetailsController::class, 'index'])->name('payments'); 
Route::get('/instructor/{id}', [App\Http\Controllers\InstructorViewController::class, 'index'])->name('instructor'); 
Route::get('/watch/view_id/{parameter}', [App\Http\Controllers\ViewCourseController::class, 'index'])->name('watch.show'); 
Route::get('/dashboard', [App\Http\Controllers\StudentDashboardController::class, 'index'])->name('dashboard'); 
Route::get('/enable', [App\Http\Controllers\ValidateController::class, 'gotoValidate'])->name('enable');
Route::post('/validate', [App\Http\Controllers\ValidateController::class, 'validatePay'])->name('validate');
Route::post('/pay', [App\Http\Controllers\PaymentController::class, 'redirectToGateway'])->name('pay');
Route::get('/payment/callback', [App\Http\Controllers\PaymentController::class, 'handleGatewayCallback'])->name('payment');
Route::get('/preview/unique_id/{parameter}', [App\Http\Controllers\PreviewCoursesController::class, 'index'])->name('preview.show'); 
Route::get('/register/{id}', [App\Http\Controllers\RedirectRegisterController::class, 'registrationRedirect'])->name('redirect'); 
Route::get('/register', [App\Http\Controllers\CustomAuthController::class, 'registrationUser'])->name('register'); 
Route::post('/register.user', [App\Http\Controllers\RegisterUserController::class, 'customRegistration'])->name('register.user'); 
Route::post('/custom-login', [App\Http\Controllers\AdminLoginController::class, 'customLogin'])->name('login.custom'); 
Route::get('/admin_login', [App\Http\Controllers\CustomAuthController::class, 'index'])->name('admin_login');
Route::get('/admin_logout', [App\Http\Controllers\LogoutAdminController::class, 'index'])->name('admin_logout');
Route::post('/edu-info', [App\Http\Controllers\EduInfo::class, 'index'])->name('edu.info');
Route::post('/upload_pic', [App\Http\Controllers\EduInfo::class, 'createProfilePic'])->name('upload.pic');
Route::post('/create-course', [App\Http\Controllers\MainDashboardController::class, 'createCourse'])->name('course.create'); 
Route::get('/admin_register', [App\Http\Controllers\AdminRegisterController::class, 'index'])->name('admin_registration');
Route::get('/main_dashboard', [App\Http\Controllers\MainDashboardController::class, 'index'])->name('main_dashboard');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin_dashboard', [App\Http\Controllers\AdminDashboardController::class, 'index'])->name('admin_dashboard'); 
Route::post('/custom-registration', [App\Http\Controllers\AdminRegisterController::class, 'customRegistration'])->name('register.custom'); 
Route::post('/set_question', [App\Http\Controllers\AdminDashboardController::class, 'setQuestion'])->name('set_question'); 
Route::get('signout', [App\Http\Controllers\CustomAuthController::class, 'signOut'])->name('signout');
Route::get('explore', [App\Http\Controllers\AllCoursesController::class, 'exploreCourse'])->name('explore');
Route::get('/showcourse/cat/{id}', [App\Http\Controllers\AllCoursesController::class, 'showCourse'])->name('showcourse');
Auth::routes();
Route::get('/exam', [App\Http\Controllers\AdminDashboardController::class, 'examine'])->name('exam');
Route::get('/take_exam/{parameter}', [App\Http\Controllers\UserExamController::class, 'index'])->name('exam.show');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
