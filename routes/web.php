<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

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

Route::get('/', HomeController::class);

Route::get('/posts',  [PostController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create']);

Route::get('/posts/{post}', [PostController::class, 'show']);

// Route::get('/posts/{post}', function($post, $categoria){
//     return "Aquí se mostrará el $post de la categoría $categoria";
// });

//Get
//Post
//Put
//Patch
//Delete

Route::get('prueba', function(){

    // Crear nuevo post
    // $post = new Post;

    // $post->title = 'Título de prueba 3';
    // $post->content = 'Contenido de prueba 3';
    // $post->categoria = 'Categoria de prueba 3';

    // $post->save();

    // $post = Post::find(1);

    // Actualizar registro
    // $post = Post::where('title', 'Titulo de prueba 1')
    //         ->first();
    
    // $post->categoria = 'Desarrollo web';
    // $post->save();

    // return $post;

    // $posts = Post::orderBy('categoria', 'asc')
    //                 ->select('id', 'title', 'categoria')
    //                 ->take(2)
    //                 ->get();

    // return $posts;

    $post = Post::find(1);

    $post->delete();
    
    return "Eliminado correctamente";
});