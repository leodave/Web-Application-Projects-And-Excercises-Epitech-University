<?php
use App\Models\Freeads;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdvertController;
use App\Models\Users;


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


Route::get('/home', function () 
{
   return view('welcome');
});
//Route::get('/home1', [ AdvertController::class, 'Advert']); 
// Route::post('/Deleteproduct', [ AdvertController::class, 'delete']);
Route::get("/myads", [AdvertController::class, 'indexad']); 
Route::get('/myusers', [ AdvertController::class, 'myusers']);
// Route::get('/Freeads/{id}', ['as'=>'crud.view','uses' =>'AdvertController@view']); 
Route::get('/Freeads/{id}/view', [ AdvertController::class, 'viewad']);
Route::get('/Freeads/add', [ AdvertController::class, 'createad']);
Route::post('/Freeads/save', [ AdvertController::class, 'storead']);
Route::get('/Freeads/return', [ AdvertController::class, 'indexad']);
Route::get('/Freeads/{id}/edit', [ AdvertController::class, 'editad']);
Route::post('Freeads/update', [ AdvertController::class, 'updatead']);
Route::post('/Freeads/del/{id}', [ AdvertController::class, 'destroyad'])->name("del");
//Route::delete('/Freeads/{id}', [ AdvertController::class, 'destroy']);
Route::get("/myuser", [AdvertController::class, 'indexuser']); 
Route::get('/Users/{id}/view', [ AdvertController::class, 'viewuser']);
Route::get('/Users/add', [ AdvertController::class, 'createuser']);
Route::post('/Users/save', [ AdvertController::class, 'storeuser']);
Route::get('/Users/return', [ AdvertController::class, 'indexuser']);
Route::get('/Users/{id}/edit', [ AdvertController::class, 'edituser']);
Route::post('Users/update', [ AdvertController::class, 'updateuser']);
Route::get('/Users/add', [ AdvertController::class, 'createuser']);
Route::post('/Users/save', [ AdvertController::class, 'storeuser']);
Route::post('Users/update', [ AdvertController::class, 'updateuser']);
Route::post('/Freeads/delete/{id}', [ AdvertController::class, 'destroyuser'])->name("delete");
//Route::post('/Users/delete/{id}', [ AdvertController::class, 'destroyuser'])->name("delete");
//Route::delete('/Freeads/{id}', [ AdvertController::class, 'destroy']);
Route::get('/viewlogin', [ AdvertController::class, 'viewlogin']);
Route::post('/postlogin',[ AdvertController::class, 'process_login']);
Route::get('/viewregister',[ AdvertController::class, 'viewregister']);
Route::post('/postregister',[ AdvertController::class, 'process_register']);
Route::get('/viewadmin',[ AdvertController::class, 'viewadmin']);
Route::post('/postadmin',[ AdvertController::class, 'admin']);


Route::namespace('Auth')->group(function () {
    Route::get('/login','AdvertController@show_login_form')->name('login');
    Route::post('/login','AdvertController@process_login')->name('login');
    Route::get('/register','AdvertController@show_signup_form')->name('register');
    Route::post('/register','AdvertController@process_signup');
    Route::post('/logout','AdvertController@logout')->name('logout');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/search',[SearchController::class, 'search'])->name('web.search');

