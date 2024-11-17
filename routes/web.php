<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmailController;


Route::get('/', function () {
    return view('upload_file.import_excel');
});
Route::get('/upload_file/import_excel', [BusinessController::class, 'import_excel'])->name('import_excel');

Route::post('/upload_file/import_excel', [BusinessController::class, 'import_excel_post'])->name('excel.post');

Route::get('remove_email/{id}', [BusinessController::class, 'remove_email']);

Route::get('/send-user-emails', [UserController::class, 'show_user'])->name('show_user.post');

Route::post('SendBulkEmails', [UserController::class, 'SendBulkEmails'])->name('sendBulkEmails.post');



//Route::get('/send-emails', [BusinessController::class, 'show_business'])->name('show_business.post');


//Route::post('import-excel', [UserController::class, 'user_store'])->name('user.store');
