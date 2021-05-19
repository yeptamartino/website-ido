<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();
Route::get('/', [App\Http\Controllers\PageController::class, 'home']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');









// Route::get('agendas', [App\Http\Controllers\AgendaController::class, 'index']);
// Route::get('agendas/create', [App\Http\Controllers\AgendaController::class, 'create']);
// Route::get('agendas/{agenda}', [App\Http\Controllers\AgendaController::class, 'show')];
// Route::post('/agendas', [App\Http\Controllers\AgendaController::class, 'store']);
// Route::delete('/agendas/{agenda}', [App\Http\Controllers\AgendaController::class, 'destroy']);
// Route::get('agendas/{agenda}/edit', [App\Http\Controllers\AgendaController::class, 'edit')];
// Route::patch('/agendas/{agenda}', [App\Http\Controllers\AgendaController::class, 'update']);

// Route::get('news', [App\Http\Controllers\NewsController::class, 'index']);
// Route::get('news/create', [App\Http\Controllers\NewsController::class, 'create']);
// Route::get('news/{news}', [App\Http\Controllers\NewsController::class, 'show')];
// Route::post('/news', [App\Http\Controllers\NewsController::class, 'store']);
// Route::delete('/news/{news}', [App\Http\Controllers\NewsController::class, 'destroy']);
// Route::get('news/{news}/edit', [App\Http\Controllers\NewsController::class, 'edit')];
// Route::patch('/news/{news}', [App\Http\Controllers\NewsController::class, 'update']);


// Route::get('contacts', [App\Http\Controllers\ContactController::class, 'index']);
// Route::get('contacts/create', [App\Http\Controllers\ContactController::class, 'create']);

// Route::get('contacts/{contact}', [App\Http\Controllers\ContactController::class, 'show')];

// Route::post('/contacts', [App\Http\Controllers\ContactController::class, 'store']);
// Route::delete('/contacts/{contact}', [App\Http\Controllers\ContactController::class, 'destroy']);
// Route::get('contacts/{contact}/edit', [App\Http\Controllers\ContactController::class, 'edit')];
// Route::patch('/contacts/{contact}', [App\Http\Controllers\ContactController::class, 'update']);

// Route::get('mentors', [App\Http\Controllers\MentorController::class, 'index']);
// Route::get('mentors/create', [App\Http\Controllers\MentorController::class, 'create']);
// Route::get('mentors/{mentor}', [App\Http\Controllers\MentorController::class, 'show')];
// Route::post('/mentors', [App\Http\Controllers\MentorController::class, 'store']);
// Route::delete('/mentors/{mentor}', [App\Http\Controllers\MentorController::class, 'destroy']);
// Route::get('mentors/{mentor}/edit', [App\Http\Controllers\MentorController::class, 'edit')];
// Route::patch('/mentors/{mentor}', [App\Http\Controllers\MentorController::class, 'update']);

// Route::get('admins', [App\Http\Controllers\AdminController::class, 'index']);
// Route::get('admins/create', [App\Http\Controllers\AdminController::class, 'create']);
// Route::get('admins/{admin}', [App\Http\Controllers\AdminController::class, 'show')];
// Route::post('/admins', [App\Http\Controllers\AdminController::class, 'store']);
// Route::delete('/admins/{admin}', [App\Http\Controllers\AdminController::class, 'destroy']);
// Route::get('admins/{admin}/edit', [App\Http\Controllers\AdminController::class, 'edit')];
// Route::patch('/admins/{admin}', [App\Http\Controllers\AdminController::class, 'update']);


// Route::get('sliders', [App\Http\Controllers\SliderController::class, 'index']);
// Route::get('sliders/create', [App\Http\Controllers\SliderController::class, 'create']);
// Route::get('sliders/{slider}', [App\Http\Controllers\SliderController::class, 'show')];
// Route::post('/sliders', [App\Http\Controllers\SliderController::class, 'store']);
// Route::delete('/sliders/{slider}', [App\Http\Controllers\SliderController::class, 'destroy']);
// Route::get('sliders/{slider}/edit', [App\Http\Controllers\SliderController::class, 'edit')];
// Route::patch('/sliders/{slider}', [App\Http\Controllers\SliderController::class, 'update']);

// Route::get('videos', [App\Http\Controllers\VideoController::class, 'index']);
// Route::get('videos/create', [App\Http\Controllers\VideoController::class, 'create']);
// Route::get('videos/{video}', [App\Http\Controllers\VideoController::class, 'show')];
// Route::post('/videos', [App\Http\Controllers\VideoController::class, 'store']);
// Route::delete('/videos/{video}', [App\Http\Controllers\VideoController::class, 'destroy']);
// Route::get('videos/{video}/edit', [App\Http\Controllers\VideoController::class, 'edit')];
// Route::patch('/videos/{video}', [App\Http\Controllers\VideoController::class, 'update']);

// Route::get('histories', [App\Http\Controllers\HistoryController::class, 'index']);
// Route::get('histories/create', [App\Http\Controllers\HistoryController::class, 'create']);
// Route::get('histories/{history}', [App\Http\Controllers\HistoryController::class, 'show')];
// Route::post('/histories', [App\Http\Controllers\HistoryController::class, 'store']);
// Route::delete('/histories/{history}', [App\Http\Controllers\HistoryController::class, 'destroy']);
// Route::get('histories/{history}/edit', [App\Http\Controllers\HistoryController::class, 'edit')];
// Route::patch('/histories/{history}', [App\Http\Controllers\HistoryController::class, 'update']);

// Route::get('organizational-structures', [App\Http\Controllers\OrganizationalStructureController::class, 'index']);
// Route::get('organizational-structures/create', [App\Http\Controllers\OrganizationalStructureController::class, 'create']);
// Route::get('organizational-structures/{organizational_structure}', [App\Http\Controllers\OrganizationalStructureController::class, 'show')];
// Route::post('/organizational-structures', [App\Http\Controllers\OrganizationalStructureController::class, 'store']);
// Route::delete('/organizational-structures/{organizational_structure}', [App\Http\Controllers\OrganizationalStructureController::class, 'destroy']);
// Route::get('organizational-structures/{history}/edit', [App\Http\Controllers\OrganizationalStructureController::class, 'edit')];
// Route::patch('/organizational-structures/{organizational_structure}', [App\Http\Controllers\OrganizationalStructureController::class, 'update']);


// Route::get('photo-galeries', [App\Http\Controllers\PhotoGaleryController::class, 'index']);
// Route::get('photo-galeries/create', [App\Http\Controllers\PhotoGaleryController::class, 'create']);
// Route::get('photo-galeries/{photo_galery}', [App\Http\Controllers\PhotoGaleryController::class, 'show')];
// Route::post('/photo-galeries', [App\Http\Controllers\PhotoGaleryController::class, 'store']);
// Route::delete('/photo-galeries/{photo_galery}', [App\Http\Controllers\PhotoGaleryController::class, 'destroy']);
// Route::get('photo-galeries/{photo_galery}/edit', [App\Http\Controllers\PhotoGaleryController::class, 'edit')];
// Route::patch('/photo-galeries/{photo_galery}', [App\Http\Controllers\PhotoGaleryController::class, 'update']);

// Route::get('vision-missions', [App\Http\Controllers\VisionMissionController::class, 'index']);
// Route::get('vision-missions/create', [App\Http\Controllers\VisionMissionController::class, 'create']);
// Route::get('vision-missions/{vision_mission}', [App\Http\Controllers\VisionMissionController::class, 'show')];
// Route::post('/vision-missions', [App\Http\Controllers\VisionMissionController::class, 'store']);
// Route::delete('/vision-missions/{vision_mission}', [App\Http\Controllers\VisionMissionController::class, 'destroy']);
// Route::get('vision-missions/{vision_mission}/edit', [App\Http\Controllers\VisionMissionController::class, 'edit')];
// Route::patch('/vision-missions/{vision_mission}', [App\Http\Controllers\VisionMissionController::class, 'update']);


// Route::get('announcements', [App\Http\Controllers\AnnouncementController::class, 'index']);
// Route::get('announcements/create', [App\Http\Controllers\AnnouncementController::class, 'create']);
// Route::get('announcements/{announcement}', [App\Http\Controllers\AnnouncementController::class, 'show')];
// Route::post('/announcements', [App\Http\Controllers\AnnouncementController::class, 'store']);
// Route::delete('/announcements/{announcement}', [App\Http\Controllers\AnnouncementController::class, 'destroy']);
// Route::get('announcements/{announcement}/edit', [App\Http\Controllers\AnnouncementController::class, 'edit')];
// Route::patch('/announcements/{announcement}', [App\Http\Controllers\AnnouncementController::class, 'update']);


// Route::get('pengumuman', [App\Http\Controllers\PageController::class, 'announ]cement');
// Route::get('sejarah-sekolah', [App\Http\Controllers\PageController::class, 'histor]y');
// Route::get('visi-misi', [App\Http\Controllers\PageController::class, 'vision]Mission');
// Route::get('galery-foto', [App\Http\Controllers\PageController::class, 'galery]Photo');
// Route::get('galery-video', [App\Http\Controllers\PageController::class, 'galery]Video');
// Route::get('berita-sekolah', [App\Http\Controllers\PageController::class, 'news')];
// Route::get('berita-terbaru/{berita}', [App\Http\Controllers\PageController::class, 'newsDe]tail');

// Route::get('hubungi-kami', [App\Http\Controllers\ContactUserController::class, 'index']);
// Route::get('hubungi-kami/create', [App\Http\Controllers\ContactUserController::class, 'create']);
// Route::get('hubungi-kami/{contact}', [App\Http\Controllers\ContactUserController::class, 'show')];
// Route::post('/hubungi-kami', [App\Http\Controllers\ContactUserController::class, 'store']);
// Route::delete('/hubungi-kami/{contact}', [App\Http\Controllers\ContactUserController::class, 'destroy']);
// Route::get('hubungi-kami/{contact}/edit', [App\Http\Controllers\ContactUserController::class, 'edit')];
// Route::patch('/hubungi-kami/{contact}', [App\Http\Controllers\ContactUserController::class, 'update']);


Route::resource('news', App\Http\Controllers\NewsController::class);
Route::resource('announcements', App\Http\Controllers\AnnouncementController::class);
Route::resource('photo-galeries', App\Http\Controllers\PhotoGaleryController::class);
Route::resource('mentors', App\Http\Controllers\MentorController::class);
Route::resource('students', App\Http\Controllers\StudentController::class);
Route::resource('videos', App\Http\Controllers\VideorController::class);
Route::resource('sliders', App\Http\Controllers\SliderController::class);
Route::resource('histories', App\Http\Controllers\HistoryController::class);
Route::resource('vision-missions', App\Http\Controllers\VisionMissionController::class);