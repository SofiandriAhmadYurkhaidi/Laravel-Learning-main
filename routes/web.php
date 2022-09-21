<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Dinas;

use Illuminate\Http\Request;
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

Route::get('/dashboard', function () {
    $data = Dinas::all();
    return view('dashboard',['data'=>$data]);
});

Route::get('/update/{id}', function ($id) {
    return view('/update',['id'=>$id]);
});

Route::get('/delete/{id}', function ($id) {
    Dinas::where('kd_dl',$id)->delete();
    return redirect(
        '/dashboard'
    );
});

Route::get('/add', function () {
    return view('/add');
});


Route::post('/create', function (Request $request) {
    // dd($request->all());
    Dinas::create([
       'nip'=>$request->nip,
       'nama'=>$request->nama,
       'kota_asal'=>$request->kota_asal,
       'st_asal'=>$request->st_asal,
       'ket_asal'=>$request->ket_asal,
    ]);
    return redirect('/dashboard');
});

Route::post('/update/{id}', function (Request $request,$id) {
    // dd($request->all());
    Dinas::where('kd_dl',$id)->update([
       'kota_tujuan'=>$request->kota_tujuan,
       'st_pulang'=>$request->st_pulang,
       'ket_pulang'=>$request->ket_pulang,
    ]);
    return redirect('/dashboard');
});

Route::get('dashboard.blade', function () {
    return view('/add');
});
