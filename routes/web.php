<?php

use App\Http\Controllers\MembershipRegisterController;
use App\Livewire\Blog;
use App\Livewire\Home;
use App\Livewire\Student;
use App\Livewire\ViewBlog;
use App\Livewire\About\FAQ;

use App\Livewire\Contactus;
use App\Livewire\SearchBlog;
use App\Livewire\About\About;
use App\Livewire\TeamMembers;

use App\Livewire\About\Ethics;

use App\Livewire\About\Council;
use App\Livewire\Hubs\Aviation;
use App\Livewire\Training\MCPD;
use App\Livewire\About\Chapters;

use App\Livewire\Career\Careers;
use App\Livewire\About\Composition;
use App\Livewire\Resource\ViewEvent;
use Illuminate\Support\Facades\Route;
use App\Livewire\Training\Masterclass;
use App\Livewire\Student\StudentResult;

use App\Livewire\About\VisionAndMission;
use App\Livewire\Education\StudyCenters;
use App\Livewire\Resource\ResourceEvent;

use App\Livewire\Resource\ResourceImage;
use App\Livewire\Resource\ResourceVideo;
use App\Livewire\Resource\ViewAllImages;
use App\Livewire\Student\StudentDiploma;
use App\Livewire\About\CouncilResolution;
use App\Livewire\Membership\MemberUpgrade;
use App\Livewire\Student\StudentAdmission;
use App\Livewire\Education\Examination\CPR;
use App\Livewire\Education\Examination\DPR;
use App\Livewire\Membership\MemberCategory;
use App\Livewire\Student\StudentCurriculum;
use App\Livewire\Student\StudentRequirment;
use App\Livewire\Student\StudentStudyCentre;
use App\Livewire\Membership\MemberInformation;
use App\Livewire\Training\AnnualLecture\Aminu;
use App\Livewire\Resource\ResourceDownloadables;
use App\Livewire\Downloadable\Publications\Books;
use App\Livewire\Education\AdvisoryBoard\Mandate;
use App\Livewire\Training\AnnualLecture\SamEpelle;
use App\Livewire\Education\AdvisoryBoard\Committiees;
use App\Livewire\Training\AnnualLecture\IgweNnaemeka;
use App\Livewire\Training\Conference\PRPractitioners;
use App\Livewire\Education\AdvisoryBoard\eComposition;
use App\Livewire\Education\Examination\QualifyingExams;
use App\Livewire\Training\Conference\AviationConference;
use App\Livewire\Training\Conference\DirectorsConference;
use App\Livewire\Training\Conference\DirectorsConferenceAndRetreat;

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

// Career
Route::get('/career', Careers::class)->name('career.index');

// About us Routes
Route::get('/about-us', About::class)->name('about-us.history');
Route::get('/about-us/vision-and-mission', VisionAndMission::class)->name('about-us.vision');
Route::get('/about-us/ethics', Ethics::class)->name('about-us.ethics');
Route::get('/about-us/council', Council::class)->name('about-us.council');
Route::get('/about-us/management/composition', Composition::class)->name('about-us.composition');
Route::get('/about-us/management/council-resolution',  CouncilResolution::class)->name('about-us.council-resolution');
Route::get('/about-us/management/chapters', Chapters::class)->name('about-us.chapters');
Route::get('/about-us/faq', FAQ::class)->name('about-us.faq');

// training
Route::get('/training/masterclass', Masterclass::class)->name('training.masterclass');
Route::get('/training/mcpd', MCPD::class)->name('training.mcp');
Route::get('/training/conference/aviation-conference', AviationConference::class)->name('training.conference.aviation');
Route::get('/training/conference/directors-conference', DirectorsConference::class)->name('training.conference.directors');
Route::get('/training/conference/directors-conference-and-retreat', DirectorsConferenceAndRetreat::class)->name('training.conference.directors-retreat');
Route::get('/training/conference/pr-practitioner-in-tertiary-institution', PRPractitioners::class)->name('training.conference.pr-practitioner');

Route::get('/training/annual-lecture/sam-epelle-memorial-gold-lecture', SamEpelle::class)->name('training.conference.sam-epelle');
Route::get('/training/annual-lecture/Igwe-nnaemeka-alfred-achebe-peace-and-reconciliation-annual-lecture-series', IgweNnaemeka::class)->name('training.conference.sam-epelle');
Route::get('/training/annual-lecture/his-highness-aminu-ado-bayero-national-integration-annual-lecture-series', Aminu::class)->name('training.conference.aminu');

// Education
Route::get('/education/advisory-board/mandate', Mandate::class)->name('education.mandate');
Route::get('/education/advisory-board/committees', Committiees::class)->name('education.committees');
Route::get('/education/advisory-board/composition', eComposition::class)->name('education.composition');

// examination
Route::get('/education/examination/cpr', CPR::class)->name('exam.cpr');
Route::get('/education/examination/dpr', DPR::class)->name('exam.dpr');
Route::get('/education/examination/qualifying-examination', QualifyingExams::class)->name('exam.qualifyingExam');
Route::get('/education/study-center', StudyCenters::class)->name('exam.studycenters');
Route::get('/education/finishing-school/lms', StudyCenters::class)->name('exam.studycenters');
Route::get('/education/finishing-school/faculty', StudyCenters::class)->name('exam.studycenters');



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
Route::get('/membership/registry', [MembershipRegisterController::class, 'index'])->name('member.registry');
Route::get('/membership/category', MemberCategory::class)->name('member.category');
Route::get('/membership/upgrade', MemberUpgrade::class)->name('member.upgrade');

// Blog
Route::get('/news/posts', Blog::class)->name('news.posts');
Route::get('/news/posts/{slug}', ViewBlog::class)->name('news.posts.view');
Route::get('/news/search/{title}', SearchBlog::class)->name('news.search');

// Hub
Route::get('/hub', Aviation::class)->name('hub.show');

// Contact
Route::get('/contact-us', Contactus::class)->name('contactus');

// Downloadable
Route::get('/downloadable/publications/books', Books::class)->name('resources.books');
Route::get('/downloadable/images', ResourceImage::class)->name('resources.image');
Route::get('/downloadable/images/{id}',  ViewAllImages::class)->name('resources.image.view');

Route::get('/downloadable/videos', ResourceVideo::class)->name('resources.video');

Route::get('/downloadable/downloadable', ResourceDownloadables::class)->name('resources.downloadable');

Route::get('/resources/up-coming-events', ResourceEvent::class)->name('resources.event');
Route::get('/resources/up-coming-events/{id}', ViewEvent::class)->name('resources.event.view');
