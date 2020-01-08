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
use App\User;
use Illuminate\Http\Request;
use App\Http\Controller\Auth;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/about', function(){
    return view('about');
});
Route::get('/register', function(){
    return view('register');
})->name('register');
Route::get('register/add', function(Request $request){
    $user=new User();
    $user->name=$request->name;
    $user->email=$request->email;
    $user->password=$request->password;
    $result=$user->save();
    return view('register',['confirmation'=>$result]);
    })->name('add');

Route::get('/login',function(){
    return view('login');
})->name('login');

Route::get('/session',function(){
    request()->validate(['email'=>['required', 'email'],'password'=>['required']]);
    $resultat=Auth()->attempt(['email'=>request('email'), 'password'=>request('password')]);
   return view('/session',['confirmation'=>$resultat]);
    })->name('session');

   Route::get('/List Client',function(){
        return view('client.ListClient');
    })->name('listClient');

    Route::get('/List Clients','ListclientController@getAll')->name('getAll');

Route::get('/Client',function(){
        return view('client.AjoutClient');
    })->name('ajoutClient');

Route::get('/Client.create','AjoutclientController@create')->name('createClient');

Route::get('/Ajout Compte',function(){
        return view('compt.AjoutCompt');
    })->name('ajoutCompte');

    Route::get('/Compte',function(){
        return view('compt.AjoutCompt');
    })->name('editCompte');

Route::get('List Clients.delete,$id','supprimerclientController@delete')->name('deleteClient');

Route::get('/Compte.create','AjoutcomptController@create')->name('createCompte');
/*Route::get('/register.create/{$data}','ResgisterController@create')->name('register');
*/
