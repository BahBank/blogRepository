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

// Route::verbe('nom_route', fnc_callback/action)

//get, post, put, delete, any

Route::get('/', function(){
    echo 'Page d accueil';
});

Route::get('categories', 'CategorieController@liste');

Route::get('categorie/{id}', 'CategorieController@getCategorie');

Route::get('add-categorie', 'CategorieController@getAdd');
Route::post('add-categorie', 'CategorieController@store');

Route::get('edit-categorie/{id}', 'CategorieController@getEdit');
Route::post('edit-categorie/{id}', 'CategorieController@postEdit');


Route::get('delete-categorie/{id}', 'CategorieController@getDelete');
//******** Mise à jour des article */
Route::get('add-article', 'ArticleController@getAddArticle');
Route::post('add-article', 'ArticleController@storeArticle');

Route::get('articles', 'ArticleController@listeArticle');

Route::get('article/{id}', 'ArticleController@getArticle');

Route::get('edit-article/{id}', 'ArticleController@getEditArticle');
Route::post('edit-article/{id}', 'ArticleController@postEditArticle');

Route::get('delete-article/{id}','ArticleController@getDeleteArticle');

 

