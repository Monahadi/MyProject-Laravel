<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\DashboardController;




 
route::get('/',[ItemsController::class,'ShowItemGroup'])->name('welcome');
route::get('/itemgroups',[ItemsController::class,'GetItemGroup'])->name('itemgroups');
route::post('save',[ItemsController::class,"SaveGroupsItems"])->name('save');
route::get('/del/{x}',[ItemsController::class,"del"])->name('del');
route::get('/edit/{x}',[ItemsController::class,'Edit'])->name('edit');
route::post('/update',[ItemsController::class,"update"])->name('update');
route::get('/cpanel',[DashboardController::class,'DisplayItems'])->name('controlpanel');
route::get('/addgritem',[DashboardController::class,'Displayadditemsgroup'])->name('addgritem');
route::get('/logout',[DashboardController::class,'logout'])->name('logout');
route::get('/showproduct/{id}',[ItemsController::class,'Showproduct'])->name('showproduct');
route::get('/addtocart/{id}',[ItemsController::class,'AddtoCart'])->name('addtocart');
route::get('testapi',[ItemsController::class,"testapi"])->name('testapi');
route::get('/checkout',[ItemsController::class,'Checkout'])->name('checkout')->middleware('auth');



Auth::routes();





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



