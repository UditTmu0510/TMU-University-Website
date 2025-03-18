<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TmuController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\NewsFrontController;
use App\Http\Controllers\Backend\BlogsController;
use App\Http\Controllers\Backend\ProgrammesController;
use App\Http\Controllers\Backend\SyllabusController;
use App\Http\Controllers\Backend\TestimonialsController;
use App\Http\Controllers\Backend\RecruitersController;
use App\Http\Controllers\Backend\FaqsController;
use App\Http\Controllers\Backend\MetaController;
use App\Http\Controllers\Backend\DepartmentsController;
use App\Http\Controllers\Backend\DesignationsController;
use App\Http\Controllers\Backend\EmployeesController;
use App\Http\Controllers\Backend\JobApplicationController;
use App\Http\Controllers\Backend\NaacCriterionController;
use App\Http\Controllers\Backend\NaacKeyIndicatorController;
use App\Http\Controllers\Backend\NaacMetricController;
use App\Http\Controllers\Backend\NaacPdfsController;
use App\Http\Controllers\Backend\DepartmentDesignationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Backend\CtldController;
use App\Http\Controllers\AgricultureController;
use App\Http\Controllers\CcsitController;
use App\Http\Controllers\DentalController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\EngineeringController;
use App\Http\Controllers\FineartsController;
use App\Http\Controllers\LawController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\MedicalController;
use App\Http\Controllers\NursingController;
use App\Http\Controllers\ParamedicalController;
use App\Http\Controllers\PharmacyController;
use App\Http\Controllers\PhysicaleducationController;
use App\Http\Controllers\PhysiotherapyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\JainStudiesController;
use App\Http\Controllers\JobformController;
use App\Http\Controllers\TeachersfeedbackController;
use App\Http\Controllers\AlumnifeedbackController;
use App\Http\Controllers\EmployerFeedbackController;
use App\Http\Controllers\ExpertFeedbackController;
use App\Http\Controllers\JobOpeningController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\NavbarJsonController;
use App\Http\Controllers\ManuscriptFormController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\GitWebhookController;
use App\Http\Controllers\AebesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// Route to connect with github and pull code from there
Route::post('/git-webhook', [GitWebhookController::class, 'handle']);

// Route to fetch navbar data for outside json(GET request)
Route::post('/navbar-items', [NavbarJsonController::class, 'getNavbarItems']);
// Route to update navbar data (POST request) - Accepts modified JSON data
Route::post('/navbar-items/update', [NavbarJsonController::class, 'update']);

// Route to fetch Inner Json for navbar 
Route::post('/university-inner-navbar', [NavbarJsonController::class, 'getNavbarInnerItems']);

// Route to update the Inner Json for navbar 
Route::post('/university-inner-navbar/update', [NavbarJsonController::class, 'updateInner']);


// Route to fetch the University admin panel page
Route::get('/navbar-admin/{college}', function ($college) {
    // Pass the college name to the view
    return view('/university/admin/navbar_admin', compact('college'));
});

Route::get('centre-of-jain-studies', [JainStudiesController::class, 'jain_studies_home'])->name('jain.studies.home');

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    return 'Application cache cleared';
});

Route::get('/clear-config', function () {
    Artisan::call('config:clear');
    return 'Configuration cache cleared';
});

Route::get('/clear-route', function () {
    Artisan::call('route:clear');
    return 'Route cache cleared';
});

Route::get('/clear-view', function () {
    Artisan::call('view:clear');
    return 'View cache cleared';
});

Route::get('/clear-event', function () {
    Artisan::call('event:clear');
    return 'Event cache cleared';
});


Route::get('/department-of-physiotherapy/guest-lecture', [PhysiotherapyController::class, 'physiotherapy_guest_lecture'])->name('physiotherapy.guest.lecture');
Route::get('/medical-college-and-research-centre/guest-lecture', [MedicalController::class, 'medical_guest_lecture'])->name('medical.guest.lecture');
// Route::get('college-of-pharmacy/guest-lecture', [PharmacyController::class, 'pharmacy_guest_lecture'])->name('pharmacy.guest.lecture');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');



