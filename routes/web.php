<?php

use App\Livewire\Blog;
use App\Livewire\Home;
use App\Livewire\Student;
use App\Livewire\ViewBlog;
use App\Livewire\Contactus;

use App\Livewire\About\About;
use App\Livewire\TeamMembers;
use App\Livewire\About\Ethics;
use App\Livewire\About\Council;

use App\Livewire\Resource\ViewEvent;

use Illuminate\Support\Facades\Route;
use App\Livewire\Student\StudentResult;
use App\Livewire\About\VisionAndMission;
use App\Livewire\Resource\ResourceEvent;

use App\Livewire\Resource\ResourceImage;
use App\Livewire\Resource\ResourceVideo;
use App\Livewire\Resource\ViewAllImages;
use App\Livewire\Student\StudentDiploma;
use App\Livewire\Membership\MemberUpgrade;
use App\Livewire\Student\StudentAdmission;

use App\Livewire\Membership\MemberCategory;
use App\Livewire\Student\StudentCurriculum;
use App\Livewire\Student\StudentRequirment;

use App\Livewire\Student\StudentStudyCentre;
use App\Livewire\Membership\MemberInformation;
use App\Livewire\Resource\ResourceDownloadables;

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

Route::get('/',  Home::class)->name('home');
Route::get('/team-members', TeamMembers::class)->name('team.members');

// About us Routes
Route::get('/about-us', About::class)->name('about-us.history');
Route::get('/about-us/vision-and-mission', VisionAndMission::class)->name('about-us.vision');
Route::get('/about-us/ethics', Ethics::class)->name('about-us.ethics'); 
Route::get('/about-us/council', Council::class)->name('about-us.council'); 

// Students Routes
Route::get('/student/professional-certificate', Student::class)->name('student.professional-certificate'); 
Route::get('/student/professional-diploma', StudentDiploma::class)->name('student.professional-diploma'); 
Route::get('/student/professional-admission', StudentAdmission::class)->name('student.professional-admission'); 
Route::get('/student/result', StudentResult::class)->name('student.result'); 
Route::get('/student/study-centre', StudentStudyCentre::class)->name('student.study-centre'); 
Route::get('/student/requirements', StudentRequirment::class)->name('student.requirements'); 
Route::get('/student/curriculum', StudentCurriculum::class)->name('student.curriculum'); 

// Member route 
Route::get('/membership/information', MemberInformation::class)->name('member.information'); 
Route::get('/membership/category', MemberCategory::class)->name('member.category'); 
Route::get('/membership/upgrade', MemberUpgrade::class)->name('member.upgrade'); 

// Blog
Route::get('/news/posts', Blog::class)->name('news.posts'); 
Route::get('/news/posts/{slug}', ViewBlog::class)->name('news.posts.view'); 

// Contact
Route::get('/contact-us', Contactus::class)->name('contactus'); 

// Resources
Route::get('/resources/images', ResourceImage::class)->name('resources.image');
Route::get('/resources/images/{id}',  ViewAllImages::class)->name('resources.image.view');

Route::get('/resources/videos', ResourceVideo::class)->name('resources.video');

Route::get('/resources/downloadable', ResourceDownloadables::class)->name('resources.downloadable');

Route::get('/resources/up-coming-events', ResourceEvent::class)->name('resources.event');
Route::get('/resources/up-coming-events/{id}', ViewEvent::class)->name('resources.event.view');
