<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AkuisisiController;
use App\Http\Controllers\BackupController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FisikController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\RestoreController;
use App\Http\Controllers\RfcController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WhitelistController;
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

// ini adalah routing utama
Route::get('/', function () {
    return view('index');
});



Route::middleware(['auth'])->group(function(){
    Route::get('logout', [SessionController::class, 'logout']);
}); 


// ini adalah routing untuk autentikasi
Route::middleware(['guest'])->group(function(){
    Route::get('login', [SessionController::class, 'index']);
    Route::post('login', [SessionController::class, 'login']);
    Route::get('register', [SessionController::class, 'register']);
    Route::post('submit-register', [SessionController::class, 'store']);
}); 

//ini adalah routing untuk admin
Route::middleware(['auth'])->group(function(){
   
});


// ini adalah routing untuk user
Route::middleware(['auth'])->group(function(){
    // masuk ke halaman dashboard user
    Route::get('user/dashboard',[DashboardController::class,'user']);

    // routing rfc user
    // masuk ke halaman index rfc user
    Route::get('user/index-rfc',[RfcController::class,'index']);
    // masuk ke halaman form user
    Route::get('user/create-rfc',[RfcController::class,'create']);

    // submit form yang telah di isi
    Route::post('user/submit-rfc',[RfcController::class,'store']);
    // masuk ke halaman edit
    Route::get('user/edit-rfc/{id}',[RfcController::class,'edit']);
    // mengurim hasil edit
    Route::post('user/update-rfc/{id}',[RfcController::class,'update']);
    // menghapus data rfc
    Route::delete('user/delete-rfc/{id}',[RfcController::class,'destroy']);
    
    // routing monitoring user
    // masuk ke halaman index monitoring user
    Route::get('user/index-monitoring', [MonitoringController::class,'index']);
    // masuk ke halaman form user
    Route::get('user/create-monitoring', [MonitoringController::class,'create']);
    // submit form yang telah di isi
    Route::post('user/submit-monitoring', [MonitoringController::class,'store']);
    // masuk ke halaman edit
    Route::get('user/edit-monitoring/{id}', [MonitoringController::class, 'edit']);
    // mengurim hasil edit
    Route::post('user/update-monitoring/{id}', [MonitoringController::class, 'update']);
    // menghapus data monitoring
    Route::delete('user/delete-monitoring/{id}', [MonitoringController::class, 'destroy']);

    // routing backup user
    // masuk ke halaman index backup user
    Route::get('user/index-backup', [BackupController::class, 'index']);
    // masuk ke halaman form user
    Route::get('user/create-backup', [BackupController::class, 'create']);
    // submit form yang telah di isi
    Route::post('user/submit-backup', [BackupController::class, 'store']);
    // masuk ke halaman edit 
    Route::get('user/edit-backup/{id}', [BackupController::class, 'edit']);
    // mengurim hasil edit
    Route::post('user/update-backup/{id}', [BackupController::class, 'update']);
    // menghapus data monitoring
    Route::delete('user/delete-backup/{id}', [BackupController::class, 'destroy']);

    // routing restore user
    // masuk ke halaman index restore user
    Route::get('user/index-restore', [RestoreController::class, 'index']);
    // masuk ke halaman form user
    Route::get('user/create-restore', [RestoreController::class, 'create']);
    // submit form yang telah di isi
    Route::post('user/submit-restore', [RestoreController::class, 'store']);
    // masuk ke halaman edit
    Route::get('user/edit-restore/{id}', [RestoreController::class, 'edit']);
    // mengurim hasil edit
    Route::post('user/update-restore/{id}', [RestoreController::class, 'update']);
    // menghapus data restore
    Route::delete('user/delete-restore/{id}', [RestoreController::class, 'destroy']);

    // routing akuisisi user
    // masuk ke halaman index akuisisi user
    Route::get('user/index-akuisisi', [AkuisisiController::class, 'index']);
    // masuk ke halaman detail akuisisi user
    Route::get('user/detail-akuisisi/{id}', [AkuisisiController::class, 'detail']);
    // masuk ke halaman form user
    Route::get('user/create-akuisisi', [AkuisisiController::class, 'create']);
    // submit form yang telah di isi
    Route::post('user/submit-akuisisi', [AkuisisiController::class, 'store']);
    // masuk ke halaman edit
    Route::get('user/edit-akuisisi/{id}', [AkuisisiController::class, 'edit']);
    // mengurim hasil edit
    Route::post('user/update-akuisisi/{id}', [AkuisisiController::class, 'update']);
    // menghapus data akuisisi
    Route::delete('user/delete-akuisisi/{id}', [AkuisisiController::class, 'destroy']);

     // routing fisik user
    // masuk ke halaman index fisik user
    Route::get('user/index-fisik', [FisikController::class, 'index']);
    // masuk ke halaman form user
    Route::get('user/create-fisik', [FisikController::class, 'create']);
    // submit form yang telah di isi
    Route::post('user/submit-fisik', [FisikController::class, 'store']);
    // masuk ke halaman edit
    Route::get('user/edit-fisik/{id}', [FisikController::class, 'edit']);
    // mengurim hasil edit
    Route::post('user/update-fisik/{id}', [FisikController::class, 'update']);
    // menghapus data fisik
    Route::delete('user/delete-fisik/{id}', [FisikController::class, 'destroy']);

    // routing whitelist user
    // masuk ke halaman index whitelist user
    Route::get('user/index-whitelist', [WhitelistController::class, 'index']);
    // masuk ke halaman form user
    Route::get('user/create-whitelist', [WhitelistController::class, 'create']);
    // submit form yang telah di isi
    Route::post('user/submit-whitelist', [WhitelistController::class, 'store']);
    // masuk ke halaman edit
    Route::get('user/edit-whitelist/{id}', [WhitelistController::class, 'edit']);
    // mengurim hasil edit
    Route::post('user/update-whitelist/{id}', [WhitelistController::class, 'update']);
    // menghapus data whitelist
    Route::delete('user/delete-whitelist/{id}', [WhitelistController::class, 'destroy']);


        //masuk kehalamann index admin
    Route::get('admin/dashboard',[DashboardController::class,'index']); 
    //routing monitoring admin
    // masuk ke halaman index rfc
    Route::get('admin/index-rfc', [RfcController::class,'index']);
    // masuk ke halaman edit rfc
    Route::get('admin/edit-rfc/{id}', [RfcController::class, 'edit']);
    // mengurim hasil edit rfc
    Route::post('admin/update-rfc/{id}', [RfcController::class, 'update']);
    // masuk ke halaman riwayat
    Route::get('admin/history-rfc', [RfcController::class, 'history']);
    // menghapus data rfc admin
    Route::delete('admin/delete-rfc/{id}',[RfcController::class,'destroy']);
    // masuk ke halaman index monitoring admin
    Route::get('admin/index-monitoring', [MonitoringController::class,'index']);
    //masuk ke halaman backup admin
    Route::get('admin/index-backup', [BackupController::class, 'index']);
    //masuk ke halaman restore admin
    Route::get('admin/index-restore', [RestoreController::class, 'index']);
    //masuk ke halaman akuisisi admin
    Route::get('admin/index-akuisisi', [AkuisisiController::class, 'index']);
    //masuk ke halaman akuisisi-daftar pemegang aset admin
    Route::get('admin/aset-akuisisi', [AkuisisiController::class, 'aset']);
    //masuk ke halaman akuisisi-tambah data aset admin
    Route::get('admin/tambahaset-akuisisi', [AkuisisiController::class, 'tambahaset']);
    // masuk ke halaman index fisik admin
    Route::get('admin/index-fisik', [FisikController::class, 'index']);
     // masuk ke halaman index whitelist admin
     Route::get('admin/index-whitelist', [WhitelistController::class, 'index']);
});

