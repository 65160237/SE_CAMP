<?php
use App\Http\Controllers\C_titles;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\MyController;
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

// Route::get('/', function () {
//     return view('welcome'); // welcome.blade.php
// });

// Route::get('/my-route',function(){
//     return view('myfolder.mypage');
// });

// Route::post('/my-route',function(Request $req){
//     $data['multi_x'] = $req->input('multi_x');
//     return view('myroute' , $data);
// });

// Route::post('/my-page', function(Request $req) {
//     $req->validate([
//         'back' => 'required|string',
//     ]);
//     $data['back'] = $req->input('back');
//     return view('back', $data);
// });
Route::resource('titles', C_titles::class);

Route::get('/my-controller',[MyController::class,'index']);
Route::get('/my-controller2','App\Http\Controllers\MyController@index');

Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('/my-controller3','MyController@index');
    Route::get('/my-controller3-post','MyController@store');
});
Route::resource('/my-controller4', MyController::class);

Route::get('/', function () {
    return view('welcome'); // welcome.blade.php
});

// use Illuminate\Http\Request;

Route::get('/my-route', function(){
    // return view('myroute');
    //        Key    =>  Value
    $data = ['val_a' => 'Hello World!'];
    $data['val_b'] = "Laravel";
    return view('myfolder.mypage',$data);
});


Route::post('/my-route', function(Request $req){
    $data['myinput'] =  $req->input('myinput');
    return view('myroute', $data);
});
