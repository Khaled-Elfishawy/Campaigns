<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampaignsController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UploadedLeadsConreoller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something create_great!
|
*/
require __DIR__.'/auth.php';
Route::GET('/campaign/{campaign}' ,[CampaignsController::class, 'show'])->name('show_campaigns');
Route::POST('/lead/create' ,[LeadController::class, 'store'])->name('create_lead');
Route::group(['middleware' => 'auth'], function()
{
	Route::get('/', function () { return view('dashboard');} )->name('dashboard');
	Route::get('/dashboard', function () { return view('dashboard');} )->name('dashboard');
	Route::get('/campaigns' ,[CampaignsController::class, 'index'])->name('campaigns');
	Route::get('/campaigns/create' ,[CampaignsController::class, 'create'])->name('create_campaigns');
	Route::POST('/campaigns/create' ,[CampaignsController::class, 'store'])->name('store_campaigns');
	Route::get('/campaigns/edit/{campaign}' ,[CampaignsController::class, 'edit'])->name('edit_campaigns');
	Route::POST('/campaigns/edit/{campaign}' ,[CampaignsController::class, 'update'])->name('update_campaigns');
	Route::GET('/lead/type/{type?}' ,[LeadController::class, 'index'])->name('lead');
	Route::POST('/lead/type/{type?}' ,[LeadController::class, 'search'])->name('search_lead');
	Route::GET('/lead/{lead}' ,[LeadController::class, 'show'])->name('show_lead');
	Route::POST('/lead/comment/{lead}' ,[LeadController::class, 'comment'])->name('comment');
	Route::GET('/lead/edit/{lead}' ,[LeadController::class, 'edit'])->name('edit_lead');
	Route::POST('/lead/edit/{lead}' ,[LeadController::class, 'update'])->name('update_lead');
	Route::GET('/sales' ,[SalesController::class, 'index'])->name('sales');
	Route::GET('/sales/create' ,[SalesController::class, 'create'])->name('create_sales');
	Route::POST('/sales/create' ,[SalesController::class, 'store'])->name('store_sales');
	Route::GET('/sales/edit/{sales}' ,[SalesController::class, 'edit'])->name('edit_sales');
	Route::POST('/sales/edit/{sales}' ,[SalesController::class, 'update'])->name('update_sales');
	Route::GET('/sales/delete/{sales}' ,[SalesController::class, 'destroy'])->name('destroy_sales');
	Route::GET('/sales/campaigns/{sales}' ,[SalesController::class, 'campaigns'])->name('edit_sales_campaigns');
	Route::POST('/sales/campaigns/{sales}' ,[SalesController::class, 'update_campaigns'])->name('update_sales_campaigns');
	Route::GET('/report' ,[ReportController::class, 'index'])->name('report');
	Route::POST('/report' ,[ReportController::class, 'search'])->name('search_report');
	//Uploaded Leads
	Route::GET('/uploaded_lead/type/{type?}' ,[UploadedLeadsConreoller::class, 'index'])->name('uploaded_lead');
	Route::POST('/uploaded_lead/type' ,[UploadedLeadsConreoller::class, 'search'])->name('search_uploaded_lead');
	Route::GET('/uploaded_lead/upload' ,[UploadedLeadsConreoller::class, 'upload'])->name('upload_uploaded_lead');
	Route::POST('/uploaded_lead/upload' ,[UploadedLeadsConreoller::class, 'store_upload'])->name('store_upload');
	Route::POST('/uploaded_lead/create' ,[UploadedLeadsConreoller::class, 'store'])->name('create_uploaded_lead');
	Route::GET('/uploaded_lead/{lead}' ,[UploadedLeadsConreoller::class, 'show'])->name('show_uploaded_lead');
	Route::POST('/uploaded_lead/comment/{lead}' ,[UploadedLeadsConreoller::class, 'comment'])->name('uploaded_lead_comment');
	Route::GET('/uploaded_lead/edit/{lead}' ,[UploadedLeadsConreoller::class, 'edit'])->name('edit_uploaded_lead');
	Route::POST('/uploaded_lead/edit/{lead}' ,[UploadedLeadsConreoller::class, 'update'])->name('update_uploaded_lead');	
});