Route::get('/', [TmuController::class, 'index'])->name('tmuhome');
Route::post('/programmes/fetch-programs', [TmuController::class, 'fetch_programmes'])->name('fetch_programme_by_college_id');
Route::post('/programmes/fetch-programs-bylevel', [TmuController::class, 'fetch_programmes_by_level'])->name('fetch_programmes_by_level');
Route::get('/filter-news', [NewsController::class, 'filterNews'])->name('filter-news');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/filter-news', [NewsController::class, 'filterNews'])->name('filter-news');
Route::get('news/{slug}', [NewsController::class, 'news_info']);
Route::get('programme/{slug}', [TmuController::class, 'programme']);
Route::get('/news', [NewsController::class, 'all_news'])->name('all_news');
Route::post('/news', [NewsController::class, 'all_news'])->name('all_news.post');
Route::get('/blog/all', [BlogsController::class, 'blogs_active'])->name('blogs.active');
Route::get('/blog/{slug}', [BlogsController::class, 'blog_info'])->name('blog_info');;
Route::get('/blog/category/{category}', [BlogsController::class, 'blogs_Category'])->name('blogs.category');
Route::get('/blog', [BlogsController::class, 'all_blogs'])->name('all_blogs');
Route::post('/blog', [BlogsController::class, 'all_blogs'])->name('all_blogs.post');
Route::post('/blog/{id}/comments', [BlogsController::class, 'submitComment'])->name('blog.comments');
require __DIR__ . '/auth.php';
Route::middleware(['auth', 'roles:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile-update', [AdminController::class, 'AdminProfileUpdate'])->name('admin.profile.store');
    Route::post('/admin/change-password', [AdminController::class, 'AdminChangePassword'])->name('admin.change_password');
    Route::controller(AdminController::class)->group(function () {
        Route::get('/all/admin', 'AllAdmin')->name('all.admin');
        Route::get('/add/admin', 'AddAdmin')->name('add.admin');
        Route::post('/store/admin', 'StoreAdmin')->name('store.admin');
        Route::get('/edit/admin/{id}', 'EditAdmin')->name('edit.admin');
        Route::get('/delete/admin/{id}', 'DeleteAdmin')->name('delete.admin');
        Route::post('/update/admin/{id}', 'UpdateAdmin')->name('update.admin');
    });
    Route::controller(RoleController::class)->group(function () {
        Route::get('/all/permission', 'AllPermission')->name('all.permission')->middleware('permission:View Permissions');
        Route::get('/add/permission', 'AddPermission')->name('add.permission')->middleware('permission:Add Permission');
        Route::post('/store/permission', 'StorePermission')->name('store.permission')->middleware('permission:Edit Permission');
        Route::get('/edit/permission/{id}', 'EditPermission')->name('edit.permission')->middleware('permission:Edit Permission');
        Route::get('/edit/role/{id}', 'EditRole')->name('edit.role')->middleware('permission:Edit Role');
        Route::post('/update/permission', 'UpdatePermission')->name('update.permission')->middleware('permission:Edit Permission');
        Route::post('/update/role', 'UpdateRole')->name('update.role')->middleware('permission:Edit Role');
        Route::get('/delete/permission/{id}', 'DeletePermission')->name('delete.permission')->middleware('permission:Delete Permission');
        Route::get('/delete/role/{id}', 'DeleteRole')->name('delete.role')->middleware('permission:Delete Role');
        Route::get('/import/permission', 'ImportPermission')->name('import.permission')->middleware('permission:Import Permissions');
        Route::get('/export/permission', 'ExportPermission')->name('export.permission')->middleware('permission:View Permissions');
        Route::post('/permission/import', 'PermissionImport')->name('permission.import')->middleware('permission:Import Permissions');
        Route::get('/all/roles', 'AllRoles')->name('all.roles')->middleware('permission:View Roles');
        Route::get('/add/roles', 'AddRoles')->name('add.roles')->middleware('permission:Add Role');
        Route::post('/store/role', 'StoreRole')->name('store.role')->middleware('permission:Edit Role');
        Route::get('/add/roles/permission', 'AddRolesPermission')->name('add.roles.permission')->middleware('permission:Add Roles & Permissions');
        Route::post('/role/permission/store', 'RolePermissionsStore')->name('role.permission.store');
        Route::get('/all/roles/permission', 'AllRolesPermission')->name('all.roles.permission');
        Route::get('/admin/edit/roles/{id}', 'AdminEditRoles')->name('admin.edit.roles');
        Route::post('/admin/roles/update/', 'AdminUpdateRoles')->name('admin.roles.update');
        Route::get('/admin/roles/delete/{id}', 'AdminDeleteRoles')->name('admin.roles.delete');
    });

    // All News Category Routes Start
    Route::controller(NewsController::class)->group(function () {
        Route::get('/news/category/', 'AllNewsCategory')->name('news.category');
        Route::post('/add/news/category/', 'AddNewsCategory')->name('add.news_category');
        Route::get('/edit/news/category/{id}', 'EditNewsCategory')->name('edit.news_category');
        Route::post('/update/news/category/', 'UpdateNewsCategory')->name('update.news_category');
        Route::get('/delete/news/category/{id}', 'DeleteNewsCategory')->name('delete.news_category');
    });

    // All News Category Routes Ends


    // All News Post Routes Start

    Route::controller(NewsController::class)->group(function () {
        Route::get('/view/news/all', 'AllNews')->name('all.news');
        Route::get('/add/news/post', 'AddNewsPost')->name('add.news.post');
        Route::post('/store/news/post', 'StoreNewsPost')->name('store.news.post');
        Route::get('/edit/news/{id}', 'EditNewsPost')->name('edit.news.post');
        Route::post('update/news/post', 'UpdateNewsPost')->name('update.news.post');
        Route::get('/delete/news/post/{id}', 'DeleteNewsPost')->name('delete.news.post');
    });
    // All  News Post ROutes End Here

    // Blogs Category Routes Start Here

    // All News Category Routes Start
    Route::controller(NewsController::class)->group(function () {
        Route::get('/news/category/', 'AllNewsCategory')->name('news.category');
        Route::get('/add/news/category/', 'AddNewsCategory')->name('add.news_category');
        Route::get('/edit/news/category/{id}', 'EditNewsCategory')->name('edit.news_category');
        Route::post('/update/news/category/', 'UpdateNewsCategory')->name('update.news_category');
        Route::get('/delete/news/category/{id}', 'DeleteNewsCategory')->name('delete.news_category');
    });

    // All News Category Routes Ends



    // Blog Category Route Starts Here 
    Route::controller(BlogsController::class)->group(function () {

        Route::get('/view/blogs/all', 'AllBlogs')->name('all.blogs')->middleware('permission:View All Blogs');
        Route::get('/add/blog', 'AddBlog')->name('add.blog')->middleware('permission:Add Blog');
        Route::post('/store/blog', 'StoreBlog')->name('store.blog')->middleware('permission:Store Blog');
        Route::get('/edit/blog/{id}', 'EditBlogsPost')->name('edit.blog')->middleware('permission:Edit Blog');
        Route::post('/update/blog/', 'UpdateBlogPost')->name('update.blog')->middleware('permission:Update Blog');
        Route::get('/delete/blog/{id}', 'DeleteBlogsPost')->name('delete.blog')->middleware('permission:Delete Blog');

        Route::get('/blogs/category/', 'AllBlogsCategory')->name('blogs.category')->middleware('permission:All Blog Category');
        Route::post('/add/blogs/category/', 'AddBlogsCategory')->name('add.blogs_category')->middleware('permission:Add Blog Category');
        Route::get('/edit/blogs/category/{id}', 'EditBlogsCategory')->name('edit.blogs_category')->middleware('permission:Edit Blog Category');
        Route::post('/update/blogs/category/', 'UpdateBlogsCategory')->name('update.blogs_category')->middleware('permission:Update Blog Category');
        Route::get('/delete/blogs/category/{id}', 'DeleteBlogsCategory')->name('delete.blogs_category')->middleware('permission:Delete Blog Category');
    });
    //Blog Category Routes Ends Here



    Route::controller(ProgrammesController::class)->group(function () {
        Route::get('/programmes/all/', 'AllProgrammes')->name('all.programmes');
        Route::match(['get', 'post'], '/add/programme/', 'AddProgramme')->name('add.programme');
        Route::match(['get', 'post'], '/programme/{id}/edit', 'editProgramme')->name('programme.edit');
        Route::post('/getmasterprogramme/', 'getMasterProgramme')->name('getmasterprogramme');
        Route::get('/delete/programme/{id}', 'DeleteProgramme')->name('delete.programme');
    });



    Route::controller(TestimonialsController::class)->group(function () {
        Route::get('/testimonials/all/', 'AllTestimonials')->name('all.testimonials')->middleware('permission:View All Testimonials');
        Route::match(['get', 'post'], '/add/testimonial/', 'AddTestimonial')->name('add.testimonial')->middleware('permission:Add Testimonial');
        Route::match(['get', 'post'], '/testimonial/{id}/edit', 'editTestimonial')->name('testimonial.edit');
        Route::get('/delete/testimonial/{id}', 'DeleteTestimonial')->name('delete.testimonial');
    });

    Route::controller(RecruitersController::class)->group(function () {
        Route::get('/recruiters/all/', 'AllRecruiters')->name('all.recruiters')->middleware('permission:View All Recruiters');
        Route::match(['get', 'post'], '/add/recruiter/', 'AddRecruiter')->name('add.recruiter')->middleware('permission:Add Recruiter');
        Route::match(['get', 'post'], '/recruiter/{id}/edit', 'editRecruiter')->name('recruiter.edit')->middleware('permission:Edit Recruiter');
        Route::get('/delete/recruiter/{id}', 'DeleteRecruiter')->name('delete.recruiter')->middleware('permission:Delete Recruiter');
    });

    Route::controller(MetaController::class)->group(function () {
        Route::get('/metas/all/', 'AllMetas')->name('all.metas')->middleware('permission:View Metas');
        Route::match(['get', 'post'], '/add/meta/', 'AddMeta')->name('add.meta')->middleware('permission:Add Meta');
        Route::match(['get', 'post'], '/meta/{id}/edit', 'EditMeta')->name('meta.edit')->middleware('permission:Edit Meta');
        // Route::post('/getmasterprogramme/','getMasterProgramme')->name('getmasterprogramme');
        Route::get('/delete/meta/{id}', 'DeleteMeta')->name('delete.meta')->middleware('permission:Delete Meta');
    });

    Route::controller(SyllabusController::class)->group(function () {
        Route::get('/syllabus/all/', 'index')->name('all.syllabus')->middleware('permission:View All Syllabus');
        Route::match(['get', 'post'], '/add/syllabus/', 'store')->name('add.syllabus')->middleware('permission:Add Syllabus');
        Route::match(['get', 'post'], '/syllabus/{id}/edit', 'Update')->name('syllabus.edit')->middleware('permission:Edit Syllabus');
        // Route::post('/getmasterprogramme/','getMasterProgramme')->name('getmasterprogramme');
        Route::get('/delete/syllabus/{id}', 'destroy')->name('delete.syllabus')->middleware('permission:Delete Syllabus');
    });


    Route::controller(FaqsController::class)->group(function () {
        Route::get('/faqs/all/', 'AllFaqs')->name('all.faqs')->middleware('permission:View Faqs');
        Route::match(['get', 'post'], '/add/faq/', 'AddFaq')->name('add.faq')->middleware('permission:Add Faq');
        Route::match(['get', 'post'], '/faq/{id}/edit', 'EditFaq')->name('faq.edit')->middleware('permission:Edit Faq');
        // Route::post('/getmasterprogramme/','getMasterProgramme')->name('getmasterprogramme');
        Route::get('/delete/faq/{id}', 'DeleteFaq')->name('delete.faq')->middleware('permission:Delete Faq');
    });

    // All News Post Routes End
    Route::controller(DepartmentsController::class)->group(function () {
        Route::get('/departments/all/', 'index')->name('all.departments')->middleware('permission:View All Departments');
        Route::match(['get', 'post'], '/add/department/', 'store')->name('add.department')->middleware('permission:Add Department');
        Route::match(['get', 'post'], '/department/{id}/edit', 'update')->name('department.edit')->middleware('permission:Edit Department');
        // Route::post('/getmasterprogramme/','getMasterProgramme')->name('getmasterprogramme');
        Route::get('/delete/department/{id}', 'destroy')->name('delete.department')->middleware('permission:Delete Department');
    });

    Route::controller(DesignationsController::class)->group(function () {
        Route::get('/designations/all/', 'index')->name('all.designations')->middleware('permission:View All Designations');
        Route::match(['get', 'post'], '/add/designation/', 'store')->name('add.designation')->middleware('permission:Add Designation');
        Route::match(['get', 'post'], '/designation/{id}/edit', 'update')->name('designation.edit')->middleware('permission:Edit Designation');
        // Route::post('/getmasterprogramme/','getMasterProgramme')->name('getmasterprogramme');
        Route::get('/delete/designation/{id}', 'destroy')->name('delete.designation')->middleware('permission:Delete Designation');
    });
    Route::controller(EmployeesController::class)->group(function () {
        Route::post('/getemployeedepartment/', 'getEmployeeDepartment')->name('getemployeedepartment');
        Route::match(['get', 'post'], '/add/employee/', 'store')->name('add.employee')->middleware('permission:Add Employee');
        Route::get('/employees/all/', 'index')->name('all.employees')->middleware('permission:View All Employees');
        Route::match(['get', 'post'], '/employee/{id}/edit', 'update')->name('employee.edit');
        Route::get('/delete/employee/{id}', 'destroy')->name('delete.employee')->middleware('permission:Delete Employee');
        Route::post('/getemployeedesignationhrform/', 'getEmployeeDesignationhrform')->name('getemployeedesignationhrform');
    });

    Route::controller(DepartmentDesignationController::class)->group(function () {

        Route::match(['get', 'post'], '/add/department/designation', 'store')->name('add.departmentdesignation')->middleware('permission:Add Department Designation');
        Route::get('/departmentdesignation/all/', 'index')->name('all.departments.designations')->middleware('permission:View Departments Designations');
        Route::match(['get', 'post'], '/department/designation/{id}/edit', 'update')->name('departmentdesignation.edit')->middleware('permission:Edit Department Designation');
        Route::get('/delete/department/designation/{id}', 'destroy')->name('delete.departmentdesignation')->middleware('permission:Delete Department Designation');
    });

    Route::controller(JobApplicationController::class)->group(function () {

        Route::get('/getjobapplications/all/', 'index')->name('all.jobapplications')->middleware('permission:View All Jobs');
        Route::match(['get', 'post'], '/jobapplication/data/{id}/generate-pdf', 'generate_pdf')->name('generate.jobapplication.pdf')->middleware('permission:Generate Job Application Pdf');
    });

    Route::controller(NaacCriterionController::class)->group(function () {
        Route::match(['get', 'post'], '/add/naac-criterion', 'store')->name('add.naac_criterion')->middleware('permission:Add NAAC Criterion');
        Route::get('/naac-criterions/all/', 'index')->name('all_naac_criterions')->middleware('permission:View All NAAC Criterions');
        Route::match(['get', 'post'], '/naac-criterion/{id}/edit', 'update')->name('naac_criterion.edit')->middleware('permission:Edit NAAC Criterion');
        Route::get('/delete/naac-criterion/{id}', 'destroy')->name('delete.naac_criterion')->middleware('permission:Delete NAAC Criterion');
    });


    Route::controller(NaacKeyIndicatorController::class)->group(function () {
        Route::match(['get', 'post'], '/add/naac-keyindicator', 'store')->name('add.naac_keyindicator')->middleware('permission:Add NAAC KeyIndicator');
        Route::get('/naac-keyindicators/all/', 'index')->name('all_naac_keyindicator')->middleware('permission:View All NAAC KeyIndicators');
        Route::match(['get', 'post'], '/naac-keyindicator/{id}/edit', 'update')->name('naac_keyindicator.edit')->middleware('permission:Edit NAAC KeyIndicator');
        Route::get('/delete/naac-keyindicator/{id}', 'destroy')->name('delete.naac_keyindicator')->middleware('permission:Delete NAAC KeyIndicator');
    });

    Route::controller(NaacMetricController::class)->group(function () {
        Route::match(['get', 'post'], '/add/naac-metric', 'store')->name('add.naac_metric')->middleware('permission:Add NAAC Metric');
        Route::get('/naac-metrics/all/', 'index')->name('all_naac_metric')->middleware('permission:View All NAAC Metrics');
        Route::match(['get', 'post'], '/naac-metric/{id}/edit', 'update')->name('naac_metric.edit')->middleware('permission:Edit NAAC Metric');
        Route::get('/delete/naac-mertic/{id}', 'destroy')->name('delete.naac_metric')->middleware('permission:Delete NAAC Metric');
        Route::post('/getkeyindicator/', 'getkeyIndicator')->name('getkeyindicator');
    });



    Route::controller(NaacPdfsController::class)->group(function () {
        Route::match(['get', 'post'], '/add/naac-pdf', 'store')->name('add.naac_pdf')->middleware('permission:Add NAAC PDF');
        Route::get('/naac-pdfs/all/', 'index')->name('all_naac_pdfs')->middleware('permission:View All NAAC PDFS');
        Route::match(['get', 'post'], '/naac-pdf/{id}/edit', 'update')->name('naac_pdf.edit')->middleware('permission:Edit NAAC PDF');
        Route::get('/delete/naac-pdf/{id}', 'destroy')->name('delete.naac_pdf')->middleware('permission:Delete NAAC PDF');
        Route::post('/getkeyindicatorpdf/', 'getkeyindicatorPdf')->name('getkeyindicatorpdf');
        Route::post('/getmetricspdf/', 'getmetricsPdf')->name('getmetricspdf');
        Route::get('/naac-pdfs/search', 'search')->name('naac_pdfs.search');
        Route::get('/export-naac-pdfs', 'export')->name('export.naac-pdfs');
    });
});
// Instructor  Group Middleware Starts
Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');
Route::middleware(['auth', 'roles:instructor'])->group(function () {
    Route::get('/instructor/dashboard', [InstructorController::class, 'InstructorDashboard'])->name('instructor.dashboard');
});

Route::post('/search/', [App\Http\Controllers\MetasController::class, 'search'])->name('search');
Route::post('/getacademicyears', [App\Http\Controllers\Backend\SyllabusController::class, 'getAcademicYears'])->name('getacademicyears');
Route::post('/getsyllabus', [App\Http\Controllers\Backend\SyllabusController::class, 'getSyllabuses'])->name('getsyllabuses');
Route::post('/search_blog_slug', [BlogsController::class, 'searchBlogSlug'])->name('search_blog_slug');
Route::post('/search_meta_slug', [MetaController::class, 'CheckMetaUrl'])->name('search_meta_slug');

//Route::get('/search/{query}',[App\Http\Controllers\SearchController::class,'autocomplete']);
// Instructor  Group Middleware Ends



// Start of the Sarvagya Routes 

Route::get('tmu/blog', [TmuController::class, 'blog'])->name('blog');


// About TMU


Route::get('/tmu/about-us', [TmuController::class, 'about_us'])->name('about.us');
Route::get('/tmu/vision-mission', [TmuController::class, 'vision_and_mission'])->name('vision.mission');
Route::get('/tmu/statutory-approval', [TmuController::class, 'statutory_approvals'])->name('statutory.approvals');
Route::get('/tmu/awards-recognition', [TmuController::class, 'awards_and_recognition'])->name('awards.and.recognition');
Route::get('/tmu/university-governance', [TmuController::class, 'university_governance'])->name('university.governance');
Route::get('/tmu/university-organogram', [TmuController::class, 'university_organogram'])->name('university.organogram');
Route::get('/tmu/university-administration', [TmuController::class, 'university_administration'])->name('university.administration');
Route::get('/tmu/chancellor', [TmuController::class, 'chancellor_desk'])->name('chancellor.desk');
Route::get('/tmu/founder-vicechancellor', [TmuController::class, 'founder_vice_chancellor_desk'])->name('founder.vice.chancellor.desk');
Route::get('/tmu/vicechancellor', [TmuController::class, 'vice_chancellor_desk'])->name('vice.chancellor.desk');
Route::get('/tmu/career', [TmuController::class, 'tmu_careers'])->name('tmu.careers');
Route::get('/tmu/career-form', [JobformController::class, 'careers_form'])->name('job.form');
Route::POST('/submit-job-form', [JobformController::class, 'store'])->name('submitJobForm');

Route::post('/get-departments', [JobformController::class, 'getDepartments'])->name('get.departments');
Route::post('/get-designations', [JobformController::class, 'getDesignations'])->name('get.designations');
Route::get('/get-faculties', [JobformController::class, 'getFaculties'])->name('get.faculties');



// IIC

