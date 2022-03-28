<?php

use App\Http\Controllers\admin\AdminAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminBannerController;
use App\Http\Controllers\admin\AdminBlogsController;
use App\Http\Controllers\admin\AdminTestimonialsController;
use App\Http\Controllers\admin\AdminServicesController;
use App\Http\Controllers\admin\AdminProductDetailsController;
use App\Http\Controllers\UIController;


use App\Http\Controllers\guider\GuiderController;
use App\Http\Controllers\guider\GuiderPackageController;
use App\Http\Controllers\guider\GuiderMembershipController;


use App\Http\Controllers\vacationer\VacationerPackageController;

use App\Http\Controllers\FaceBookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin-login', function () {
    return redirect()->route('admin_login');
});

/*--------------------------------------- GUIDER ROUTES ------------------------------- START --------------- */

// For stripe
Route::get('guider-stripe-form/{membership?}', [GuiderController::class, 'stripe_form'])->name('Guider_stripe_form');
Route::post('/payee', [GuiderController::class, 'event_stripe'])->name('stripe_post')->middleware('auth');

// Facebook Login URL
Route::prefix('facebook')->name('facebook.')->group( function(){
    Route::get('auth', [FaceBookController::class, 'loginUsingFacebook'])->name('login');
    Route::get('callback', [FaceBookController::class, 'callbackFromFacebook'])->name('callback');
});

// =================================================================== GuiderController ===================================================================
Route::get('guider-list', [GuiderController::class, 'index'])->name('Guider_index');
Route::get('guider-job-portal', [GuiderController::class, 'job_portal'])->name('Guider_job_portal');
Route::get('guider-profile', [GuiderController::class, 'guider_profile'])->name('Guider_profile');
Route::post('update-guider-profile', [GuiderController::class, 'update_guider_profile'])->name('Guider_update_profile');
// =================================================================== GuiderController ===================================================================


// =================================================================== GuiderMembershipController ===================================================================
Route::get('guider-membership-plan', [GuiderMembershipController::class, 'membership_plan'])->name('Guider_membership_plan');
Route::get('guider-alternate-membership-plan', [GuiderMembershipController::class, 'alternate_membership_plan'])->name('Guider_alternate_membership_plan');
Route::get('guider-membership-subscription/{membership?}', [GuiderMembershipController::class, 'membership_subscription'])->name('Guider_membership_subscription');
// =================================================================== GuiderMembershipController ===================================================================


// =================================================================== GuiderPackageController ===================================================================
Route::get('guider-packages', [GuiderPackageController::class, 'guider_packages'])->name('Guider_packages');
Route::get('guider-add-package', [GuiderPackageController::class, 'add_package'])->name('Guider_add_package');
Route::post('add-edit-package/{package?}', [GuiderPackageController::class, 'add_edit_package'])->name('Guider_add_edit_package');
Route::get('guider-edit-package/{id?}', [GuiderPackageController::class, 'edit_package'])->name('Guider_edit_package');
Route::get('guider-delete-package/{package?}', [GuiderPackageController::class, 'delete_package'])->name('Guider_delete_package');
// =================================================================== GuiderPackageController ===================================================================

/*--------------------------------------- GUIDER ROUTES ------------------------------ END ---------------- */




/*---------------------------------------User-Routes---------------------------------------------- */

// =================================================================== VacationerPackageController ===================================================================
Route::post('/search-packages', [VacationerPackageController::class, 'search_packages'])->name('Vacationer_search_packages');
Route::get('/package-detail/{id?}', [VacationerPackageController::class, 'package_detail'])->name('Vacationer_package_detail');
Route::get('/country-for-vacation', [VacationerPackageController::class, 'search_vacation_country'])->name('Vacationer_search_country');
//STRIPE
Route::get('vacationer-stripe-form/{package?}', [VacationerPackageController::class, 'stripe_form'])->name('Vacationer_stripe_form');
Route::post('/package-payee', [VacationerPackageController::class, 'event_stripe'])->name('package_stripe_post');


// =================================================================== VacationerPackageController ===================================================================

