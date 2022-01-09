<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use App\Models\Home;
//use App\Http\Controllers\HomeController;

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
    return view('welcome');
});
Route::group(['prefix'=>'dashboard','middleware'=>'auth'],function (){
    Route::get('/', function () {
        if (Gate::allows('isAdmin')) {

            return view('admin.dashboard');

        } else if (Gate::allows('isManager')){
            $user=User::find(Auth::user()->id);
            $home=Home::where('user_id','=',$user->id)->withCount(['cellRequest'=>fn($query)=>$query->where('status','=',0),'cells'])->get();


            return view('manager.dashboard')->with('home',$home);

        }
        else if (Gate::allows('isUser'))
        {
            return view('dashboard');
        }

    })->middleware(['auth'])->name('dashboard');
    Route::resource('home','HomeController')->middleware(['auth']);
    Route::get('home/cell/{id}','HomeController@getCell')->name('home.cell');
    Route::resource('cell','CellController')->middleware(['auth']);
});



require __DIR__.'/auth.php';
