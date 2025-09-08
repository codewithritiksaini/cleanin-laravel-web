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
    TeamController as AdminTeamController,
    SettingController,
    AdminEnquiryController,
    AdminController,

};

// Frontend Controllers
use App\Http\Controllers\Site\{
    MessageController as SiteMessageController,
    HomeController as SiteHomeController,
    ServicesController,
    BlogController,
    AboutController,
    TeamController,
};

    Route::get('/', [SiteHomeController::class, 'index'])->name('home');

    // Route::get('/about-us', function () {
    //     return view('site.about.about');
    // })->name('about');

    Route::get('/about-us', [AboutController::class, 'index'])->name('about');


        Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');
        Route::get('/teams/{slug}', [TeamController::class, 'detail'])->name('teams.details');



    Route::get('/services', [ServicesController::class, 'index'])->name('services');
    Route::get('/services/{slug}', [ServicesController::class, 'detail'])->name('services.details');


    Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
    Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blogs.details');

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

    Route::post('/services/submit', [MessageController::class, 'servicesSubmit'])->name('services.submit');
    Route::post('/about/submit', [MessageController::class, 'aboutSubmit'])->name('about.submit');

    // login Routes
    Route::get('/login', [AdminController::class, 'showLogin'])->name('login');
    Route::post('/login', [AdminController::class, 'login'])->name('login.submit');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');


// Admin Route

Route::prefix('admin')->middleware('admin')->group(function () {


    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');


    // Services Routes Direct Using Prifix

    Route::group(['prefix' => 'services'], function () {
        Route::get('/', [AdminServiceController::class, 'index'])->name('services.index');
        Route::get('/create', [AdminServiceController::class, 'create'])->name('services.create');
        Route::post('/', [AdminServiceController::class, 'store'])->name('services.store');
        Route::get('/{id}/edit', [AdminServiceController::class, 'edit'])->name('services.edit');
        Route::put('/{id}', [AdminServiceController::class, 'update'])->name('services.update');
        Route::delete('/{id}', [AdminServiceController::class, 'destroy'])->name('services.destroy');
    });



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


    //route team
    Route::get('/teams', [AdminTeamController::class, 'index'])->name('teams.index');
    Route::get('/teams/create', [AdminTeamController::class, 'create'])->name('teams.create');
    Route::post('/teams', [AdminTeamController::class, 'store'])->name('teams.store');
    Route::get('/teams/{id}/edit', [AdminTeamController::class, 'edit'])->name('teams.edit');
    Route::put('/teams/{id}', [AdminTeamController::class, 'update'])->name('teams.update');
    Route::delete('/teams/{id}', [AdminTeamController::class, 'destroy'])->name('teams.destroy');

});

    Route::get('/admin/ajax/change-service-status/{id}', [AdminServiceController::class, 'changeStatus'])->name('services.status');
