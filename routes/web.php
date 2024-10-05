<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.home');
});

Route::get('/category-wise-product/{category_id}', [AdminController::class, 'Category_wise_products'])->name('categories.products');
Route::get('/capability/{category_id}', [AdminController::class, 'Category_wise_capability'])->name('categories.capability');

Route::get('othersInfo/{param}', [AdminController::class, 'othersInfo'])->name('othersInfo');
Route::get('contactUs/', [AdminController::class, 'contactUs'])->name('contactUs');

// routes/web.php
Route::post('/queries/store', [AdminController::class, 'store'])->name('queries.store');


Route::get('/dashboard', function () {
    return view('admin.layouts.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');




    Route::get('/categories', [AdminController::class, 'Category'])->name('categories');
    Route::get('/capabilities', [AdminController::class, 'capabilities'])->name('capabilities');
    Route::post('/categories/store', [AdminController::class, 'storeCategory'])->name('categories.store');
    Route::get('/categories/{id}/edit', [AdminController::class, 'editCategory'])->name('categories.edit');
    Route::post('/categories/update/{id}', [AdminController::class, 'updateCategory'])->name('categories.update');
    Route::delete('/categories/delete/{id}', [AdminController::class, 'deleteCategory'])->name('categories.delete');


    Route::get('/products', [AdminController::class, 'Products'])->name('products');
    Route::post('/products/store', [AdminController::class, 'storeProduct'])->name('products.store');
    Route::get('/products/{id}/edit', [AdminController::class, 'editProduct'])->name('products.edit');
    Route::post('/products/update/{id}', [AdminController::class, 'updateProduct'])->name('products.update');
    Route::delete('/products/delete/{id}', [AdminController::class, 'deleteProduct'])->name('products.delete');

    // Slider Routes
    Route::get('sliders', [AdminController::class, 'sliders'])->name('sliders');
    Route::get('sliders/create', [AdminController::class, 'createSlider'])->name('sliders.create');
    Route::post('sliders/store', [AdminController::class, 'storeSlider'])->name('sliders.store');
    Route::get('sliders/{id}/edit', [AdminController::class, 'editSlider'])->name('sliders.edit');
    Route::post('sliders/update/{id}', [AdminController::class, 'updateSlider'])->name('sliders.update');
    Route::delete('sliders/delete/{id}', [AdminController::class, 'destroySlider'])->name('sliders.destroy');

    // Contact Routes

    Route::get('contacts', [AdminController::class, 'contact'])->name('contacts');
    Route::put('contacts/update/{id}', [AdminController::class, 'updateContact'])->name('contacts.update');

    Route::get('contacts/create', [AdminController::class, 'createContact'])->name('contacts.create');
    Route::post('contacts/store', [AdminController::class, 'storeContact'])->name('contacts.store');

    Route::get('contacts/edit/{id}', [AdminController::class, 'editContact'])->name('contacts.edit');
    
    Route::delete('contacts/delete/{id}', [AdminController::class, 'destroyContact'])->name('contacts.destroy');

    Route::get('company_profile', [AdminController::class, 'company_profile'])->name('company_profile');
    Route::get('quality', [AdminController::class, 'quality'])->name('quality');
    Route::get('compliance', [AdminController::class, 'compliance'])->name('compliance');
    Route::get('production_unit', [AdminController::class, 'production_unit'])->name('production_unit');
    Route::get('sustainability', [AdminController::class, 'sustainability'])->name('sustainability');
    Route::get('who_we_are', [AdminController::class, 'who_we_are'])->name('who_we_are');
    Route::get('what_we_do', [AdminController::class, 'what_we_do'])->name('what_we_do');
    
    Route::put('others/update/{type}', [AdminController::class, 'updateothers'])->name('others.update');


    
    Route::get('queries', [AdminController::class, 'queries'])->name('queries');


});

require __DIR__.'/auth.php';