Route::get('/', [UIController::class, 'index'])->name('UI_index');
Route::get('/for-guide', [UIController::class, 'for_guide'])->name('UI_for_guide');
Route::get('/articles', [UIController::class, 'articles'])->name('UI_articles');
Route::get('/faq', [UIController::class, 'faq'])->name('UI_faq');
Route::get('/service-provider', [UIController::class, 'service_provider'])->name('UI_service_provider');
Route::get('/vacationer', [UIController::class, 'vacationer'])->name('UI_vacationer');

Route::get('/sign-up', [UIController::class, 'sign_up'])->name('UI_sign_up');
Route::post('/sign-up', [UIController::class, 'create_account'])->name('UI_create_account');
Route::get('/login', [UIController::class, 'login'])->name('UI_login');
Route::post('/loggedin', [UIController::class, 'loggedin'])->name('UI_loggedin');
Route::get('/logout', [UIController::class, 'logout'])->name('UI_logout');

Route::get('/user-verified/{id?}', [UIController::class, 'user_verified'])->name('user_verified');
Route::get('/plan-journey', [UIController::class, 'plan_journey'])->name('UI_plan_journey');
Route::post('/contact-us', [UIController::class, 'contact_us'])->name('UI_contact_us');


Route::get('/personal_concierge_service', [UIController::class, 'personal_concierge_service'])->name('UI_personal_concierge_service');
Route::get('/personal_concierge_service2', [UIController::class, 'personal_concierge_service2'])->name('UI_personal_concierge_service2');


/*---------------------------------------Admin-Routes---------------------------------------------- */
/**Auth Routes */
    Route::get('/admin-login', [AdminAuthController::class, 'login'])->name('admin_login');
    Route::post('/admin/login-data', [AdminAuthController::class, 'login_data'])->name('login_data_page');
    Route::get('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin_logout');

