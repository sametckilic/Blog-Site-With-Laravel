<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BackController;





Route::get('/', [MainController::class, 'homepage'])->name("index");
Route::get('/about', [MainController::class, 'aboutMe'])->name("aboutMe");
Route::get("/contact", [MainController::class, 'contact'])->name("contact");
Route::post('/contact', [MainController::class, 'contactPost'])->name("contactPost");
Route::get("/post/{id}", [MainController::class, "single"])->name("single");
Route::post("/post/{id}/store",[MainController::class, "storecomment"])->name("storecomment");


Route::get('/posts/{category}', [MainController::class, "categorypost"])->name("categorypost");


Route::get("/admin/login", [MainController::class, "login"])->name("login");
Route::post("/admin/login", [MainController::class, "loginPost"])->name("loginpost");

Route::get('admin/panel', [MainController::class, "admin"])->middleware("isAdmin")->name("admin");
Route::get('/logout', [MainController::class, 'logout'])->middleware("isAdmin")->name('logout');

Route::get("admin/posts", [BackController::class,'index'])->middleware("isAdmin")->name("showarticles");
Route::get("admin/posts/create", [BackController::class,'create'])->middleware("isAdmin")->name("createarticle");
Route::post("admin/posts/store",[BackController::class,'store'])->middleware("isAdmin")->name("articlestore");

Route::get("admin/posts/edit/{id}", [BackController::class,'edit'])->middleware("isAdmin")->name("editarticle");
Route::put("admin/posts/update/{id}",[BackController::class,'update'])->middleware("isAdmin")->name("articleupdate");
Route::get("admin/posts/delete/{id}",[BackController::class, 'delete'])->middleware("isAdmin")->name("deletearticle");
Route::get("admin/posts/categories",[BackController::class, 'Categories'])->middleware("isAdmin")->name("categories");
Route::get("admin/posts/categories/delete/{name}",[BackController::class, 'deleteCategories'])->middleware("isAdmin")->name("deletecategories");
Route::post("admin/posts/categories/store",[BackController::class, 'storeCategories'])->middleware("isAdmin")->name("storecategories");
Route::get("admin/contacts", [BackController::class,'contacts'])->middleware("isAdmin")->name("contacts");
Route::get("admin/infos", [BackController::class,'showInfos'])->middleware("isAdmin")->name("infos");
Route::put("admin/infos/update", [BackController::class,'updateInfos'])->middleware("isAdmin")->name("updateinfos");
Route::get("admin/posts/{id}/delete/{photoID}",[BackController::class,'deletePhoto'])->middleware("isAdmin")->name("deletePhoto");