Route::get('/innovation-startup', [TmuController::class, 'iic_home'])->name('iic.home');
Route::get('/innovation-startup/about-cell', [TmuController::class, 'iic_about_cell'])->name('iic.cell.about');
Route::get('/tmu/why-tmu', [TmuController::class, 'why_choose_tmu'])->name('tmu.why_tmu');
Route::get('/virtual-tour', [TmuController::class, 'virtual_tour'])->name('tmu.virtual_tour');
Route::get('/innovation-startup/policy', [TmuController::class, 'iic_policy'])->name('iic.policy');
Route::get('innovation-startup/iic-research-policy', [TmuController::class, 'iic_research_policy'])->name('iic.research.policy');
Route::get('/innovation-startup/committee', [TmuController::class, 'iic_committee'])->name('iic.committee');
Route::get('/innovation-startup/iic-calendar', [TmuController::class, 'iic_activities_calendar'])->name('iic.activities.calendar');
Route::get('/innovation-startup/iic-establishment-certificate', [TmuController::class, 'iic_establishment_certificate'])->name('iic_establishment_certificate');
Route::get('/innovation-startup/iic-innovation-ambassador-training-series', [TmuController::class, 'iic_innovation_ambassador_training_series'])->name('iic.innovation.ambassador.training.series');
Route::get('/innovation-startup/innovation-startup-campaign-participation', [TmuController::class, 'iic_campaign_participation'])->name('iic.campaign.participation');
Route::get('/innovation-startup/achievements', [TmuController::class, 'iic_achievements'])->name('iic.achievements');
Route::get('/innovation-startup/iic-activities', [TmuController::class, 'iic_activities'])->name('iic.activities');
Route::get('/innovation-startup/successful-startup-story', [TmuController::class, 'iic_successful_startup_story'])->name('iic.successful.startup.story');
Route::get('/innovation-startup/contact-us', [TmuController::class, 'iic_contact'])->name('iic.contact');

// NSS

Route::get('/nss-about', [TmuController::class, 'nss_about'])->name('nss.about');
Route::get('/nss-aims-and-objective', [TmuController::class, 'nss_aims'])->name('nss.aims');
Route::get('/nss-log-and-badge', [TmuController::class, 'nss_badge'])->name('nss.badge');
Route::get('/nss-day-and-song', [TmuController::class, 'nss_day_and_song'])->name('nss.day.and.song');
Route::get('/nss-activities', [TmuController::class, 'nss_activities'])->name('nss.activities');
Route::get('/nss-volunteers', [TmuController::class, 'nss_volunteers'])->name('nss.volunteers');
Route::get('/nss-international-day', [TmuController::class, 'nss_internationalday'])->name('nss.internationalday');
Route::get('/nss-events', [TmuController::class, 'nss_events'])->name('nss.events');
Route::get('/nss-contactus', [TmuController::class, 'nss_contactus'])->name('nss.contactus');
Route::get('/nss-coordinator-desk', [TmuController::class, 'nss_coordinator'])->name('nss.coordinator');
Route::get('/nss-adopted-village', [TmuController::class, 'adopted_village'])->name('adopted.village');
Route::get('/nss-coordinators', [TmuController::class, 'nss_commitee'])->name('nss.commitee');

// NEP

Route::get('/tmu/nep-ordinance', [TmuController::class, 'nep_2020_university_ordinance'])->name('nep.2020.university.ordinance');
Route::get('/tmu/nep-SOP-for-OBE-Implementation', [TmuController::class, 'nep_obe_implementation'])->name('nep.obe.implementation');
Route::get('/tmu/nep-programmes', [TmuController::class, 'nep_2020_programmes_offered'])->name('nep.2020.programmes.offered');
Route::get('/tmu/nep-multidisciplinary-specializations', [TmuController::class, 'nep_multidisciplinary_specializations'])->name('nep.multidisciplinary.specializations');
Route::get('/tmu/nep-value-added-courses', [TmuController::class, 'nep_value_added_courses'])->name('nep.value.added.courses');
Route::get('/tmu/nep-ability-enhancement-courses', [TmuController::class, 'nep_ability_enhancement'])->name('nep.ability.enhancement');
Route::get('/tmu/nep-skill-enhancement-course', [TmuController::class, 'nep_skill_enhancement'])->name('nep.skill.enhancement');
Route::get('/tmu/nep-immplementation-committee', [TmuController::class, 'nep_implementation_committee'])->name('nep.implementation.committee');
// CTLD
Route::get('/tmu/centre-for-teaching-learning-and-development', [TmuController::class, 'ctld_home'])->name('ctld.home');
Route::get('/tmu/about-ctld', [TmuController::class, 'ctld_about'])->name('ctld.about');
Route::get('/tmu/benefits-of-ctld', [TmuController::class, 'ctld_benefits'])->name('ctld.benefits');
Route::get('/tmu/ctld-aims-and-objective', [TmuController::class, 'ctld_aims_and_objectives'])->name('ctld.aims.and.objectives');
Route::get('/tmu/ctld-director-desk', [TmuController::class, 'ctld_director_desk'])->name('ctld.director.desk');
Route::get('/tmu/ctld-our-team', [TmuController::class, 'ctld_team'])->name('ctld.team');
Route::get('/tmu/ctld-testimonial', [TmuController::class, 'ctld_students_testimonials'])->name('ctld.students.testimonials');
Route::get('/tmu/ctld-events', [CtldController::class, 'ctld_events'])->name('ctld.events');
Route::get('/tmu/ctld-magazine', [TmuController::class, 'ctld_magazine'])->name('ctld.magazine');

// IQAC
Route::get('/tmu/iqac-cell/iqac', [TmuController::class, 'iqac_about'])->name('iqac.about');
Route::get('/tmu/iqac-cell/quality-policy', [TmuController::class, 'iqac_quality_policy'])->name('iqac.quality.policy');
Route::get('/tmu/iqac-cell/composition', [TmuController::class, 'iqac_composition'])->name('iqac.composition');
Route::get('/tmu/iqac-cell/iqac-mom-atr', [TmuController::class, 'iqac_mom_and_action_taken_reports'])->name('iqac.mom.and.action.taken.reports');
Route::get('/tmu/iqac-cell/aqar-report', [TmuController::class, 'aqar_report'])->name('aqar.report');
Route::get('/tmu/iqac-cell/sss-report', [TmuController::class, 'sss_report'])->name('sss.report');
Route::get('/tmu/iqac-cell/annual-report', [TmuController::class, 'annual_report'])->name('annual.report');
Route::get('/tmu/iqac-cell/awards-achievement', [TmuController::class, 'iqac_awards'])->name('iqac.awards.achievement');
Route::get('/tmu/iqac-cell/strategic-plan', [TmuController::class, 'iqac_strategic_plan'])->name('iqac.strategic.plan');
Route::get('/tmu/iqac-cell/best-practices', [TmuController::class, 'iqac_best_practices'])->name('iqac.best.practices');
Route::get('/tmu/iqac-cell/university-academic-calendars', [TmuController::class, 'iqac_academic_calendar'])->name('iqac.academic.calendar');
Route::get('/tmu/iqac-cell/student-feedback', [TmuController::class, 'iqac_student_feedback'])->name('iqac.student.feedback');
Route::get('/tmu/policies-sops', [TmuController::class, 'iqac_policies_and_sops'])->name('iqac.policies.and.sops');
Route::get('/tmu/iqac-cell/contact-us', [TmuController::class, 'iqac_contact_us'])->name('iqac.contact.us');
Route::get('/tmu/iqac-cell/feedback-report', [TmuController::class, 'iqac_feedback_report'])->name('iqac.feedback.report');

Route::get('/tmu/iqac-cell/teachers-feedback-form', [TeachersfeedbackController::class, 'createTeachersFeedbackForm'])->name('teachers.feedback.form');
Route::post('/tmu/iqac-cell/submit-teachers-feedback-form', [TeachersfeedbackController::class, 'storeFeedback'])->name('store.teachers.Feedback');


Route::get('/tmu/iqac-cell/alumni-feedback-form', [AlumnifeedbackController::class, 'createAlumniFeedbackForm'])->name('alumni.feedback.form');
Route::POST('/tmu/iqac-cell/submit-alumni-feedback-form', [AlumnifeedbackController::class, 'storeFeedback'])->name('store.alumni.feedback.form');


Route::get('/tmu/iqac-cell/employer-feedback-form', [EmployerFeedbackController::class, 'createEmployerFeedbackForm'])->name('employer.feedback.form');
Route::POST('/tmu/iqac-cell/submit-employer-feedback-form', [EmployerFeedbackController::class, 'storeFeedback'])->name('store.employer.feedback.form');

Route::get('/tmu/iqac-cell/experts-feedback-form', [ExpertFeedbackController::class, 'createExpertFeedbackForm'])->name('expert.feedback.form');
Route::POST('/tmu/iqac-cell/submit-expert-feedback-form', [ExpertFeedbackController::class, 'storeFeedback'])->name('store.expert.feedback.form');


// NAAC
Route::get('/tmu/naac', [TmuController::class, 'naac_home'])->name('naac.home');


// NIRF
Route::get('/tmu/nirf', [TmuController::class, 'nirf_home'])->name('nirf.home');

// IQAC ERP
Route::get('/tmu/iqac-cell/erp', [TmuController::class, 'iqac_erp'])->name('iqac.erp');

// Institutional Values 
Route::get('/tmu/iqac-cell/institutional-values/gender-equity-initiatives', [TmuController::class, 'gender_equity_initiative'])->name('gender.equity.initiative');
Route::get('/tmu/iqac-cell/institutional-values/environmental-consciousness', [TmuController::class, 'environmental_consciousness_and_sustainability'])->name('environmental.consciousness.and.sustainability');
Route::get('/tmu/iqac-cell/institutional-values/waste-management-initiatives', [TmuController::class, 'waste_management_initiative'])->name('waste.management.initiative');
Route::get('/tmu/iqac-cell/institutional-values/water-conservation-initiatives', [TmuController::class, 'iqac_water_conservate_initiative'])->name('iqac.water.conservate.initiative');
Route::get('/tmu/iqac-cell/institutional-values/green-campus-initiatives', [TmuController::class, 'green_initiative'])->name('green.initiative');
Route::get('/tmu/iqac-cell/institutional-values/environment-energy-audits', [TmuController::class, 'environment_and_energy_audits'])->name('environment.and.energy.audits');
Route::get('/tmu/iqac-cell/institutional-values/pwd-facilities', [TmuController::class, 'pwd_facilities'])->name('pwd.facilities');
Route::get('/tmu/iqac-cell/institutional-values/inclusion-situatedness', [TmuController::class, 'inclusive_environmnet_activities'])->name('inclusive.environmnet.activities');
Route::get('/tmu/iqac-cell/institutional-values/human-professional-ethics', [TmuController::class, 'professional_ethics'])->name('professional.ethics');
Route::get('/tmu/iqac-cell/institutional-values/code-of-conduct', [TmuController::class, 'code_of_conduct'])->name('code.of.conduct');
Route::get('/tmu/iqac-cell/institutional-values/commemorative-days', [TmuController::class, 'commemorative_days'])->name('commemorative.days');

// QUICK_LINKS
Route::get('/tmu/disciplinary-rules', [TmuController::class, 'disciplinary_rules'])->name('disciplinary.rules');
Route::get('/tmu/industry-academic-alliances', [TmuController::class, 'industry_academic_alliances'])->name('industry.academic.alliances');
Route::get('/tmu/university-sport-calender', [TmuController::class, 'university_sports_calendar'])->name('university.sports.calendar');
Route::get('/tmu/university-academic-calender', [TmuController::class, 'university_academic_calendar'])->name('university.academic.calendar');
Route::get('/tmu/anti-ragging-committee', [TmuController::class, 'university_anti_ragging_committee'])->name('university.anti.ragging.committee');
Route::get('/tmu/faq', [TmuController::class, 'tmu_faqs'])->name('tmu.faqs');
Route::get('/tmu/admission-rules', [TmuController::class, 'admission_rules'])->name('admission.rules');
Route::get('/tmu/prominent-guests-comment', [TmuController::class, 'prominent_guests_comment'])->name('prominent.guests.comment');

Route::get('/tmu/disclaimer', [TmuController::class, 'tmu_disclaimer'])->name('tmu.disclaimer');
Route::get('/tmu/privacy-policy', [TmuController::class, 'tmu_privacy_policy'])->name('tmu.privacy.policy');

Route::get('/media-coverage', [TmuController::class, 'media_cover'])->name('tmu.media.cover');

Route::get('/tmu/convocation', [TmuController::class, 'tmu_convocation'])->name('tmu.convocation');


Route::get('/tmu/publication', [TmuController::class, 'tmu_publication'])->name('tmu.publication');
Route::get('/tmu/transport', [TmuController::class, 'tmu_transport'])->name('tmu.transport');
// Route::get('/tmu/infrastructure', [TmuController::class, 'infrastructure'])->name('infrastructure');

// Greviances
Route::get('/tmu/grievances-portal', [TmuController::class, 'greviances_about'])->name('greviances.about');
Route::get('/tmu/greviance-submit-suggestion', [TmuController::class, 'greviance_submit_suggestion'])->name('greviance.submit.suggestion');


