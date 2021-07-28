<?php

use App\Http\Livewire\Admin\AdminAddBlogs;
use App\Http\Livewire\Admin\AdminAddTopics;
use App\Http\Livewire\Admin\AdminBlogs;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminTopics;
use App\Http\Livewire\BlogList;
use App\Http\Livewire\DetailBlog;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogsController;
use App\Http\Livewire\Admin\AdminAbout;
use App\Http\Livewire\Admin\AdminAddAbout;
use App\Http\Livewire\Admin\AdminEditAbout;
use App\Http\Livewire\Admin\AdminEditTopic;
use App\Http\Livewire\Admin\AdminPanel;

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



Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
});

Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function(){
    Route::get('/admin/panel',AdminPanel::class)->name('admin.panel');
    Route::get('/admin/topics',AdminTopics::class)->name('admin.topics');
    Route::get('/admin/topics/add',AdminAddTopics::class)->name('admin.addtopics');
    Route::get('/admin/topics/edit/{topic_slug}',AdminEditTopic::class)->name('admin.edittopic');
    Route::get('/admin/blogs',AdminBlogs::class)->name('admin.blogs');
    Route::get('/admin/blogs/create', [BlogsController::class, 'create'])->name('blog.create');
    Route::post('/admin/blogs/store', [BlogsController::class, 'store'])->name('blog.store');
    Route::delete('/admin/blogs/{id}', [BlogsController::class, 'destroy'])->name('blog.destroy');
    Route::get('/admin/blogs/edit/{id}',[BlogsController::class, 'edit'])->name('blog.edit');
    Route::post('/admin/blogs/edit',[BlogsController::class, 'update'])->name('blog.update');
    Route::get('/admin/about',AdminAbout::class)->name('admin.about');
    Route::get('/admin/about/add',AdminAddAbout::class)->name('admin.addabout');
    Route::get('/admin/about/edit/{about_slug}',AdminEditAbout::class)->name('admin.editabout');
});


Route::get('/bloglist',BlogList::class)->name('bloglist'); 
Route::get('/{urlslug}',DetailBlog::class);
Route::get('/',HomeComponent::class);