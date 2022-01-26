<?php
use App\Http\Controllers\SkillsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectCategoryController;
use App\Http\Controllers\ProjectsController;
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

Route::get('/', function () {
    return view('site/main');
})->name('site');

Route::get('/admin', function () {
    return view('admin/home');
})->name('admin');

//****PROJECTS START
        Route::get('/admin/projects', function () {
            return view('admin/projects');
        })->name('projects');
//****PROJECTS END

Route::get('/admin/messages', function () {
    return view('admin/messages');
})->name('messages');

//****SKILLS START
        Route::get('/admin/skills',  [SkillsController::class,'all_data_list'])->name('skills');

        Route::get('/admin/skills/add', function () {
            return view('admin/skills/add');
        })->name('skills/add');

        Route::post('/admin/skills/add/submit', [SkillsController::class,'submit'])->name('skills/add/submit');

        Route::get('/admin/skills/edit/{id}', [SkillsController::class,'edit_skill'])->name('skills/edit');//prosto esli link takoy

        Route::post('/admin/skills/edit/{id}',[SkillsController::class,'update_skills'])->name('skill_update');//yesli polucem danniye s takoqo je lionka kak na verxu

        Route::get('/admin/skills/delete/{id}',[SkillsController::class,'skill_delete'])->name('skills-delete');
//*****SKILLS END


//*****Project Category Start

Route::get('/admin/project_category',[ProjectCategoryController::class,'list_view'])->name('project_category');
Route::get('/admin/project_category/add/',function (){return view('admin/project_cat/add');})->name('project_category-add');
Route::post('/admin/project_category/add',[ProjectCategoryController::class,'add'])->name('adding-cat');
Route::get('/admin/project_category/edit/{id}',[ProjectCategoryController::class,'edit_page'])->name('edit-procat');
Route::post('/admin/project_category/edit/{id}',[ProjectCategoryController::class,'edit_event'])->name('edit-procat-event');
Route::get('/admin/project_category/delete/{id}',[ProjectCategoryController::class,'delete_procat'])->name('delete-cat');

//*****Project Category End

//***********//***********Projects Start

Route::get('/admin/projects',[ProjectsController::class,'list_view'])->name('projects');
    ///TODO::
    /// iz project category vzat vsyo
    /// dobavit vozmojnost zaqrujat foto(udalat dobavlat i menat)
    /// dobavit <select> s kateqoriyami
    ///nacat vivodit danniye na sayt
    ///proekti,skilli,nadpisi(mojno i propisat v view vrucnuyu)
    ///poprobovat pomenat okrujnosti s procentami skillov i vivodit iz admin paneli
//***********//***********Projects End


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
