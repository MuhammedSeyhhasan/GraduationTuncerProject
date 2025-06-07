<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\StaticController;
use App\Http\Controllers\ContactController;
use Illuminate\Database\Schema\IndexDefinition;
use App\Http\Controllers\UrunsController;
use App\Http\Controllers\ChatBotController;
use App\Http\Controllers\TeklifController;



Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Static pages
Route::get('/', [StaticController::class,'index']) ->name('home.index') ;
Route::get('/urunlerimiz',[UrunsController::class,'index']) ->name('user.urunlerimiz'); 
Route::get('/hakimizda',[StaticController::class,'hakimizda']) ->name('home.hakimizda');
Route::get('/iletisim',[StaticController::class,'iletisim']) ->name('home.iletisim') ;
Route::get('/chat',[StaticController::class,'chat']) ->name('home.chat') ;

//detalis page 
Route::get('/uruns/{id}', [UrunsController::class, 'singleProduct'])->name('single.product');


// admin middleware
Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

Route::get('/dashboard', [DashboardController::class, 'index']);

//admin produts mange
Route::get('/admin/uruns/{id}/edit', [UrunsController::class, 'edit'])->name('admin.uruns.edit');
Route::get('/admin/urunlerimiz', [UrunsController::class, 'adminurunlerimiz'])->name('admin.urunlerimiz');

Route::get('/admin/uruns/add', [UrunsController::class, 'create'])->name('admin.Uruns.create');
Route::post('/admin/uruns/add', [UrunsController::class, 'store'])->name('admin.Uruns.store');

Route::delete('/uruns/{id}', [UrunsController::class, 'destroy'])->name('Uruns.destroy');
Route::put('/Uruns/{id}', [UrunsController::class, 'update'])->name('Uruns.update');

//admin panel routes
Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');

Route::get('/admin/dashboard', [AdminController::class, 'showDashboard'])->name('admin.dashboard');


Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::get('/admin/profile', [AdminController::class, 'showProfile'])->name('admin.profile');
Route::post('/admin/profile', [AdminController::class, 'updateProfile'])->name('admin.profile.update');
Route::get('/admin/user', [AdminController::class, 'showUserList'])->name('admin.user');

Route::get('/admin/dashboard', [UrunsController::class, 'dashboard'])->name('admin.dashboard');// for count of pro

Route::get('/admin/register', [AdminController::class, 'showRegister'])->name('admin.register');
Route::post('/admin/register', [AdminController::class, 'register'])->name('admin.register.submit');

Route::get('/admin/users', [AdminController::class, 'showusers'])->name('admin.showusers');
Route::delete('/users/{id}', [AdminController::class, 'destroy'])->name('users.destroy');



//content page 
Route::get('/home.iletisim', [ContactController::class, 'contact']);
Route::post('send_message', [ContactController::class, 'sendEmail'])->name('contact.send');


//chat Bot 
Route::post('/send-to-bot', [ChatBotController::class, 'chat']);
Route::post('/chat', [ChatbotController::class, 'chat']);
Route::post('/send-to-bot', [ChatbotController::class, 'sendToBot'])->name('chatbot.send');

//user Teklif formu
Route::post('/teklif-gonder', [TeklifController::class, 'store'])->name('teklif.store');
Route::get('/admin/teklifler', [TeklifController::class, 'showTeklifRequests'])->name('admin.tekliflist');

Route::get('/admin/teklifler/{id}/okundu', [TeklifController::class, 'markAsRead'])
    ->name('teklif.markAsRead'); /// for status


require __DIR__.'/auth.php';
