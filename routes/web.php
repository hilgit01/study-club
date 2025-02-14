<?php

use Illuminate\Support\Facades\Route;
// use App\Models\Student;
// use App\Models\Product;
use App\Http\Controllers\StudentController;


// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/tampilan', function () {
//     return view('tampilan');
// });

// Route::get('/tampilan/{nilai}', function ($nilai) {
//     return view('tampilan', ['var' => $nilai]);
// });

// Route::get('/tampilan/{nilai}/{nilai2}', function ($nilai, $nilai2) {
//     return view('tampilan', [
//         'nilai_1' => $nilai,
//         'nilai_2' => $nilai2
//     ]);
// });

// Route::get('/latihan110225/{nama}/{asal}/{prodi}/{angkatan}', function ($nama, $asal, $prodi, $angkatan) {
//     return view('latihan110225', [
//         'nama' => $nama,
//         'asal'=> $asal,
//         'prodi'=> $prodi,
//         'angkatan'=> $angkatan
//     ]);
// });

// // section baru

// Route::get('/dasboard', function () {
//     return view('latihan2/dasboard'); 
// }) -> name ('dasboard') ;

// Route::get('/daftar', function () {
//     return view('latihan2/daftar'); 
// }) -> name ('daftar');

// // section ujian

// Route::get('/my/home', function () {
//     return view('ujian.home');
// }) ->name ('my.home');

// Route::get('/my/main', function () {
//     return view('ujian.main');
// }) ->name ('my.main');

// Route::get('/my/nama', function () {
//     return view('ujian.nama');
// }) ->name ('my.nama');

// Route::get('/my/asal', function () {
//     return view('ujian.asal');
// }) ->name ('my.asal');

// Route::get('/my/prodi', function () {
//     return view('ujian.prodi');
// }) ->name ('my.prodi');

// Route::get('/my/angkatan', function () {
//     return view('ujian.angkatan');
// }) ->name ('my.angkatan');

// Route::get('/students', function () {
//     $students = Student::all();
//     return view("student", ["students" => $students]);
// });

// Route::get("/students/create", function () {
//     Student::create([
//         "nim"=> "989",
//         "name"=> "Anjani",
//         "prodi"=> "SI",
//         "angkatan"=> 2023,
//         "alamat"=> "Banjar",
//     ]);
// });

// Route::get("/students/update/{id}", function ($id) {
//     Student::find($id)->update([
//         "nim"=> "989",
//         "name"=> "Anjani",
//         "prodi"=> "SI",
//         "angkatan"=> 2023,
//         "alamat"=> "Banjar",
//     ]);
//     echo"Data dengan $id berhasil diupdate";
// });

// Route::get("/students/delete/{id}", function ($id) {
//     Student::find($id)->delete();
// });

// Route::get('/products', function () {
//     $products = Product::all();
//     return view("ujian.product", ["products" => $products]);
// });

// Route::get("/products/delete/{id}", function ($id) {
//     Product::find($id)->delete();
// });

// Route::get("/products/update/{id}", function ($id) {
//     Product::find($id)->update([
//         "code"=> 4,
//         "name"=> "Baju",
//         "description"=> "Kaos hitam",
//         "qty"=> 12,
//         "price"=> 10000,
//     ]);
//     echo"Data dengan $id berhasil diupdate";
// });


Route::resource("/student", StudentController::class);