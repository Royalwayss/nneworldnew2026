<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;


use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProdoctsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ComponentsController;
use App\Http\Controllers\Admin\ContactsController;
use App\Http\Controllers\Admin\SubscribersController;



use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Front\ProductController;


Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function(){
		
		Route::get('login',[AdminController::class,'login']);
		Route::match(['get','post'],'login/request',[AdminController::class,'loginRequest']);
		
		Route::group(['middleware'=>['admin']],function(){
        
			Route::match(['get','post'],'dashboard',[AdminController::class,'dashboard']);
			Route::get('update-password',[AdminController::class,'updatePassword'])->name('adminsetting');
			Route::post('update-password/request',[AdminController::class,'updatePasswordRequest']);
			Route::post('current-password/verify',[AdminController::class,'currentPasswordVerify']);
			Route::get('update-details',[AdminController::class,'updateDetails'])->name('adminprofile');
			Route::post('update-details/request',[AdminController::class,'updateDetailsRequest']);
			Route::post('get_city',[AdminController::class,'get_city'])->name('get_city');
			Route::get('logout',[AdminController::class,'logout']);

			/* Sub-Admins Routes */
			Route::get('subadmins',[AdminController::class,'subadmins']);
			Route::post('update-subadmin-status',[AdminController::class,'updateSubadminStatus']);
			Route::get('delete-subadmin/{id}',[AdminController::class,'deleteSubadmin']);
			Route::get('add-edit-subadmin/{id?}',[AdminController::class,'addEditSubadmin']);
			Route::post('add-edit-subadmin/request',[AdminController::class,'addEditSubadminRequest']);
			Route::get('/update-role/{id}',[AdminController::class,'updateRole']);
			Route::post('/update-role/request',[AdminController::class,'updateRoleRequest']);

			
			/* Categories Routes */
			Route::get('categories',[CategoryController::class,'categories'])->name('categories');
			Route::post('add-edit-category/{id?}',[CategoryController::class,'addEditCategory'])->name('addeditcategory');
			Route::post('savemessage/{id?}',[CategoryController::class,'savemessage'])->name('savemessage');
			Route::post('message-history/{id}',[CategoryController::class,'messagehistory'])->name('messagehistory');
			
			/* products Routes */
			Route::get('products',[ProdoctsController::class,'products'])->name('products'); 
			Route::post('addedit-product/{id?}',[ProdoctsController::class,'addeditProduct'])->name('addeditproduct'); 
			Route::post('save-property/{id?}',[ProdoctsController::class,'saveproperty'])->name('saveproperty'); 
			Route::get('/updateimagesort', [ProdoctsController::class, 'updateimagesort'])->name('updateimagesort');
	        Route::get('/imagedelete', [ProdoctsController::class, 'imagedelete'])->name('imagedelete');
			
			
			
			/* Components Routes */
			Route::get('components',[ComponentsController::class,'components'])->name('components'); 
			Route::post('addedit-property/{id?}',[ComponentsController::class,'addeditComponent'])->name('addeditcomponent'); 
			Route::post('save-component/{id?}',[ComponentsController::class,'saveComponent'])->name('savecomponent'); 
			
			
			/* Common Routes */
			Route::post('/update-status/{table}/{id}',[AdminController::class,'updateStatus'])->name('updateStatus'); 
			Route::post('/delete-data/{table}/{id}',[AdminController::class,'deleteData'])->name('deleteData'); 
			
			/*Contacts Routes */
			Route::get('contacts',[ContactsController::class,'contacts'])->name('contacts'); 
			Route::post('view-contact/{id}',[ContactsController::class,'view_contact'])->name('view_contact'); 
			
			/*Subscribers Routes */
			Route::match(['get', 'post'],'/subscribers', [SubscribersController::class, 'subscribers'])->name('subscribers');
			 
			 
			/* Visitors Route */
			Route::get('visitors',[VisitorsController::class,'visitors'])->name('visitors'); 
        });
});

Route::namespace('App\Http\Controllers\Front')->group(function(){
    Route::get('',[IndexController::class,'index'])->name('home');
	 // Category Routes
    if (Schema::hasTable('categories')) {
        //Category Routes
        $catUrls = Category::where('status','1')->get()->pluck('category_url')->toArray();
        foreach ($catUrls as $key => $url) {
            Route::get('/'.$url,[ProductController::class,'listing'])->name('listing');
        }
    }
	 Route::get('/product/{name}/{id}',[ProductController::class,'detail'])->name('product');
	 Route::post('/addtocart',[ProductController::class, 'addtoCart'])->name('addtocart');
	 Route::get('/remove-cart-product/{id}',[ProductController::class, 'removeCartProduct'])->name('removecartproduct');
	 Route::get('/about-us',[IndexController::class,'aboutus'])->name('aboutus');
	 Route::get('/processes',[IndexController::class,'processes'])->name('processes');
	 Route::get('/sustainability',[IndexController::class,'sustainability'])->name('sustainability');
	 Route::get('/virtual-tour',[IndexController::class,'virtualtour'])->name('virtualtour');
	 Route::get('/forest-video',[IndexController::class,'forestvideo'])->name('forestvideo');
	 Route::get('/contact-us',[IndexController::class,'contactus'])->name('contactus');
	 Route::post('/save-contact',[IndexController::class,'saveContact'])->name('savecontact');
	 Route::get('/privacy-policy',[IndexController::class,'privacypolicy'])->name('privacypolicy');
	 Route::get('/terms-and-conditions',[IndexController::class,'termsconditions'])->name('termsconditions');
	 //Subscriber routes
    Route::post('add-subscriber',[IndexController::class,'addSubscriber'])->name('addsubscriber');
});

Auth::routes();