// Footer links 
Route::get('/tmu/campus-view', [TmuController::class, 'campus_view'])->name('campus.view');
Route::get('/tmu/contact', [TmuController::class, 'contact'])->name('contact');
Route::get('/tmu/library', [TmuController::class, 'library'])->name('library');
Route::get('/tmu/hostel', [TmuController::class, 'hostel'])->name('tmu.hostel');
Route::get('/tmu/hospital', [TmuController::class, 'tmu_hospital'])->name('tmu.hospital');
Route::get('/tmu/how-to-apply', [TmuController::class, 'how_to_apply'])->name('how.to.apply');
Route::get('/tmu/application-form', [TmuController::class, 'application_form'])->name('application.form');
Route::get('/tmu/auditorium', [TmuController::class, 'auditorium'])->name('auditorium');
Route::get('/tmu/jinalaya', [TmuController::class, 'jinalaya'])->name('jinalaya');
Route::get('/tmu/sports', [TmuController::class, 'sports'])->name('sports');
Route::get('/tmu/yoga', [TmuController::class, 'yoga_and_meditation'])->name('yoga.and.meditation');
Route::get('/tmu/music', [TmuController::class, 'music_and_dance_room'])->name('music.and.dance.room');
Route::get('/tmu/banking-facility', [TmuController::class, 'banking_facility'])->name('banking.facility');
Route::get('/tmu/faculty-accomodation', [TmuController::class, 'faculty_accomodation'])->name('faculty.accomodation');
Route::get('/tmu/guest-house', [TmuController::class, 'guest_house'])->name('guest.house');
Route::get('/tmu/gym', [TmuController::class, 'gym'])->name('gym');
Route::get('/tmu/scholarship', [TmuController::class, 'university_scholarship'])->name('tmu.scholarship');
Route::get('/tmu/education-loan', [TmuController::class, 'university_education_loan'])->name('tmu.loan');

//Teaching Facilities
Route::get('/tmu/teaching-facility', [TmuController::class, 'teaching_facility'])->name('teaching.facility');
Route::get('/tmu/central-instrumental-facilities', [TmuController::class, 'central_instrument_facility'])->name('central.instrument.facility');
Route::get('/tmu/simulation-lab', [TmuController::class, 'simulation_lab'])->name('simulation.lab');
Route::get('/tmu/skill-lab', [TmuController::class, 'skill_lab'])->name('skill.lab');
Route::get('/tmu/media-laboratory-studio', [TmuController::class, 'media_laboratory_studio'])->name('media.laboratory.studio');
Route::get('/tmu/museum', [TmuController::class, 'museum'])->name('museum');
Route::get('/tmu/business-lab', [TmuController::class, 'business_lab'])->name('business.lab');
Route::get('/tmu/animal-house', [TmuController::class, 'animal_house'])->name('animal.house');
Route::get('/tmimt-college-of-management/eresources-studio-lab', [TmuController::class, 'eresources_studio_lab'])->name('eresources.studio.lab');
Route::get('/tmimt-college-of-management/business-lab', [TmuController::class, 'tmimt_business_lab'])->name('tmimt.business.lab');
Route::get('/tmu/dst-nanotechnology-lab', [TmuController::class, 'dst_nanotechnology_lab'])->name('dst.nanotechnology.lab');

//classroom
Route::get('/tmu/teaching-facility/class-room/medical', [TmuController::class, 'class_room_medical'])->name('class.room.medical');
Route::get('/tmu/teaching-facility/class-room/nursing', [TmuController::class, 'class_room_nursing'])->name('class.room.nursing');
Route::get('/tmu/teaching-facility/class-room/paramedical', [TmuController::class, 'class_room_paramedical'])->name('class.room.paramedical');
Route::get('/tmu/teaching-facility/class-room/physicaleducation', [TmuController::class, 'class_room_physicaleducation'])->name('class.room.physicaleducation');
Route::get('/tmu/teaching-facility/class-room/physiotherapy', [TmuController::class, 'class_room_physiotherapy'])->name('class.room.physiotherapy');
Route::get('/tmu/teaching-facility/class-room/pharmacy', [TmuController::class, 'class_room_pharmacy'])->name('class.room.pharmacy');
Route::get('/tmu/teaching-facility/class-room/education', [TmuController::class, 'class_room_education'])->name('class.room.education');
Route::get('/tmu/teaching-facility/class-room/agriculture', [TmuController::class, 'class_room_agriculture'])->name('class.room.agriculture');
Route::get('/tmu/teaching-facility/class-room/finearts', [TmuController::class, 'class_room_finearts'])->name('class.room.finearts');
Route::get('/tmu/teaching-facility/class-room/management', [TmuController::class, 'class_room_management'])->name('class.room.management');
Route::get('/tmu/teaching-facility/class-room/ccsit', [TmuController::class, 'class_room_ccsit'])->name('class.room.ccsit');
Route::get('/tmu/teaching-facility/class-room/engineering', [TmuController::class, 'class_room_engineering'])->name('class.room.engineering');
Route::get('/tmu/teaching-facility/class-room/dental', [TmuController::class, 'class_room_dental'])->name('class.room.dental');
Route::get('/tmu/teaching-facility/class-room/law', [TmuController::class, 'class_room_law'])->name('class.room.law');


// RDC_QUICK_LINKS
Route::get('/research-and-development-center', [TmuController::class, 'research_development_center_about'])->name('research.development.center.about');
Route::get('/research-and-development-center/faculty-profile', [TmuController::class, 'rdc_faculty_profile'])->name('rdc.faculty.profile');
Route::get('/research-and-development-center/contact-us', [TmuController::class, 'rdc_contact_us'])->name('rdc.contact.us');
Route::get('/research-and-development-center/infrastructure', [TmuController::class, 'rdc_infrastructure'])->name('rdc.infrastructure');

// RESEARCH_CELL
Route::get('/tmu/research', [TmuController::class, 'research_about'])->name('research.about');
Route::get('/tmu/research-policy', [TmuController::class, 'research_policy'])->name('research.policy');
Route::get('/tmu/code-of-ethics', [TmuController::class, 'code_of_ethics'])->name('code.of.ethics');
Route::get('/tmu/conferences', [TmuController::class, 'conferences'])->name('conferences');
Route::get('/tmu/research-publications', [TmuController::class, 'research_publication'])->name('research.publication');
Route::get('/tmu/sponsored-projects', [TmuController::class, 'sponsored_project'])->name('sponsored.project');
Route::get('/tmu/patents', [TmuController::class, 'patent'])->name('patent');
Route::get('/tmu/seed-money', [TmuController::class, 'seed_money'])->name('seed.money');
Route::get('/tmu/research-innovation-award', [TmuController::class, 'research_innovation_awards'])->name('research.innovation.awards');
Route::get('/tmu/fellowship-awards', [TmuController::class, 'fellowship_awards'])->name('fellowship.awards');
Route::get('/tmu/university-ethics-committee', [TmuController::class, 'university_ethics_commitee'])->name('university.ethics.commitee');
Route::get('/tmu/uaip-caip', [TmuController::class, 'uaip_caip'])->name('uaip.caip');
Route::get('/tmu/phd-overview', [TmuController::class, 'phd_overview'])->name('phd.overview');
Route::get('/tmu/phd-ordinance', [TmuController::class, 'phd_ordinance'])->name('phd.ordinance');
Route::get('/tmu/phd-intake', [TmuController::class, 'phd_intake'])->name('phd.intake');
Route::get('/tmu/research-scholar', [TmuController::class, 'research_scholar'])->name('research.scholar');
Route::get('/tmu/syllabus-course-work', [TmuController::class, 'syllabus_course_work'])->name('syllabus.course.work');
Route::get('/tmu/syllabi-for-discipline-specific-courses', [TmuController::class, 'syllabi_for_discipline'])->name('syllabi.for.discipline');
Route::get('/tmu/phd-faq', [TmuController::class, 'phd_faq'])->name('phd.faq');
Route::get('/tmu/phd-admission-notice', [TmuController::class, 'phd_admission_notice'])->name('phd.admission.notice');
Route::get('/tmu/phd-process', [TmuController::class, 'phd_process'])->name('phd.process');
Route::get('/tmu/phd-how-to-apply', [TmuController::class, 'phd_how_to_apply'])->name('phd.how.to.apply');
Route::get('/tmu/checklist', [TmuController::class, 'checklist'])->name('checklist');
Route::get('/tmu/phd-application-form', [TmuController::class, 'phd_application_form'])->name('phd.application.form');
Route::get('/tmu/phd-fee-structure', [TmuController::class, 'phd_fee_structure'])->name('phd.fee.structure');
Route::get('/tmu/semester-progress-report', [TmuController::class, 'semester_progress_report'])->name('semester.progress.report');
Route::get('/tmu/thesis-submission-form', [TmuController::class, 'thesis_submission_form'])->name('thesis.submission.form');
Route::get('/tmu/phd-no-dues', [TmuController::class, 'phd_no_dues'])->name('phd.no.dues');
Route::get('/tmu/phd-provisional-degree-proforma', [TmuController::class, 'phd_provisional_degree_proforma'])->name('phd.provisional.degree.proforma');
Route::get('/tmu/final-thesis-submission-form', [TmuController::class, 'final_thesis_submission_form'])->name('final.thesis.submission.form');
Route::get('/tmu/result', [TmuController::class, 'phd_result'])->name('phd.result');

// Examination
Route::get('/tmu/exam-overview', [TmuController::class, 'exam_overview'])->name('exam.overview');
Route::get('/tmu/exam-ordinance', [TmuController::class, 'exam_ordinance'])->name('exam.ordinance');
Route::get('/tmu/syllabus', [TmuController::class, 'syllabus'])->name('exam.syllabus');

// CBCS Open Elective
Route::get('/tmu/cbcs', [TmuController::class, 'cbcs'])->name('cbcs.home');
Route::get('/tmu/cbcs-circulars', [TmuController::class, 'cbcs_circulars'])->name('cbcs.circulars');
Route::get('/tmu/cbcs-nursing', [TmuController::class, 'cbcs_nursing'])->name('cbcs.nursing');
Route::get('/tmu/cbcs-pharmacy', [TmuController::class, 'cbcs_pharmacy'])->name('cbcs.pharmacy');
Route::get('/tmu/cbcs-paramedical-sciences', [TmuController::class, 'cbcs_paramedical_sciences'])->name('cbcs.paramedical');
Route::get('/tmu/cbcs-physiotherapy', [TmuController::class, 'cbcs_physiotherapy'])->name('cbcs.physiotherapy');
Route::get('/tmu/cbcs-management', [TmuController::class, 'cbcs_management'])->name('cbcs.management');
Route::get('/tmu/cbcs-law-and-legal-studies', [TmuController::class, 'cbcs_law_and_legal_studies'])->name('cbcs.law');
Route::get('/tmu/cbcs-computing-sciences-and-it', [TmuController::class, 'cbcs_ccsit'])->name('cbcs.ccsit');
Route::get('/tmu/cbcs-engineering', [TmuController::class, 'cbcs_engineering'])->name('cbcs.foe');
Route::get('/tmu/cbcs-university-polytechnic', [TmuController::class, 'cbcs_university_polytechnic'])->name('cbcs.polytechnic');
Route::get('/tmu/cbcs-education', [TmuController::class, 'cbcs_education'])->name('cbcs.education');
Route::get('/tmu/cbcs-agriculture-sciences', [TmuController::class, 'cbcs_agriculture_sciences'])->name('cbcs.agriculture');

// Management college

Route::get('/tmimt-college-of-management', [ManagementController::class, 'index'])->name('tmimt.home');
Route::get('/tmimt-college-of-management/about-us', [ManagementController::class, 'mgmt_overview'])->name('mgmt.overview');
Route::get('/tmimt-college-of-management/college-highlight', [ManagementController::class, 'mgmt_highlight'])->name('mgmt.highlight');
Route::get('/tmimt-college-of-management/dean', [ManagementController::class, 'mgmt_principal'])->name('mgmt.principal');
Route::get('/tmimt-college-of-management/syllabus', [ManagementController::class, 'mgmt_syllabus'])->name('mgmt.syllabus');
Route::get('/tmimt-college-of-management/academic-calendar', [ManagementController::class, 'mgmt_academic_calendar'])->name('mgmt.academic.calendar');
Route::get('/tmimt-college-of-management/training-placement-cell', [ManagementController::class, 'training_placements_cell'])->name('mgmt.tpc');
Route::get('/tmimt-college-of-management/corporate-advisory-board', [ManagementController::class, 'corporate_advisory_board'])->name('mgmt.ca.board');
Route::get('/tmimt-college-of-management/placement-calendar', [ManagementController::class, 'mgmt_placement_calendar'])->name('mgmt.placement.calendar');
Route::get('/tmimt-college-of-management/placement-brochure', [ManagementController::class, 'mgmt_placement_brochure'])->name('mgmt.placement.brochure');
Route::get('/tmimt-college-of-management/placement-news', [ManagementController::class, 'mgmt_news'])->name('mgmt.news');
Route::get('/tmimt-college-of-management/time-table', [ManagementController::class, 'mgmt_timetable'])->name('mgmt.timetable');
Route::get('/tmimt-college-of-management/anti-ragging-committee', [ManagementController::class, 'mgmt_anti_ragging'])->name('mgmt.anti.ragging');
Route::get('/tmimt-college-of-management/guest-lecture', [ManagementController::class, 'mgmt_guestlecture'])->name('mgmt.guestlecture');
// Route::get('/tmimt-college-of-management/gallery', [TmuController::class, 'mgmt_overview'])->name('mgmt.overview');
Route::get('/tmimt-college-of-management/contact-us', [ManagementController::class, 'mgmt_contactus'])->name('mgmt.contactus');
Route::get('/tmimt-college-of-management/event-magazine', [ManagementController::class, 'mgmt_magazine'])->name('mgmt.magazine');
Route::get('/tmimt-college-of-management/sc-st-committee', [ManagementController::class, 'mgmt_scst_committee'])->name('mgmt.scst.committee');
Route::get('/tmimt-college-of-management/icc-committee', [ManagementController::class, 'mgmt_icc_committee'])->name('mgmt.icc.committee');
Route::get('/tmimt-college-of-management/gallery', [ManagementController::class, 'mgmt_gallery'])->name('mgmt.gallery');
Route::get('/tmimt-college-of-management/study-material', [ManagementController::class, 'mgmt_study_material'])->name('mgmt.study.material');