/**Admin Auth Middleware Starts */
Route::group(['middleware'=>['protectedPage']], function(){

    /**Dashboard Routes */
        Route::get('/admin/dashboard', [AdminBannerController::class, 'dashboard'])->name('admin_dashboard');

    /**Profile Routes */
        Route::get('/admin/profile', [AdminAuthController::class, 'admin_profile'])->name('admin_profile');
        Route::post('/admin/profile-update/{user?}', [AdminAuthController::class, 'admin_profile_update'])->name('admin_profile_update');
        Route::post('/admin/profile-pass-update/{user?}', [AdminAuthController::class, 'admin_password_update'])->name('admin_password_update');

    /**Banner Routes */
        Route::get('/admin/banner-list', [AdminBannerController::class, 'banner'])->name('admin_banners');
        Route::get('/admin/banner-add', [AdminBannerController::class, 'banner_add'])->name('admin_banners_add');
        Route::get('/admin/banner-edit/{id?}', [AdminBannerController::class, 'banner_edit'])->name('admin_banners_edit');
        Route::get('/admin/banner-delete/{banner?}', [AdminBannerController::class, 'banner_delete'])->name('admin_banners_delete');
        Route::post('/admin/banner-add-edit/{banner?}', [AdminBannerController::class, 'banner_add_edit_data'])->name('admin_banners_add_edit');

    /**Blogs Routes */
        Route::get('/admin/blog-list', [AdminBlogsController::class, 'blog_list'])->name('admin_blogs');
        Route::get('/admin/blog-add', [AdminBlogsController::class, 'blog_add'])->name('admin_blogs_add');
        Route::get('/admin/blog-edit/{id?}', [AdminBlogsController::class, 'blog_edit'])->name('admin_blogs_edit');
        Route::get('/admin/blog-delete/{blog?}', [AdminBlogsController::class, 'blog_delete'])->name('admin_blogs_delete');
        Route::post('/admin/blog-add-edit/{blog?}', [AdminBlogsController::class, 'blog_add_edit_data'])->name('admin_blogs_add_edit');

    /**Testimonials Routes */
        Route::get('/admin/testimonial-list', [AdminTestimonialsController::class, 'testimonial_list'])->name('admin_testimonials');
        Route::get('/admin/testimonial-add', [AdminTestimonialsController::class, 'testimonial_add'])->name('admin_testimonials_add');
        Route::get('/admin/testimonial-edit/{id?}', [AdminTestimonialsController::class, 'testimonial_edit'])->name('admin_testimonials_edit');
        Route::get('/admin/testimonial-delete/{testimonial?}', [AdminTestimonialsController::class, 'testimonial_delete'])->name('admin_testimonials_delete');
        Route::post('/admin/testimonial-add-edit/{testimonial?}', [AdminTestimonialsController::class, 'testimonial_add_edit_data'])->name('admin_testimonials_add_edit');

    /**Services Routes */
        Route::get('/admin/service-list', [AdminServicesController::class, 'service_list'])->name('admin_services');
        Route::get('/admin/service-add', [AdminServicesController::class, 'service_add'])->name('admin_services_add');
        Route::get('/admin/service-edit/{id?}', [AdminServicesController::class, 'service_edit'])->name('admin_services_edit');
        Route::get('/admin/service-delete/{service?}', [AdminServicesController::class, 'service_delete'])->name('admin_services_delete');
        Route::post('/admin/service-add-edit/{service?}', [AdminServicesController::class, 'service_add_edit_data'])->name('admin_services_add_edit');

    /**User Routes*/
        Route::get('/admin/user-list', [AdminAuthController::class, 'user_list'])->name('admin_users');
        Route::get('/admin/user-add', [AdminAuthController::class, 'user_add'])->name('admin_users_add');
        Route::get('/admin/user-edit/{id?}', [AdminAuthController::class, 'user_edit'])->name('admin_users_edit');
        Route::get('/admin/user-delete/{user?}', [AdminAuthController::class, 'user_delete'])->name('admin_users_delete');
        Route::post('/admin/user-add-edit/{user?}', [AdminAuthController::class, 'user_add_edit_data'])->name('admin_users_add_edit');

    /**Product Detail Routes*/
        /**Categories Routes */
            Route::get('/admin/categories-list', [AdminProductDetailsController::class, 'categories_list'])->name('admin_categories');
            Route::get('/admin/categories-add', [AdminProductDetailsController::class, 'categories_add'])->name('admin_categories_add');
            Route::get('/admin/categories-edit/{id?}', [AdminProductDetailsController::class, 'categories_edit'])->name('admin_categories_edit');
            Route::get('/admin/categories-delete/{categories?}', [AdminProductDetailsController::class, 'categories_delete'])->name('admin_categories_delete');
            Route::post('/admin/categories-add-edit/{categories?}', [AdminProductDetailsController::class, 'categories_add_edit_data'])->name('admin_categories_add_edit');

        /**Sub-Categories Routes */
            Route::get('/admin/sub-categories-list', [AdminProductDetailsController::class, 'sub_categories_list'])->name('admin_sub_categories');
            Route::get('/admin/sub-categories-add', [AdminProductDetailsController::class, 'sub_categories_add'])->name('admin_sub_categories_add');
            Route::get('/admin/sub-categories-edit/{id?}', [AdminProductDetailsController::class, 'sub_categories_edit'])->name('admin_sub_categories_edit');
            Route::get('/admin/sub-categories-delete/{sub_categories?}', [AdminProductDetailsController::class, 'sub_categories_delete'])->name('admin_sub_categories_delete');
            Route::post('/admin/sub-categories-add-edit/{sub_categories?}', [AdminProductDetailsController::class, 'sub_categories_add_edit_data'])->name('admin_sub_categories_add_edit');
        /**Products Routes */
            Route::get('/admin/products-list', [AdminProductDetailsController::class, 'products_list'])->name('admin_products');
            Route::get('/admin/products-add', [AdminProductDetailsController::class, 'products_add'])->name('admin_products_add');
            Route::get('/admin/products-edit/{id?}', [AdminProductDetailsController::class, 'products_edit'])->name('admin_products_edit');
            Route::get('/admin/products-delete/{products?}', [AdminProductDetailsController::class, 'products_delete'])->name('admin_products_delete');
            Route::post('/admin/products-add-edit/{products?}', [AdminProductDetailsController::class, 'products_add_edit_data'])->name('admin_products_add_edit');
});
/**Admin Auth Middleware Ends */
