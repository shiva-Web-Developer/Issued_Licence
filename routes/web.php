<?php

use Illuminate\Support\Facades\Route;

// CONTROLLER ---- 
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

// ADMIN 
use App\Http\Controllers\Admin\AdminHomecontroller;
use App\Http\Controllers\Admin\Orgnizationcontroller;

// ORGNIZATION 
use App\Http\Controllers\Orgnization\OrgnizationHomecontroller;
use App\Http\Controllers\Orgnization\Applicationcontroller;
use App\Http\Controllers\Orgnization\Wardcontroller;
use App\Http\Controllers\Orgnization\Tradetypecontroller;
use App\Http\Controllers\Orgnization\Firmtypecontroller;
use App\Http\Controllers\Orgnization\Shopcontroller;


    // Login Page  
    Route::group(['middleware' => ['DeletebackMiddleware']], function(){
        Route::get('/',[HomeController::class,"adminlogin"]);
    });

    Route::post('loginquerypost',[LoginController::class,"loginquerypost"])->name('loginquerypost');

    Route::get('Licence-Data',[HomeController::class,"llldata"])->name('llldata');
    Route::get('Application-Form',[HomeController::class,"applicationformview"]);
    Route::get('gettradedata',[HomeController::class,"gettradedata"])->name('gettradedata');
    Route::get('getwarddata',[HomeController::class,"getwarddata"])->name('getwarddata');
    Route::get('getfirmdata',[HomeController::class,"getfirmdata"])->name('getfirmdata');
    Route::post('getthedatgaof',[HomeController::class,"getthedatgaof"]);
    Route::post('gewtdatataype',[HomeController::class,"gewtdatataype"]);
    Route::post('subbbdata',[HomeController::class,"subbbdata"])->name('subbbdata');
    Route::post('checknekay',[HomeController::class,"checknekay"]);
    Route::post('getdataprice',[HomeController::class,"getdataprice"]);
    Route::post('paymentpost',[HomeController::class,"paymentpost"])->name('paymentpost');

    Route::get('/Inovice-Data',[HomeController::class,"onovicedata"])->name('onovicedata');


// ADMIN ---
Route::group(['middleware' => ['AdminMiddleware']], function(){
    Route::get('Admin/Dashboard',[AdminHomecontroller::class,"adminpage"])->name('adminpage');
    Route::get('Admin/Orgnization-Add',[Orgnizationcontroller::class,"orgadd"])->name('orgadd');
    Route::post('orgadddata',[Orgnizationcontroller::class,"orgadddata"])->name('orgadddata');
    Route::get('Admin/Orgnization-List',[Orgnizationcontroller::class,"orglist"])->name('orglist');
    Route::get('orgapproved/{orgapproved}',[Orgnizationcontroller::class,"orgapproved"]); 
    Route::get('orgnotapproved/{orgnotapproved}',[Orgnizationcontroller::class,"orgnotapproved"]);
    Route::get('ddorgdata/{ddorgdata}',[Orgnizationcontroller::class,"ddorgdata"]); 
    Route::get('Admin/Trash-Orgnization',[Orgnizationcontroller::class,"trashorglist"])->name('trashorglist');
    Route::get('orgrestore/{orgrestore}',[Orgnizationcontroller::class,"orgrestore"]);
    Route::get('ddorgdata/{ddorgdata}',[Orgnizationcontroller::class,"ddorgdata"]);
    Route::get('perddorgdata/{perddorgdata}',[Orgnizationcontroller::class,"perddorgdata"]);
});

// ORGNIZATION --- 
Route::group(['middleware' => ['OrgnizationMiddleware']], function(){
    Route::get('Orgnization/Dashboard',[OrgnizationHomecontroller::class,"orgpage"])->name('orgpage');
    Route::get('Orgnization/Profile',[OrgnizationHomecontroller::class,"orgprofile"])->name('orgprofile');
    Route::post('orgdataedit',[OrgnizationHomecontroller::class,"orgdataedit"])->name('orgdataedit');
    Route::get('Orgnization/Application-List',[Applicationcontroller::class,"applicationlist"])->name('applicationlist');
    Route::get('Orgnization/Add-Ward',[Wardcontroller::class,"addward"])->name('addward');
    Route::post('wardaddsum',[Wardcontroller::class,"wardaddsum"])->name('wardaddsum');
    Route::get('orgwarddelete/{orgwarddelete}',[Wardcontroller::class,"orgwarddelete"]);
    Route::get('Orgnization/Trade-Type',[Tradetypecontroller::class,"tradetypeaddview"])->name('tradetypeaddview');
    Route::post('tradeaddsum',[Tradetypecontroller::class,"tradeaddsum"])->name('tradeaddsum');
    Route::get('orgtradedelete/{orgtradedelete}',[Tradetypecontroller::class,"orgtradedelete"]);  
    Route::get('Orgnization/Firm-Type',[Firmtypecontroller::class,"firmtype"])->name('firmtype'); 
    Route::post('firmaddsum',[Firmtypecontroller::class,"firmaddsum"])->name('firmaddsum'); 
    Route::get('orgfirmdelete/{orgfirmdelete}',[Firmtypecontroller::class,"orgfirmdelete"]);  
    Route::get('Orgnization/Shop-Type',[Shopcontroller::class,"shoptype"])->name('shoptype'); 
    Route::post('shopaddsum',[Shopcontroller::class,"shopaddsum"])->name('shopaddsum');
    Route::get('orgshopdelete/{orgshopdelete}',[Shopcontroller::class,"orgshopdelete"]); 
});

// LOGOUT  
    Route::get('logout',[LoginController::class,"logout"])->name('logout');