// Fine arts 
Route::get('/college-of-fine-arts', [FineartsController::class, 'index'])->name('fine_arts.home');
Route::get('/college-of-fine-arts/about-us', [FineartsController::class, 'fine_arts_overview'])->name('fine.arts.overview');
Route::get('/college-of-fine-arts/college-highlight', [FineartsController::class, 'fine_arts_highlights'])->name('fine.arts.highlights');
Route::get('/college-of-fine-arts/hod', [FineartsController::class, 'fine_arts_hod'])->name('fine.arts.hod');
// Route::get('/college-of-fine-arts/programs', [TmuController::class, ''])->name('');
// Route::get('/college-of-fine-arts/programme-structure', [TmuController::class, ''])->name('');
Route::get('/college-of-fine-arts/syllabus', [FineartsController::class, 'fine_arts_syllabus'])->name('fine.arts.syllabus');
Route::get('/college-of-fine-arts/academic-calendar', [FineartsController::class, 'fine_arts_academic_calendar'])->name('fine.arts.academic.calendar');
// Route::get('/college-of-fine-arts/study-material', [TmuController::class, ''])->name('');
Route::get('/college-of-fine-arts/time-table', [FineartsController::class, 'fine_arts_timetable'])->name('fine.arts.timetable');
Route::get('/college-of-fine-arts/anti-ragging-committee', [FineartsController::class, 'fine_arts_anti_ragging'])->name('fine.arts.anti.ragging');
Route::get('/college-of-fine-arts/gallery', [FineartsController::class, 'fine_arts_gallery'])->name('fine.arts.gallery');
Route::get('/college-of-fine-arts/contact-us', [FineartsController::class, 'fine_arts_contact_us'])->name('fine.arts.contact.us');
Route::get('/college-of-fine-arts/iqac', [FineartsController::class, 'fine_arts_iqac'])->name('fine.arts.iqac');
Route::get('/college-of-fine-arts/study-material', [FineartsController::class, 'fine_arts_study_material'])->name('fine.arts.study.material');

// Engineering College

Route::get('/faculty-of-engineering', [EngineeringController::class, 'index'])->name('engineering.home');
Route::get('/faculty-of-engineering/about-us', [EngineeringController::class, 'engineering_about_us'])->name('engineering.about.us');
Route::get('/faculty-of-engineering/college-highlight', [EngineeringController::class, 'engineering_highlights'])->name('engineering.highlights');
Route::get('/faculty-of-engineering/dean', [EngineeringController::class, 'engineering_principal'])->name('engineering.dean');
Route::get('/faculty-of-engineering/academic-calendar', [EngineeringController::class, 'engineering_academic_calednar'])->name('engineering.academic.calednar');
Route::get('/faculty-of-engineering/nba', [EngineeringController::class, 'engineering_nba'])->name('engineering.nba');
Route::get('/faculty-of-engineering/corporate-advisory-board', [EngineeringController::class, 'engineering_corporate_advisory_board'])->name('engineering.corporate.advisory.board');
Route::get('/faculty-of-engineering/placement-calendar', [EngineeringController::class, 'engineering_placement_calendar'])->name('engineering.placement.calendar');
Route::get('/faculty-of-engineering/placement-brochure', [EngineeringController::class, 'engineering_placement_brochure'])->name('engineering.placement.brochure');
Route::get('/faculty-of-engineering/placement-news', [EngineeringController::class, 'engineering_placement_news'])->name('engineering.placement.news');
Route::get('/faculty-of-engineering/project-guidelines', [EngineeringController::class, 'engineering_project_guidelines'])->name('engineering.project.guidelines');
Route::get('/faculty-of-engineering/project-templates', [EngineeringController::class, 'engineering_project_template'])->name('engineering.project.template');
Route::get('/faculty-of-engineering/time-table', [EngineeringController::class, 'engineering_timetable'])->name('engineering.timetable');
Route::get('/faculty-of-engineering/anti-ragging-committee', [EngineeringController::class, 'engineering_anti_ragging'])->name('engineering.anti.ragging');
Route::get('/faculty-of-engineering/financial-statement', [EngineeringController::class, 'engineering_financial_statement'])->name('engineering.financial.statement');
Route::get('/faculty-of-engineering/contact-us', [EngineeringController::class, 'engineering_contact_us'])->name('engineering.contact.us');
Route::get('/faculty-of-engineering/foe-college-gallery', [EngineeringController::class, 'engineering_gallery'])->name('engineering.gallery');
Route::get('/faculty-of-engineering/iqac', [EngineeringController::class, 'engineering_iqac'])->name('engineering.iqac');
Route::get('/faculty-of-engineering/syllabus', [EngineeringController::class, 'engineering_syllabus'])->name('engineering.syllabus');
Route::get('/faculty-of-engineering/e-content', [EngineeringController::class, 'engineering_e_content'])->name('engineering.e.content');
// Route::get('/faculty-of-engineering/gallery', [TmuController::class, 'engineering_gallery'])->name('engineering.gallery');

Route::get('/faculty-of-engineering/study-material', [EngineeringController::class, 'studyMaterial'])->name('engineering.study.material');



// CCSIT College

Route::get('/college-of-computing-sciences-and-it', [CcsitController::class, 'index'])->name('ccsit.home');
Route::get('/college-of-computing-sciences-and-it/about-us', [CcsitController::class, 'ccsit_overview'])->name('ccsit.about.us');
Route::get('/college-of-computing-sciences-and-it/college-highlight', [CcsitController::class, 'ccsit_highlights'])->name('ccsit.highlights');
Route::get('/college-of-computing-sciences-and-it/principal', [CcsitController::class, 'ccsit_principal'])->name('ccsit.principal');
Route::get('/college-of-computing-sciences-and-it/college-gallery', [CcsitController::class, 'ccsit_gallery'])->name('ccsit.gallery');
Route::get('/college-of-computing-sciences-and-it/academic-calendar', [CcsitController::class, 'ccsit_academic_calendar'])->name('ccsit.academic.calendar');
Route::get('/college-of-computing-sciences-and-it/corporate-advisory-board', [CcsitController::class, 'ccsit_corporate_advisory'])->name('ccsit.corporate.advisory');
Route::get('/college-of-computing-sciences-and-it/placement-calendar', [CcsitController::class, 'ccsit_placement_calendar'])->name('ccsit.placement.calendar');
Route::get('/college-of-computing-sciences-and-it/placement-brochure', [CcsitController::class, 'ccsit_placement_brochure'])->name('ccsit.placement.brochure');
Route::get('/college-of-computing-sciences-and-it/placement-news', [CcsitController::class, 'ccsit_placement_news'])->name('ccsit.placement.news');
Route::get('/college-of-computing-sciences-and-it/project-guidelines', [CcsitController::class, 'ccsit_project_guidelines'])->name('ccsit.project.guidelines');
Route::get('/college-of-computing-sciences-and-it/project-templates', [CcsitController::class, 'ccsit_project_templates'])->name('ccsit.project.templates');
Route::get('/college-of-computing-sciences-and-it/time-table', [CcsitController::class, 'ccsit_timetable'])->name('ccsit.timetable');
Route::get('/college-of-computing-sciences-and-it/anti-ragging-committee', [CcsitController::class, 'ccsit_anti_ragging'])->name('ccsit.anti.ragging');
Route::get('/college-of-computing-sciences-and-it/kaaryashala', [CcsitController::class, 'ccsit_karyashala'])->name('ccsit.karyashala');
Route::get('/college-of-computing-sciences-and-it/event-magazine', [CcsitController::class, 'ccsit_event_magazine'])->name('ccsit.event.magazine');
Route::get('/college-of-computing-sciences-and-it/guest-lecture', [CcsitController::class, 'ccsit_guest_lecture'])->name('ccsit.guest.lecture');
Route::get('/college-of-computing-sciences-and-it/contact-us', [CcsitController::class, 'ccsit_contact_us'])->name('ccsit.contact.us');
Route::get('/college-of-computing-sciences-and-it/syllabus', [CcsitController::class, 'ccsit_syllabus'])->name('ccsit.syllabus');
Route::get('/college-of-computing-sciences-and-it/iqac', [CcsitController::class, 'ccsit_iqac'])->name('ccsit.iqac');
Route::get('/college-of-computing-sciences-and-it/study-material', [CcsitController::class, 'ccsit_study_material'])->name('ccsit.study.material');



