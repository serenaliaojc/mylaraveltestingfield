<?php

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

use Illuminate\Http\Request;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $links = \App\Link::all();
    // // with()
    // return view('welcome')->with('links', $links);
    // // dynamic method to name the variable
    // return view('welcome')->withLinks($links);
    return view('welcome', ['links' => $links]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/submit', function () {
    return view('submit');
});

Route::post('/submit', function (Request $request) {
    $data = $request->validate([
        'title' => 'required|max:255',
        'url' => 'required|url|max:255',
        'description' => 'required|max:255',
    ]);

    // use without tap
    // $link = new \App\Link($data);
    // $link->save();
    // return $link;

    // use without fillable
    // $link = new \App\Link;
    // $link->title = $data['title'];
    // $link->url = $data['url'];
    // $link->description = $data['description'];
    // $link->save();
    
    $link = tap(new App\Link($data))->save();

    return redirect('/');
});
