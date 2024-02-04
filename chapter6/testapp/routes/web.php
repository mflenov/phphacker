<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

use App\Models\Blog;

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
    $list = Blog::all();

    //$list = [Blog::findOrFail(4)];
    //$list = [DB::table('blogs')->where('title', 'Test')->first()];
    //$list = [DB::table('blogs')->whereRaw('id =' . 1)->first()]; 
    return view('welcome', ['list' => $list]);
});


Route::get('/addblogitem', [BlogController::class, 'addblogitem']);
Route::post('/saveblogitem', [BlogController::class, 'saveblogitem']);