// Medical College
Route::get('/medical-college-and-research-centre', [MedicalController::class, 'index'])->name('medical.home');
Route::get('/medical-college-and-research-centre/about-us', [MedicalController::class, 'medical_about_us'])->name('medical.about.us');
Route::get('/medical-college-and-research-centre/college-information', [MedicalController::class, 'medical_college_info'])->name('medical.college.info');
Route::get('/medical-college-and-research-centre/infrastructure', [MedicalController::class, 'medical_infra'])->name('medical_infra');
Route::get('/medical-college-and-research-centre/citizen-charter', [MedicalController::class, 'medical_citizens'])->name('medical.citizens');
Route::get('/medical-college-and-research-centre/college-highlight', [MedicalController::class, 'medical_highlights'])->name('medical.highlights');
Route::get('/medical-college-and-research-centre/principal', [MedicalController::class, 'medical_principal'])->name('medical.principal');
Route::get('/medical-college-and-research-centre/ms', [MedicalController::class, 'medical_supritendent'])->name('medical.supritendent');
Route::get('/medical-college-and-research-centre/affiliation', [MedicalController::class, 'medical_affliation'])->name('medical.affliation');
Route::get('/medical-college-and-research-centre/govt-approval', [MedicalController::class, 'medical_approvals'])->name('medical_approvals');
Route::get('/medical-college-and-research-centre/sanctioned-intake', [MedicalController::class, 'medical_sanctioned_intake'])->name('medical.sanctioned.intake');
Route::get('/medical-college-and-research-centre/department', [MedicalController::class, 'medical_departements'])->name('medical.departements');
Route::get('/medical-college-and-research-centre/foundation-course', [MedicalController::class, 'medical_foundation'])->name('medical.foundation');
Route::get('/medical-college-and-research-centre/learning-objective', [MedicalController::class, 'medical_learning'])->name('medical.learning');
Route::get('/medical-college-and-research-centre/academic-calendar', [MedicalController::class, 'medical_academic_calendar'])->name('medical.academic.calendar');
// Route::get('/medical-college-and-research-centre/aebas-attendance', [MedicalController::class, 'medical_aebas_attendance'])->name('medical.aebas.attendance');
Route::get('/medical-college-and-research-centre/stipend', [MedicalController::class, 'medical_stipend'])->name('medical.stipend');
Route::get('/medical-college-and-research-centre/result', [MedicalController::class, 'medical_result'])->name('medical.result');
Route::get('/medical-college-and-research-centre/student-details', [MedicalController::class, 'medical_students_details'])->name('medical.students.details');
Route::get('/medical-college-and-research-centre/time-table', [MedicalController::class, 'medical_timetable'])->name('medical.timetable');
Route::get('/medical-college-and-research-centre/teaching-schedule', [MedicalController::class, 'medical_tecahing'])->name('medical.tecahing');
Route::get('/medical-college-and-research-centre/best-practices', [MedicalController::class, 'medical_bestpractice'])->name('medical.bestpractice');
Route::get('/medical-college-and-research-centre/anti-ragging-committee', [MedicalController::class, 'medical_anti_ragg'])->name('medical.anti.ragg');
Route::get('/medical-college-and-research-centre/gender-harassment-committee', [MedicalController::class, 'medical_ghc'])->name('medical.ghc');
Route::get('/medical-college-and-research-centre/gallery', [MedicalController::class, 'medical_gallery'])->name('medical.gallery');
Route::get('/medical-college-and-research-centre/contact-us', [MedicalController::class, 'medical_contactus'])->name('medical.contactus');
Route::get('/medical-college-and-research-centre/syllabus', [MedicalController::class, 'medical_syllabus'])->name('medical.syllabus');
Route::get('/medical-college-and-research-centre/anatomy', [MedicalController::class, 'medical_anatomy'])->name('medical.anatomy');
Route::get('/medical-college-and-research-centre/physiology', [MedicalController::class, 'medical_physiology'])->name('medical.physiology');
Route::get('/medical-college-and-research-centre/biochemistry', [MedicalController::class, 'medical_biochemistry'])->name('medical.biochemistry');
Route::get('/medical-college-and-research-centre/pathology', [MedicalController::class, 'medical_pathology'])->name('medical.pathology');
Route::get('/medical-college-and-research-centre/microbiology', [MedicalController::class, 'medical_microbiology'])->name('medical.microbiology');
Route::get('/medical-college-and-research-centre/pharmacology', [MedicalController::class, 'medical_pharmacology'])->name('medical.pharmacology');
Route::get('/medical-college-and-research-centre/forensic-medicine', [MedicalController::class, 'medical_forensic_medicine'])->name('medical.forensic.medicine');
Route::get('/medical-college-and-research-centre/community-medicine', [MedicalController::class, 'medical_community_medicine'])->name('medical.community.medicine');
Route::get('/medical-college-and-research-centre/general-medicine', [MedicalController::class, 'medical_general_medicine'])->name('medical.general.medicine');
Route::get('/medical-college-and-research-centre/pulmonary-medicine', [MedicalController::class, 'medical_pulmonary_medicine'])->name('medical.pulmonary.medicine');
Route::get('/medical-college-and-research-centre/psychiatry', [MedicalController::class, 'medical_psychiatry'])->name('medical.psychiatry');
Route::get('/medical-college-and-research-centre/dermatology', [MedicalController::class, 'medical_dermatology'])->name('medical.dermatology');
Route::get('/medical-college-and-research-centre/paediatrics', [MedicalController::class, 'medical_paediatrics'])->name('medical.paediatrics');
Route::get('/medical-college-and-research-centre/anesthesiology', [MedicalController::class, 'medical_anesthesiology'])->name('medical.anesthesiology');
Route::get('/medical-college-and-research-centre/radiology', [MedicalController::class, 'medical_radiology'])->name('medical.radiology');
Route::get('/medical-college-and-research-centre/general-surgery', [MedicalController::class, 'medical_general_surgery'])->name('medical.general.surgery');
Route::get('/medical-college-and-research-centre/orthopaedics', [MedicalController::class, 'medical_orthopaedics'])->name('medical.orthopaedics');
Route::get('/medical-college-and-research-centre/ent', [MedicalController::class, 'medical_ent'])->name('medical.ent');
Route::get('/medical-college-and-research-centre/ophthalmology', [MedicalController::class, 'medical_ophthalmology'])->name('medical.ophthalmology');
Route::get('/medical-college-and-research-centre/obstetrics-gynaecology', [MedicalController::class, 'medical_obstetrics_gynaecology'])->name('medical.obstetrics.gynaecology');
Route::get('/medical-college-and-research-centre/anatomy/infrastructure', [MedicalController::class, 'medical_anatomy_infra'])->name('medical.anatomy.infra');
Route::get('/medical-college-and-research-centre/physiology/infrastructure', [MedicalController::class, 'medical_physiology_infra'])->name('medical.physiology.infra');
Route::get('/medical-college-and-research-centre/biochemistry/infrastructure', [MedicalController::class, 'medical_biochemistry_infra'])->name('medical.biochemistry.infra');
Route::get('/medical-college-and-research-centre/pathology/infrastructure', [MedicalController::class, 'medical_pathology_infra'])->name('medical.pathology.infra');
Route::get('/medical-college-and-research-centre/microbiology/infrastructure', [MedicalController::class, 'medical_microbiology_infra'])->name('medical.microbiology.infra');
Route::get('/medical-college-and-research-centre/pharmacology/infrastructure', [MedicalController::class, 'medical_pharmacology_infra'])->name('medical.pharmacology.infra');
Route::get('/medical-college-and-research-centre/forensic-medicine/infrastructure', [MedicalController::class, 'medical_forensic_medicine_infra'])->name('medical.forensic.medicine.infra');
Route::get('/medical-college-and-research-centre/community-medicine/infrastructure', [MedicalController::class, 'medical_community_medicine_infra'])->name('medical.community.medicine.infra');
Route::get('/medical-college-and-research-centre/general-medicine/infrastructure', [MedicalController::class, 'medical_general_medicine_infra'])->name('medical.general.medicine.infra');
Route::get('/medical-college-and-research-centre/pulmonary-medicine/infrastructure', [MedicalController::class, 'medical_pulmonary_medicine_infra'])->name('medical.pulmonary.medicine.infra');
Route::get('/medical-college-and-research-centre/psychiatry/infrastructure', [MedicalController::class, 'medical_psychiatry_infra'])->name('medical.psychiatry.infra');
Route::get('/medical-college-and-research-centre/dermatology/infrastructure', [MedicalController::class, 'medical_dermatology_infra'])->name('medical.dermatology.infra');
Route::get('/medical-college-and-research-centre/paediatrics/infrastructure', [MedicalController::class, 'medical_paediatrics_infra'])->name('medical.paediatrics.infra');
Route::get('/medical-college-and-research-centre/anesthesiology/infrastructure', [MedicalController::class, 'medical_anesthesiology_infra'])->name('medical.anesthesiology.infra');
Route::get('/medical-college-and-research-centre/radiology/infrastructure', [MedicalController::class, 'medical_radiology_infra'])->name('medical.radiology.infra');
Route::get('/medical-college-and-research-centre/general-surgery/infrastructure', [MedicalController::class, 'medical_general_surgery_infra'])->name('medical.general.surgery.infra');
Route::get('/medical-college-and-research-centre/orthopaedics/infrastructure', [MedicalController::class, 'medical_orthopaedics_infra'])->name('medical.orthopaedics.infra');
Route::get('/medical-college-and-research-centre/ent/infrastructure', [MedicalController::class, 'medical_ent_infra'])->name('medical.ent.infra');
Route::get('/medical-college-and-research-centre/ophthalmology/infrastructure', [MedicalController::class, 'medical_ophthalmology_infra'])->name('medical.ophthalmology.infra');
Route::get('/medical-college-and-research-centre/obg/infrastructure', [MedicalController::class, 'medical_obstetrics_gynaecology_infra'])->name('medical.obstetrics.gynaecology.infra');
Route::get('/medical-college-and-research-centre/study-material', [MedicalController::class, 'medical_study_material'])->name('medical.study.material');
Route::get('/medical-college-and-research-centre/urban-health-centers', [MedicalController::class, 'medical_urban_health_centers'])->name('medical.urban.health.centers');
Route::get('/medical-college-and-research-centre/rural-health-centers', [MedicalController::class, 'medical_rural_health_centers'])->name('medical.rural.health.centers');
Route::get('/medical-college-and-research-centre/primary-health-centers', [MedicalController::class, 'medical_primary_health_centers'])->name('medical.primary.health.centers');
Route::get('/medical-college-and-research-centre/community-health-centers', [MedicalController::class, 'medical_community_health_centers'])->name('medical.community.health.centers');


// Dental
Route::get('/dental-college-and-research-centre', [DentalController::class, 'index'])->name('dental.home');
Route::get('/dental-college-and-research-centre/about-us', [DentalController::class, 'dental_overview'])->name('dental.overview');
Route::get('/dental-college-and-research-centre/college-highlight', [DentalController::class, 'dental_college_highlight'])->name('dental.college.highlight');
Route::get('/dental-college-and-research-centre/principal', [DentalController::class, 'dental_principal'])->name('dental.principal');
Route::get('/dental-college-and-research-centre/college-advisory-board', [DentalController::class, 'dental_college_advisory_board'])->name('dental.college.advisory.board');
Route::get('/dental-college-and-research-centre/department', [DentalController::class, 'dental_department'])->name('dental.department');
Route::get('/dental-college-and-research-centre/syllabus', [DentalController::class, 'dental_syllabus'])->name('dental_syllabus');
Route::get('/dental-college-and-research-centre/academic-calendar', [DentalController::class, 'dental_academic_calendar'])->name('dental.academic.calendar');
Route::get('/dental-college-and-research-centre/time-table', [DentalController::class, 'dental_timetable'])->name('dental.timetable');
Route::get('/dental-college-and-research-centre/anti-ragging-committee', [DentalController::class, 'dental_anti_ragging'])->name('dental.anti.ragging');
Route::get('/dental-college-and-research-centre/guest-lecture', [DentalController::class, 'dental_guest_lecture'])->name('dental.guest.lecture');
Route::get('/dental-college-and-research-centre/gallery', [DentalController::class, 'dental_gallery'])->name('dental.gallery');
Route::get('/dental-college-and-research-centre/contact-us', [DentalController::class, 'dental_contact_us'])->name('dental.contact.us');
Route::get('/dental-college-and-research-centre/iqac', [DentalController::class, 'dental_iqac'])->name('dental.iqac');
Route::get('/dental-college-and-research-centre/conservative-dentistry-endodontics', [DentalController::class, 'dental_conservative_dentistry_endodontics'])->name('dental.conservative.dentistry.endodontics');
Route::get('/dental-college-and-research-centre/oral-maxillofacial-surgery', [DentalController::class, 'dental_oral_maxillofacial_surgery'])->name('dental.oral.maxillofacial.surgery');
Route::get('/dental-college-and-research-centre/orthodontics-dentofacial-orthopedics', [DentalController::class, 'dental_orthodontics'])->name('dental.orthodontics');
Route::get('/dental-college-and-research-centre/prosthodontics-crown-bridge', [DentalController::class, 'dental_Prosthodontics'])->name('dental.Prosthodontics');
Route::get('/dental-college-and-research-centre/pediatric-preventive-dentistry', [DentalController::class, 'dental_paedodontics'])->name('dental.pediatric');
Route::get('/dental-college-and-research-centre/periodontology', [DentalController::class, 'dental_periodontology'])->name('dental.periodontology');
Route::get('/dental-college-and-research-centre/public-health-dentistry', [DentalController::class, 'dental_public_health'])->name('dental.public.health');
Route::get('/dental-college-and-research-centre/oral-medicine-radiology', [DentalController::class, 'dental_oral_medicine'])->name('dental.oral.medicine');
Route::get('/dental-college-and-research-centre/oral-pathology-microbiology', [DentalController::class, 'dental_oral_pathology'])->name('dental.oral.pathology');
Route::get('/dental-college-and-research-centre/study-material', [DentalController::class, 'dental_study_material'])->name('dental.study.material');

// Physiotherapy
Route::get('/department-of-physiotherapy', [PhysiotherapyController::class, 'index'])->name('physiotherapy.home');
Route::get('/department-of-physiotherapy/about-us', [PhysiotherapyController::class, 'physiotherapy_about_us'])->name('physiotherapy.about.us');
Route::get('/department-of-physiotherapy/college-highlight', [PhysiotherapyController::class, 'physiotherapy_college_highlights'])->name('physiotherapy.college.highlights');
Route::get('/department-of-physiotherapy/principal', [PhysiotherapyController::class, 'physiotherapy_hod'])->name('physiotherapy.hod');
Route::get('/department-of-physiotherapy/labs', [PhysiotherapyController::class, 'physiotherapy_labs'])->name('physiotherapy.labs');
Route::get('/department-of-physiotherapy/syllabus', [PhysiotherapyController::class, 'physiotherapy_syllabus'])->name('physiotherapy.syllabus');
Route::get('/department-of-physiotherapy/academic-calendar', [PhysiotherapyController::class, 'physiotherapy_academic_calendar'])->name('physiotherapy.academic.calendar');
Route::get('/department-of-physiotherapy/time-table', [PhysiotherapyController::class, 'physiotherapy_timetable'])->name('physiotherapy.timetable');
Route::get('/department-of-physiotherapy/anti-ragging-committee', [PhysiotherapyController::class, 'physiotherapy_anti_ragging'])->name('physiotherapy.anti.ragging');
Route::get('/department-of-physiotherapy/gallery', [PhysiotherapyController::class, 'physiotherapy_gallery'])->name('physiotherapy.gallery');
Route::get('/department-of-physiotherapy/contact-us', [PhysiotherapyController::class, 'physiotherapy_contact_us'])->name('physiotherapy.contact.us');
Route::get('/department-of-physiotherapy/labs/electrotherapy-lab', [PhysiotherapyController::class, 'physiotherapy_electro_lab'])->name('physiotherapy.electro.lab');
Route::get('/department-of-physiotherapy/labs/exercise-therapy-lab', [PhysiotherapyController::class, 'physio_exercise_lab'])->name('physio.exercise.lab');
Route::get('/department-of-physiotherapy/labs/physiotherapy-opd', [PhysiotherapyController::class, 'physio_opd'])->name('physio.opd');
Route::get('/department-of-physiotherapy/labs/research-lab', [PhysiotherapyController::class, 'physio_research_lab'])->name('physio.research.lab');
Route::get('/department-of-physiotherapy/magazine', [PhysiotherapyController::class, 'physiotherapy_magazine'])->name('physiotherapy.magazine');
Route::get('/department-of-physiotherapy/iqac', [PhysiotherapyController::class, 'physiotherapy_iqac'])->name('physiotherapy.iqac');
Route::get('/department-of-physiotherapy/sanctioned-intake', [PhysiotherapyController::class, 'physiotherapy_intake'])->name('physiotherapy.intake');
Route::get('/department-of-physiotherapy/study-material', [PhysiotherapyController::class, 'physiotherapy_study_material'])->name('physiotherapy.study.material');

