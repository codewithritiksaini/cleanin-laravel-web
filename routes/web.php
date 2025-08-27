<?php

use Illuminate\Support\Facades\Route;

// Backend Controllers
use App\Http\Controllers\Backend\{
    ServiceController as AdminServiceController,
    BlogController as AdminBlogController,
    ProjectController as AdminProjectController,
    TestimonialController as AdminTestimonialController,
    ImageController as AdminImageController,
    VideoController as AdminVideoController,
    BannerController as AdminBannerController,
    AboutController as AdminAboutController,
    SettingController,
    AdminEnquiryController,
    AdminController,

};

// Frontend Controllers
use App\Http\Controllers\Site\{
    MessageController as SiteMessageController,
};

Route::get('/login', [AdminController::class, 'showLogin'])->name('login');
Route::post('/login', [AdminController::class, 'login'])->name('login.submit');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('site.index');
})->name('home');

Route::get('/about-us', function () {
    return view('site.about.about');
})->name('about');

Route::get('/services', function () {
    return view('site.services.index');
})->name('services');

// Route::get('/pages', function () {
//     return view('site.pages.index');
// })->name('pages');

// Route::get('/blogs', function () {
//     return view('site.blogs.index');
// })->name('blogs ');

Route::get('/blogs', [App\Http\Controllers\Site\BlogController::class, 'index'])->name('blogs');
Route::get('/blogs/{id}', [App\Http\Controllers\Site\BlogController::class, 'show'])->name('blogs.details');

Route::get('/projects', function () {
    return view('site.projects.index');
})->name('projects');

Route::get('/contact-us', function () {
    return view('site.Contact.index');
})->name('contact');

Route::get('/test', function () {
    return view('admin.message');
})->name('test');

Route::get('/message', function () {
    return view('site.message');
})->name('message');

Route::post('/send-message', [SiteMessageController::class, 'store'])->name('message.store');



// Admin Dashboard Route

Route::prefix('admin')->middleware('admin')->group(function () {



Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');



################################################################################################################endregion



    // Method 1:

    // Services Routes Direct Using Prifix

    Route::group(['prefix' => 'services'], function () {
        Route::get('/', [AdminServiceController::class, 'index'])->name('services.index');
        Route::get('/create', [AdminServiceController::class, 'create'])->name('services.create');
        Route::post('/', [AdminServiceController::class, 'store'])->name('services.store');
        Route::get('/{id}/edit', [AdminServiceController::class, 'edit'])->name('services.edit');
        Route::put('/{id}', [AdminServiceController::class, 'update'])->name('services.update');
        Route::delete('/{id}', [AdminServiceController::class, 'destroy'])->name('services.destroy');
    });


        // Method 2:

        // SERVICE ROUTE WITH CONTROLLER METHOD

        // Route::controller(AdminServiceController::class)->prefix('services')->group(function () {
        //     Route::get('/', 'index')->name('services.index');
        //     Route::get('/create', 'create')->name('services.create');
        //     Route::post('/', 'store')->name('services.store');
        //     Route::get('/{id}/edit', 'edit')->name('services.edit');
        //     Route::put('/{id}', 'update')->name('services.update');
        //     Route::delete('/{id}', 'destroy')->name('services.destroy');
        // });


        // Method 3:

        // Route With Array For Passing Controller and prifix Values

        // Route::group([
        //     'prefix' => 'services',
        //     'controller' => AdminServiceController::class
        // ], function () {
        //     Route::get('/', 'index')->name('services.index');
        //     Route::get('/create', 'create')->name('services.create');
        //     Route::post('/', 'store')->name('services.store');
        //     Route::get('/{id}/edit', 'edit')->name('services.edit');
        //     Route::put('/{id}', 'update')->name('services.update');
        //     Route::delete('/{id}', 'destroy')->name('services.destroy');
        // });



        // Method 4:

        // Using Resource Route -> es route se automatic 7 route ban jate hai ,
        // esmein jo route ki naming hoti hai vo default hoti hai ,
        //  ye naming url base hoti hai jo url hoga uske naam se hi naming chalegi
        // eg : yahan services url hai to esmein naming automatic

            // HTTP Method    URL	            Controller Method	Route Name
            // GET     	/services	            index	        services.index
            // GET     	/services/create	    create	        services.create
            // POST        /services	            store	        services.store
            // GET     	/services/{id}	         show	        services.show
            // GET     	/services/{id}/edit	     edit	        services.edit
            // PUT/PATCH   /services/{id}	        update	        services.update
            // DELETE      /services/{id}	        destroy	    services.destroy


        // Route::resource('services', AdminServiceController::class);


################################################################################################################endregion





    // Images Routes
    Route::group(['prefix' => 'images'], function () {
        Route::get('/', [AdminImageController::class, 'index'])->name('images.index');
        Route::get('/create', [AdminImageController::class, 'create'])->name('images.create');
        Route::post('/', [AdminImageController::class, 'store'])->name('images.store');
        Route::get('/{id}/edit', [AdminImageController::class, 'edit'])->name('images.edit');
        Route::put('/{id}', [AdminImageController::class, 'update'])->name('images.update');
        Route::delete('/{id}', [AdminImageController::class, 'destroy'])->name('images.destroy');
    });

    // Video Routes
    Route::group(['prefix' => 'videos'], function () {
        Route::get('/', [AdminVideoController::class, 'index'])->name('videos.index');
        Route::get('/create', [AdminVideoController::class, 'create'])->name('videos.create');
        Route::post('/', [AdminVideoController::class, 'store'])->name('videos.store');
        Route::get('/{id}/edit', [AdminVideoController::class, 'edit'])->name('videos.edit');
        Route::put('/{id}', [AdminVideoController::class, 'update'])->name('videos.update');
        Route::delete('/{id}', [AdminVideoController::class, 'destroy'])->name('videos.destroy');
    });

    // Banner Routes
    Route::group(['prefix' => 'banners'], function () {
        Route::get('/', [AdminBannerController::class, 'index'])->name('banners.index');
        Route::get('/create', [AdminBannerController::class, 'create'])->name('banners.create');
        Route::post('/', [AdminBannerController::class, 'store'])->name('banners.store');
        Route::get('/{id}/edit', [AdminBannerController::class, 'edit'])->name('banners.edit');
        Route::put('/{id}', [AdminBannerController::class, 'update'])->name('banners.update');
        Route::delete('/{id}', [AdminBannerController::class, 'destroy'])->name('banners.destroy');
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

    // About Routes
    Route::group(['prefix' => 'about'], function () {
        Route::get('/', [AdminAboutController::class, 'edit'])->name('about.edit');
        Route::put('/', [AdminAboutController::class, 'update'])->name('about.update');
    });

    // Enquiry Routes
    Route::group(['prefix' => 'enquiries'], function () {
        Route::get('/', [AdminEnquiryController::class, 'index'])->name('enquiries.index');
        Route::delete('/{id}', [AdminEnquiryController::class, 'destroy'])->name('enquiries.destroy');
    });

    Route::group(['prefix' => 'settings'], function () {
        Route::get('/', [SettingController::class, 'edit'])->name('settings.edit');
        Route::post('/', [SettingController::class, 'update'])->name('settings.update');
    });

});

Route::get('/admin/ajax/change-service-status/{id}', [AdminServiceController::class, 'changeStatus'])->name('services.status');
