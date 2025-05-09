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
    // backend section Routes
    Route::get('services', [AdminServiceController::class, 'index'])->name('services.index');
    Route::get('services/create', [AdminServiceController::class, 'create'])->name('services.create');
    Route::post('/services', [AdminServiceController::class, 'store'])->name('services.store');
    Route::get('/services/{id}/edit', [AdminServiceController::class, 'edit'])->name('services.edit');
    Route::put('/services/{id}', [AdminServiceController::class, 'update'])->name('services.update');
    Route::delete('/services/{id}', [AdminServiceController::class, 'destroy'])->name('services.destroy');


    // backend section Routes
    Route::get('blog', [AdminBlogController::class, 'index'])->name('blog.index');
    Route::get('blog/create', [AdminBlogController::class, 'create'])->name('blog.create');

    // backend section Routes
    Route::get('project', [AdminProjectController::class, 'index'])->name('project.index');
    Route::get('project/create', [AdminProjectController::class, 'create'])->name('project.create');

    // backend section Routes
    Route::get('testimonial', [AdminTestimonialController::class, 'index'])->name('testimonial.index');
    Route::get('testimonial/create', [AdminTestimonialController::class, 'create'])->name('testimonial.create');
});

Route::get('/admin/ajax/change-service-status/{id}', [AdminServiceController::class, 'changeStatus'])->name('services.status');