// Pharmacy
Route::get('/college-of-pharmacy', [PharmacyController::class, 'index'])->name('pharmacy.home');
Route::get('/college-of-pharmacy/about-us', [PharmacyController::class, 'pharmacy_about_us'])->name('pharmacy.about.us');
Route::get('/college-of-pharmacy/college-highlight', [PharmacyController::class, 'pharmacy_college_highlights'])->name('pharmacy.college.highlights');
Route::get('/college-of-pharmacy/principal', [PharmacyController::class, 'pharmacy_principal'])->name('pharmacy.principal');
Route::get('/college-of-pharmacy/infrastructure', [PharmacyController::class, 'pharmacy_infrastructure'])->name('pharmacy.infrastructure');
Route::get('/college-of-pharmacy/syllabus', [PharmacyController::class, 'pharmacy_syllabus'])->name('pharmacy.syllabus');
Route::get('/college-of-pharmacy/academic-calendar', [PharmacyController::class, 'pharmacy_academic_calendar'])->name('pharmacy.academic.calendar');
Route::get('/college-of-pharmacy/time-table', [PharmacyController::class, 'pharmacy_timetable'])->name('pharmacy.timetable');
Route::get('/college-of-pharmacy/anti-ragging-committee', [PharmacyController::class, 'pharmacy_anti_ragging'])->name('pharmacy.anti.ragging');
Route::get('/college-of-pharmacy/gallery', [PharmacyController::class, 'pharmacy_gallery'])->name('pharmacy.gallery');
Route::get('/college-of-pharmacy/contact-us', [PharmacyController::class, 'pharmacy_contact_us'])->name('pharmacy.contact.us');
Route::get('/college-of-pharmacy/college-advisory-board', [PharmacyController::class, 'pharmacy_college_advisory_board'])->name('pharmacy.college.advisory.board');
Route::get('/college-of-pharmacy/iqac', [PharmacyController::class, 'pharmacy_iqac'])->name('pharmacy.iqac');
Route::get('/college-of-pharmacy/tjpbs/about-us', [PharmacyController::class, 'about_tjpbs'])->name('about.tjpbs');
Route::get('/college-of-pharmacy/tjpbs/policies', [PharmacyController::class, 'tjpbs_policies'])->name('tjpbs.policies');
Route::get('/college-of-pharmacy/tjpbs/editorial-board', [PharmacyController::class, 'tjpbs_editorial_board'])->name('tjpbs.editorial.board');
Route::get('/college-of-pharmacy/tjpbs/reviewer-board', [PharmacyController::class, 'tjpbs_reviewer_board'])->name('tjpbs.reviewer.board');
Route::get('/college-of-pharmacy/tjpbs/publication-ethics', [PharmacyController::class, 'tjpbs_publication_ethics'])->name('tjpbs.publication.ethics');
Route::get('/college-of-pharmacy/tjpbs/authors-guidelines', [PharmacyController::class, 'tjpbs_authors_guidelines'])->name('tjpbs.authors.guidelines');
Route::get('/college-of-pharmacy/tjpbs/indexing', [PharmacyController::class, 'tjpbs_indexing'])->name('tjpbs.indexing');
Route::get('/college-of-pharmacy/tjpbs/current-issues', [PharmacyController::class, 'tjpbs_current_issues'])->name('tjpbs.current.issues');
Route::get('/college-of-pharmacy/tjpbs/archives', [PharmacyController::class, 'tjpbs_archives'])->name('tjpbs.archives');
Route::get('/college-of-pharmacy/tjpbs/manuscript-submission', [PharmacyController::class, 'manuscript_form_tjpbs'])->name('manuscript.form.tjpbs');
Route::get('/college-of-pharmacy/tjpbs/contact-us', [PharmacyController::class, 'tjpbs_contact_us'])->name('tjpbs.contact.us');
Route::POST('/manuscript-form', [ManuscriptFormController::class, 'store'])->name('manuscript_form.store');

Route::get('/college-of-pharmacy/study-material', [PharmacyController::class, 'pharmacy_study_material'])->name('pharmacy.study.material');


// Paramedical
Route::get('/college-of-paramedical-sciences', [ParamedicalController::class, 'index'])->name('paramedical.home');

Route::get('/college-of-paramedical-sciences/about-us', [ParamedicalController::class, 'paramedical_about_us'])->name('paramedical.about.us');
Route::get('/college-of-paramedical-sciences/college-highlight', [ParamedicalController::class, 'paramedical_college_highlights'])->name('paramedical.college.highlights');
Route::get('/college-of-paramedical-sciences/principal', [ParamedicalController::class, 'paramedical_principal'])->name('paramedical.principal');
Route::get('/college-of-paramedical-sciences/college-advisory-board', [ParamedicalController::class, 'paramedical_college_advisory_board'])->name('paramedical.college.advisory.board');
Route::get('/college-of-paramedical-sciences/syllabus', [ParamedicalController::class, 'paramedical_syllabus'])->name('paramedical.syllabus');
Route::get('/college-of-paramedical-sciences/time-table', [ParamedicalController::class, 'paramedical_timetable'])->name('paramedical.timetable');
Route::get('/college-of-paramedical-sciences/anti-ragging-committee', [ParamedicalController::class, 'paramedical_anti_ragging'])->name('paramedical.anti.ragging');
Route::get('/college-of-paramedical-sciences/academic-calendar', [ParamedicalController::class, 'paramedical_academic_calendar'])->name('paramedical.academic.calendar');
Route::get('/college-of-paramedical-sciences/guest-lecture', [ParamedicalController::class, 'paramedical_guest_lecture'])->name('paramedical.guest.lecture');
Route::get('/college-of-paramedical-sciences/contact-us', [ParamedicalController::class, 'paramedical_contact_us'])->name('paramedical.contact.us');
Route::get('/college-of-paramedical-sciences/gallery', [ParamedicalController::class, 'paramedical_gallery'])->name('paramedical.gallery');
Route::get('/college-of-paramedical-sciences/iqac', [ParamedicalController::class, 'paramedical_iqac'])->name('paramedical_iqac');
Route::get('/college-of-paramedical-sciences/study-material', [ParamedicalController::class, 'paramedical_study_material'])->name('paramedical.study.material');


// Education 
Route::get('/faculty-of-education', [EducationController::class, 'index'])->name('education.home');
Route::get('/faculty-of-education/principal', [EducationController::class, 'education_principal'])->name('education.principal');
Route::get('/faculty-of-education/college-highlight', [EducationController::class, 'education_college_highlight'])->name('education.college.highlight');
Route::get('/faculty-of-education/syllabus', [EducationController::class, 'education_syllabus'])->name('education.syllabus');
Route::get('/faculty-of-education/academic-calendar', [EducationController::class, 'education_academic_calendar'])->name('education.academic.calendar');
Route::get('/faculty-of-education/time-table', [EducationController::class, 'education_timetable'])->name('education.timetable');
Route::get('/faculty-of-education/anti-ragging-committee', [EducationController::class, 'education_anti_ragging'])->name('education.anti.ragging');
Route::get('/faculty-of-education/guest-lecture', [EducationController::class, 'education_guest_lecture'])->name('education.guest.lecture');
Route::get('/faculty-of-education/gallery', [EducationController::class, 'education_gallery'])->name('education.gallery');
Route::get('/faculty-of-education/contact-us', [EducationController::class, 'education_contact_us'])->name('education.contact.us');
Route::get('/faculty-of-education/iqac', [EducationController::class, 'education_iqac'])->name('education.iqac');
Route::get('/faculty-of-education/computer/computer-infra', [EducationController::class, 'computer_infra'])->name('computer.infra');
Route::get('/faculty-of-education/study-material', [EducationController::class, 'education_study_material'])->name('education.study.material');


// Agriculture
Route::get('/college-of-agriculture-sciences', [AgricultureController::class, 'index'])->name('agriculture.home');
Route::get('/college-of-agriculture-sciences/academic-calendar', [AgricultureController::class, 'agriculture_academic_calendar'])->name('agriculture.academic.calendar');
Route::get('/college-of-agriculture-sciences/anti-ragging-committee', [AgricultureController::class, 'agriculture_anti_ragging'])->name('agriculture.anti.ragging');
Route::get('/college-of-agriculture-sciences/corporate-advisory-board', [AgricultureController::class, 'agriculture_cab'])->name('agriculture.cab');
Route::get('/college-of-agriculture-sciences/agri-choupal-magzine', [AgricultureController::class, 'agriculture_choupal'])->name('agriculture.choupal');
Route::get('/college-of-agriculture-sciences/college-highlight', [AgricultureController::class, 'agriculture_college_highlight'])->name('agriculture.college.highlight');
Route::get('/college-of-agriculture-sciences/contact-us', [AgricultureController::class, 'agriculture_contact_us'])->name('agriculture.contact.us');
Route::get('/college-of-agriculture-sciences/dean-desk', [AgricultureController::class, 'agriculture_dean'])->name('agriculture.dean');
Route::get('/college-of-agriculture-sciences/gallery', [AgricultureController::class, 'agriculture_gallery'])->name('agriculture.gallery');
Route::get('/college-of-agriculture-sciences/guest-lecture', [AgricultureController::class, 'agriculture_guest_lecture'])->name('agriculture.guest.lecture');
Route::get('/college-of-agriculture-sciences/iqac', [AgricultureController::class, 'agriculture_iqac'])->name('agriculture.iqac');
Route::get('/college-of-agriculture-sciences/orientation-programme', [AgricultureController::class, 'agriculture_orientation'])->name('agriculture.orientation');
Route::get('/college-of-agriculture-sciences/about-us', [AgricultureController::class, 'agriculture_overview'])->name('agriculture_overview');
Route::get('/college-of-agriculture-sciences/placement-calendar', [AgricultureController::class, 'agriculture_placement_calendar'])->name('agriculture.placement.calendar');
Route::get('/college-of-agriculture-sciences/placement-news', [AgricultureController::class, 'agriculture_placement_news'])->name('agriculture.placement.news');
Route::get('/college-of-agriculture-sciences/syllabus', [AgricultureController::class, 'agriculture_syllabus'])->name('agriculture.syllabus');
Route::get('/college-of-agriculture-sciences/time-table', [AgricultureController::class, 'agriculture_timetable'])->name('agriculture.timetable');
Route::get('/college-of-agriculture-sciences/study-material', [AgricultureController::class, 'agriculture_study_material'])->name('agriculture.study.material');
Route::get('/college-of-agriculture-sciences/training-placement-cell', [AgricultureController::class, 'agriculture_tpc'])->name('agriculture.tpc');

