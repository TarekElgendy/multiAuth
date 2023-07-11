<?php
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\FrontEnd\OrderController;
use App\Http\Controllers\FrontEnd\profile\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/clear', function () {
    $exitCode = Artisan::call('cache:clear');
    return 'Cache cleared';
})->name('clear');;


Route::group(
    ['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],
    function () {

        Route::get('/account-blocked', [HomeController::class, 'account_blocked'])->name('account_blocked');
        Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
        Auth::routes();
        Route::get('/login', [LoginController::class, 'loginPage'])->name('login');
        Route::get('/admin', [LoginController::class, 'showAdminLoginForm'])->name('admin.login-view');
        Route::post('/admin', [LoginController::class, 'adminLogin'])->name('admin.login');
        Route::get('/admin/register', [RegisterController::class, 'showAdminRegisterForm'])->name('admin.register-view');
        Route::post('/admin/register', [RegisterController::class, 'createAdmin'])->name('admin.register');


        // Auth::routes([
        //     'login' => false,
        //     'register' => false, // Disable registration routes
        //     'reset' => false, // Disable password reset routes
        //     'verify' => false, // Disable email verification routes
        // ]);
        Route::get('/register/partners', [RegisterController::class, 'partner'])->name('user.partner');





        Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('index')->middleware('auth:admin');




        Route::get('/', [HomeController::class, 'index'])->name('home');





        //############# Auth Start ##############
        Route::group(['prefix' => '/user/', 'as' => 'user.',  'middleware' => ['auth', 'active']], function () {


            Route::get('profile', [ProfileController::class, 'profile'])->name('profile');

            Route::get('/', function () {
                return view('welcome');
            });
        }); //end of FrontEnd/profile routes
        //############# Auth END ##############
    }

);
