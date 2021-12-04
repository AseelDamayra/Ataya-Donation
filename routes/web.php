<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CausesController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\SeekerController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ComposeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\AdminDataController as AdminDataController;
use App\Http\Controllers\Admin\SmallProjectController as SmallProjectController;
use App\Http\Controllers\Admin\StudentshipController as StudentshipController;
use App\Http\Controllers\Admin\EmergencyController as EmergencyController;
use App\Http\Controllers\Admin\ViewProductController as ViewProductController;
use App\Http\Controllers\Admin\VolunteerController as VController;
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
//home
Route::get('/', [HomeController::class,'index']);
//error
Route::get('error', [HomeController::class,'error']);
//about
Route::get('about', [AboutController::class,'about']);
//blog
Route::get('blog', [BlogController::class,'blog']);
Route::get('blog/details/{id}', [BlogController::class,'details']);
//contact
Route::get('contact_us', [ComposeController::class,'compose']);
Route::post('contact_us/send', [ComposeController::class,'send']);
//causes
Route::get('viewproduct', [CausesController::class,'viewproduct']);
Route::get('studentship', [CausesController::class,'studentship']);
Route::get('smallproject', [CausesController::class,'smallproject']);
Route::get('emergency', [CausesController::class,'emergency']);
Route::get('viewproduct/details/{id}', [CausesController::class,'viewproductDetails']);
Route::get('studentship/details/{id}', [CausesController::class,'studentshipDetails']);
Route::get('smallproject/details/{id}', [CausesController::class,'smallprojectDetails']);
Route::get('emergency/details/{id}', [CausesController::class,'emergencyDetails']);
//volunteer
Route::get('volunteer', [VolunteerController::class,'volunteer']);
//seeker
Route::get('seeker', [SeekerController::class,'seeker'])->middleware('seeker');
//help window
Route::get('help', [HomeController::class,'help']);

Route::middleware('is-login')->group(function(){
//logout
Route::get('logout',[AuthController::class,'logout']);
//comment
Route::post('comment/send', [BlogController::class,'send']);
//profile
Route::get('profile',[ProfileController::class,'profile']);
Route::post('profile/update',[ProfileController::class,'sendUpdateInfo']);
Route::post('profile/updatePass',[ProfileController::class,'sendUpdatepass']);
//volunteer
Route::post('volunteer/send', [VolunteerController::class,'send']);
//seeker
Route::post('seeker/send', [SeekerController::class,'send']);
//request product
Route::get('viewproduct/request/{id}', [CausesController::class,'viewproductRequest']);
//donate
Route::get('smallproject/donate/{id}', [DonateController::class,'smallproject'])->middleware('donar');
Route::post('smallproject/donate/{id}', [DonateController::class,'smallprojectDonate']);

Route::get('studentship/donate/{id}', [DonateController::class,'studentship'])->middleware('donar');
Route::post('studentship/donate/{id}', [DonateController::class,'studentshipDonate']);
});


Route::middleware('is-guest')->group(function(){

    //auth
    Route::get('register', [AuthController::class,'getRegisterForm']);
    Route::post('register',[AuthController::class,'register']);
    Route::get('login', [AuthController::class,'getloginForm']);  
    Route::post('login',[AuthController::class,'login']) ; 
    
});

Route::prefix('/dashboard')->middleware(['dashboard'])->group(function(){

    Route::get('/',[AdminHomeController::class,'index']) ; 
    Route::get('/blog',[AdminBlogController::class,'blog']) ; 
    Route::post('/blog',[AdminBlogController::class,'send']) ; 
    Route::get('/tableBlog',[AdminBlogController::class,'Tableshow']) ; 
    Route::get('/deleteBlog/{blog}',[AdminBlogController::class,'deleteBlog']) ; 
    Route::get('/admindata',[AdminDataController::class,'adminData']) ; 
    Route::post('/admindata',[AdminDataController::class,'send']) ; 
    Route::get('/admindataTable',[AdminDataController::class,'adminDataTable']) ; 
    Route::get('/adminDelete/{adminD}',[AdminDataController::class,'deleteadmin']) ; 
    Route::post('/adminupdate',[AdminDataController::class,'updateadmin']) ; 

    Route::get('/smallproject',[SmallProjectController::class,'smallproject']) ; 
    Route::get('/smallprojectAcc/{Accp}',[SmallProjectController::class,'AcceptProject']) ; 
    Route::get('/smallprojectDelete/{smallp}',[SmallProjectController::class,'deleteproject']) ;

    Route::get('/studentship',[StudentshipController::class,'studentship']) ; 
    Route::get('/studentshiptAcc/{Accp}',[StudentshipController::class,'Acceptstudent']) ; 
    Route::get('/studentshipDelete/{sudent}',[StudentshipController::class,'deletestudent']) ;

    Route::get('/Emergency',[EmergencyController::class,'Emergency']) ; 
    Route::get('/EmergencyAcc/{Accem}',[EmergencyController::class,'Acceptem']) ; 
    Route::get('/EmergencyDelete/{em}',[EmergencyController::class,'deleteem']) ;

    Route::get('/viewProduct',[ViewProductController::class,'viewProduct']) ; 
    Route::get('/viewProductAcc/{Accproduct}',[ViewProductController::class,'Acceptp']) ; 
    Route::get('/viewProductDelete/{product}',[ViewProductController::class,'deletep']) ;

    Route::get('/volunteer',[VController::class,'volunteer']) ; 
    Route::get('/volunteerAcc/{Accvolunteer}',[VController::class,'Acceptv']) ; 
    Route::get('/volunteerDelete/{volunteer}',[VController::class,'deletev']) ;
    
});