// Nursing
Route::get('/college-of-nursing', [NursingController::class, 'index'])->name('nursing.home');
Route::get('/college-of-nursing/academic-calendar', [NursingController::class, 'nursing_academic_calednar'])->name('nursing.academic.calednar');
Route::get('/college-of-nursing/anti-ragging-committee', [NursingController::class, 'nursing_anti_ragging'])->name('nursing.anti.ragging');
Route::get('/college-of-nursing/college-advisory-board', [NursingController::class, 'nursing_college_advisory_board'])->name('nursing.college.advisory.board');
Route::get('/college-of-nursing/college-highlight', [NursingController::class, 'nursing_college_highlight'])->name('nursing.college.highlight');
Route::get('/college-of-nursing/department/community-health-nursing', [NursingController::class, 'nursing_community_health'])->name('nursing.community.health');
Route::get('/college-of-nursing/contact-us', [NursingController::class, 'nursing_contact_us'])->name('nursing.contact.us');
Route::get('/college-of-nursing/corporate-advisory_board', [NursingController::class, 'nursing_corporate_advisory_board'])->name('nursing.corporate.advisory.board');
Route::get('/college-of-nursing/dean', [NursingController::class, 'nursing_dean'])->name('nursing.dean');
Route::get('/college-of-nursing/department', [NursingController::class, 'nursing_department'])->name('nursing.department');
Route::get('/college-of-nursing/department/fundamental-nursing', [NursingController::class, 'nursing_fundamentals'])->name('nursing.fundamentals');
Route::get('/college-of-nursing/gallery', [NursingController::class, 'nursing_gallery'])->name('nursing.gallery');
Route::get('/college-of-nursing/guest-lecture', [NursingController::class, 'nursing_guest_lecture'])->name('nursing.guest.lecture');
Route::get('/college-of-nursing/department/obg-nursing', [NursingController::class, 'nursing_gynaeo'])->name('nursing_gynaeo');
Route::get('/college-of-nursing/iqac', [NursingController::class, 'nursing_iqac'])->name('nursing.iqac');
Route::get('/college-of-nursing/department/medical-surgical-nursing', [NursingController::class, 'nursing_medical_surgical'])->name('nursing.medical.surgical');
Route::get('/college-of-nursing/about-us', [NursingController::class, 'nursing_overview'])->name('nursing.overview');
Route::get('/college-of-nursing/department/paediatric-nursing', [NursingController::class, 'nursing_paediatric'])->name('nursing.paediatric');
Route::get('/college-of-nursing/placement-calendar', [NursingController::class, 'nursing_placement_calendar'])->name('nursing.placement.calendar');
Route::get('/college-of-nursing/placement-news', [NursingController::class, 'nursing_placement_news'])->name('nursing.placement.news');
// Route::get('/college-of-nursing/principal', [NursingController::class, 'nursing_principal'])->name('nursing.principal');
Route::get('/college-of-nursing/department/psychiatric-nursing', [NursingController::class, 'nursing_psychiatric'])->name('nursing.psychiatric');
Route::get('/college-of-nursing/syllabus', [NursingController::class, 'nursing_syllabus'])->name('nursing.syllabus');
Route::get('/college-of-nursing/time-table', [NursingController::class, 'nursing_timetable'])->name('nursing.timetable');
Route::get('/college-of-nursing/training-placement-cell', [NursingController::class, 'nursing_tpc'])->name('nursing.tpc');
Route::get('/college-of-nursing/principal', [NursingController::class, 'nursing_viceprincipal'])->name('nursing.viceprincipal');
Route::get('/college-of-nursing/ijih/about-us', [NursingController::class, 'ijih_aboutus'])->name('ijih.aboutus');
Route::get('/college-of-nursing/ijih/editorial-board', [NursingController::class, 'ijih_edi_board'])->name('ijih.edi.board');
Route::get('/college-of-nursing/ijih/guidelines-and-ethics', [NursingController::class, 'ijih_guide_ethics'])->name('ijih.guide.ethics');
Route::get('/college-of-nursing/ijih/submission-process', [NursingController::class, 'ijih_submission_process'])->name('ijih.submission.process');
Route::get('/college-of-nursing/ijih/archives', [NursingController::class, 'ijih_archives'])->name('ijih.archives');
Route::get('/college-of-nursing/ijih/current-issue', [NursingController::class, 'ijih_current_issue'])->name('ijih.current_issue');
Route::get('/college-of-nursing/ijih/manuscript-form-submission', [NursingController::class, 'ijih_manuscript_submission'])->name('ijih.manuscript.submission');
Route::get('/college-of-nursing/study-material', [NursingController::class, 'nursing_study_material'])->name('nursing.study.material');

// Law
Route::get('/college-of-law-and-legal-studies', [LawController::class, 'index'])->name('law.home');
Route::get('/college-of-law-and-legal-studies/about-us', [LawController::class, 'law_overview'])->name('law.overview');
Route::get('/college-of-law-and-legal-studies/academic-calendar', [LawController::class, 'law_academic_calendar'])->name('law.academic.calendar');
Route::get('/college-of-law-and-legal-studies/anti-ragging-committee', [LawController::class, 'law_anti_ragging'])->name('law.anti.ragging');
Route::get('/college-of-law-and-legal-studies/college-highlight', [LawController::class, 'law_college_highlight'])->name('law.college.highlight');
Route::get('/college-of-law-and-legal-studies/contact-us', [LawController::class, 'law_contact_us'])->name('law.contact.us');
Route::get('/college-of-law-and-legal-studies/gallery', [LawController::class, 'law_gallery'])->name('law.gallery');
Route::get('/college-of-law-and-legal-studies/time-table', [LawController::class, 'law_time_table'])->name('law.time.table');
Route::get('/college-of-law-and-legal-studies/iqac', [LawController::class, 'law_iqac'])->name('law.iqac');
Route::get('/college-of-law-and-legal-studies/syllabus', [LawController::class, 'law_syllabus'])->name('law.syllabus');
Route::get('/college-of-law-and-legal-studies/principal', [LawController::class, 'law_principal'])->name('law.principal');
Route::get('/college-of-law-and-legal-studies/dean', [LawController::class, 'law_dean'])->name('law.dean');
Route::get('/college-of-law-and-legal-studies/crills', [LawController::class, 'law_crills'])->name('law.crills');
Route::get('/college-of-law-and-legal-studies/study-material', [LawController::class, 'law_study_material'])->name('law.study.material');

// Physical Education
Route::get('/tmimt-college-of-physical-education', [PhysicaleducationController::class, 'index'])->name('physical_education.home');
Route::get('/tmimt-college-of-physical-education/about-us', [PhysicaleducationController::class, 'physical_education_about_us'])->name('physical.education.about.us');
Route::get('/tmimt-college-of-physical-education/academic-calendar', [PhysicaleducationController::class, 'physical_education_academic_calendar'])->name('physical.education.academic.calendar');
Route::get('/tmimt-college-of-physical-education/anti-ragging-committee', [PhysicaleducationController::class, 'physical_education_anti_ragging'])->name('physical.education.anti.ragging');
Route::get('/tmimt-college-of-physical-education/college-highlight', [PhysicaleducationController::class, 'physical_education_college_highlight'])->name('physical.education.college.highlight');
Route::get('/tmimt-college-of-physical-education/contact-us', [PhysicaleducationController::class, 'physical_education_contact_us'])->name('physical.education.contact.us');
Route::get('/tmimt-college-of-physical-education/gallery', [PhysicaleducationController::class, 'physical_education_gallery'])->name('physical.education.gallery');
Route::get('/tmimt-college-of-physical-education/guest-lecture', [PhysicaleducationController::class, 'physical_education_guest_lecture'])->name('physical.education.guest.lecture');
Route::get('/tmimt-college-of-physical-education/iqac', [PhysicaleducationController::class, 'physical_education_iqac'])->name('physical.education.iqac');
Route::get('/tmimt-college-of-physical-education/syllabus', [PhysicaleducationController::class, 'physical_education_syllabus'])->name('physical.education.syllabus');
Route::get('/tmimt-college-of-physical-education/principal', [PhysicaleducationController::class, 'physical_education_principal'])->name('physical.education.principal');
Route::get('/tmimt-college-of-physical-education/time-table', [PhysicaleducationController::class, 'physical_education_timetable'])->name('physical.education.timetable');
Route::get('/tmimt-college-of-physical-education/study-material', [PhysicaleducationController::class, 'physical_education_study_material'])->name('physical.education.study.material');


// CRC Placement
Route::get('/tmu/corporate-resource-centre', [TmuController::class, 'crc_home'])->name('crc.home');
Route::get('/tmu/about-crc', [TmuController::class, 'crc_about_us'])->name('crc.about.us');
Route::get('/tmu/aims-and-objectives-crc', [TmuController::class, 'aims_and_objectives_crc'])->name('aims.and.objectives.crc');
Route::get('tmu/directors-desk-crc', [TmuController::class, 'directors_desk_crc'])->name('directors.desk.crc');
Route::get('/tmu/placement-rules', [TmuController::class, 'placement_rules'])->name('placement.rules');
Route::get('/tmu/crc-team', [TmuController::class, 'crc_team'])->name('crc.team');
Route::get('/tmu/our-recruiters', [TmuController::class, 'our_recruiters'])->name('our.recruiters');
Route::get('/tmu/industrial-collaborations', [TmuController::class, 'crc_collaboration'])->name('crc.collaboration');
Route::get('/tmu/corporate-testimonials', [TmuController::class, 'crc_corporate_testi'])->name('crc.corporate.testi');
Route::get('/tmu/student-testimonials', [TmuController::class, 'crc_student_testi'])->name('crc.student.testi');
Route::get('/tmu/industrial-visits', [TmuController::class, 'crc_industry_visits'])->name('crc.industry.visits');

//Alumni
Route::get('/alumni', [TmuController::class, 'alumni_home'])->name('alumni.home');
Route::get('/alumni/overview', [TmuController::class, 'alumni_overview'])->name('alumni.overview');
Route::get('/alumni/president-message', [TmuController::class, 'alumni_president_message'])->name('alumni.president.message');
Route::get('/alumni/alumni-association', [TmuController::class, 'alumni_association'])->name('alumni.association');
Route::get('/alumni/coordination-cell', [TmuController::class, 'alumni_coordination'])->name('alumni.coordination');
Route::get('/alumni/alumni-event-calendar', [TmuController::class, 'alumni_event_calendar'])->name('alumni.event.calendar');
Route::get('/alumni/alumni-donation', [TmuController::class, 'alumni_donation'])->name('alumni.donation');
Route::get('/alumni/gallery', [TmuController::class, 'alumni_gallery'])->name('alumni.gallery');
Route::get('/alumni/faq', [TmuController::class, 'alumni_faq'])->name('alumni.faq');
Route::get('/alumni/contact-us', [TmuController::class, 'alumni_contactus'])->name('alumni.contactus');


Route::get('/generate-sitemap', [SitemapController::class, 'generateSitemap']);

// pupil_academic_achievements
Route::get('tmu/pupil-academic-achievements', [TmuController::class, 'pupil_academic_achievements'])->name('pupil.academic.achievements');
Route::get('tmu/student-awards-achievements', [TmuController::class, 'student_awards_achievements'])->name('student.awards.achievements');


// Campus Gallery
Route::get('tmu/tmu-gallery', [TmuController::class, 'campus_gallery'])->name('campus.gallery');


// seed_money_grant_scheme
Route::get('tmu/policies-sops/seed-money-grant-scheme', [TmuController::class, 'seed_money_grant_scheme'])->name('seed.money.grant.scheme');



// research_statistical_database
Route::get('/tmu/research-statistical-database', [TmuController::class, 'research_statistical_database'])->name('research.statistical.database');


// tmu_moot_court
Route::get('/tmu/moot-court', [TmuController::class, 'tmu_moot_court'])->name('tmu.moot.court');

// PHD PRogrammes
Route::get('/tmu/doctoral-programs', [TmuController::class, 'phd_programmes_offered'])->name('phd.programmes.offered');

Route::get('/programme', [TmuController::class, 'master_programme_page'])->name('master.programme.page');

// Contact_us_main
Route::get('/contact-us', [TmuController::class, 'contact_us_main'])->name('contact.us.main');

Route::get('/assets/data/naac-data/Criterion-I/Key-Indicator-1.3/Metric-1.3.2/{file}', function ($file) {
    // Check if the file doesn't already have an extension
    if (!preg_match('/\.[a-zA-Z0-9]{2,4}$/', $file)) {
        // Append .pdf to the URL and redirect
        return redirect()->to("/assets/data/naac-data/Criterion-I/Key-Indicator-1.3/Metric-1.3.2/{$file}.pdf", 301);
    }

    // If the file has an extension, redirect as-is
    return redirect()->to("/assets/data/naac-data/Criterion-I/Key-Indicator-1.3/Metric-1.3.2/{$file}", 301);
});



// End of the Sarvagya Routes

//thisnis comment 
Route::get('/medical-college-and-research-centre/aebas-attendance', [AttendanceController::class, 'index'])->name('medical.aebas.attendance');
Route::get('/api/attendance', [AttendanceController::class, 'getActiveDates'])->name('attendance.active-dates');
Route::get('/attendance/download/{id}', [AttendanceController::class, 'downloadPdf'])->name('attendance.download');


//AEBES ROUTES

// View all Aebes
Route::get('/view/aebes', [AebesController::class, 'view'])->name('aebes.view');
// Show Add Form
Route::get('/add/aebes', [AebesController::class, 'create'])->name('aebes.add');
// Store New Record
Route::post('/store/aebes', [AebesController::class, 'store'])->name('aebes.store');
// Edit Aebes (with ID)
Route::get('/edit/aebes/{id}', [AebesController::class, 'edit'])->name('aebes.edit');
// Delete Aebes (with ID)
Route::post('/delete/aebes/{id}', [AebesController::class, 'destroy'])->name('aebes.delete');
// Route for updating AEBES record
Route::post('/update/aebes/{id}', [AebesController::class, 'update'])->name('aebes.update');