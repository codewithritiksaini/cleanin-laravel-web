<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\{
    ServiceController as AdminServiceController,
    BlogController as AdminBlogController,
    ProjectController as AdminProjectController,
    TestimonialController as AdminTestimonialController,

};

Route::get('/', function () {
    return view('welcome');
})->name('home');




Route::prefix('admin')->group(function () {
    // Services Routes
    Route::group(['prefix' => 'services'], function () {
        Route::get('/', [AdminServiceController::class, 'index'])->name('services.index');
        Route::get('/create', [AdminServiceController::class, 'create'])->name('services.create');
        Route::post('/', [AdminServiceController::class, 'store'])->name('services.store');
        Route::get('/{id}/edit', [AdminServiceController::class, 'edit'])->name('services.edit');
        Route::put('/{id}', [AdminServiceController::class, 'update'])->name('services.update');
        Route::delete('/{id}', [AdminServiceController::class, 'destroy'])->name('services.destroy');
    });

    // Projects Routes
    Route::group(['prefix' => 'projects'], function () {
        Route::get('/', [AdminProjectController::class, 'index'])->name('projects.index');
        Route::get('/create', [AdminProjectController::class, 'create'])->name('projects.create');
        Route::post('/', [AdminProjectController::class, 'store'])->name('projects.store');
        Route::get('/{id}/edit', [AdminProjectController::class, 'edit'])->name('projects.edit');
        Route::put('/{id}', [AdminProjectController::class, 'update'])->name('projects.update');
        Route::delete('/{id}', [AdminProjectController::class, 'destroy'])->name('projects.destroy');
    });

    // Blogs Routes
    Route::group(['prefix' => 'blogs'], function () {
        Route::get('/', [AdminBlogController::class, 'index'])->name('blogs.index');
        Route::get('/create', [AdminBlogController::class, 'create'])->name('blogs.create');
        Route::post('/', [AdminBlogController::class, 'store'])->name('blogs.store');
        Route::get('/{id}/edit', [AdminBlogController::class, 'edit'])->name('blogs.edit');
        Route::put('/{id}', [AdminBlogController::class, 'update'])->name('blogs.update');
        Route::delete('/{id}', [AdminBlogController::class, 'destroy'])->name('blogs.destroy');
    });

    // Testimonials Routes
    Route::group(['prefix' => 'testimonials'], function () {
        Route::get('/', [AdminTestimonialController::class, 'index'])->name('testimonials.index');
        Route::get('/create', [AdminTestimonialController::class, 'create'])->name('testimonials.create');
        Route::post('/', [AdminTestimonialController::class, 'store'])->name('testimonials.store');
        Route::get('/{id}/edit', [AdminTestimonialController::class, 'edit'])->name('testimonials.edit');
        Route::put('/{id}', [AdminTestimonialController::class, 'update'])->name('testimonials.update');
        Route::delete('/{id}', [AdminTestimonialController::class, 'destroy'])->name('testimonials.destroy');
    });

});

Route::get('/admin/ajax/change-service-status/{id}', [AdminServiceController::class, 'changeStatus'])->name('services.status');