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

Route::get('/', function () {
    return view('welcome');
});

// route basic
Route::get('tentang', function () {
    //mereturn string
    return "<h1>Hello</h1>"
    . "selamat datang di webapp saya"
    . "Laravel emang keren";
});

Route::get('whildan', function () {
    // mereturn string
    $nama1 = "Whildan nur salim";
    $umur1 = "17";
    $alamat1 = "cibedug hilir";
    $tgl1 = "03 Januari 2004";
    return view('profile', compact('nama1','umur1','alamat1','tgl1'));
});

Route::get('Naruto', function () {
    // mereturn string
    $nama1 = "Naruto uzumaki";
    $umur1 = "30";
    $alamat1 = "Konoha";
    $tgl1 = "20 Maret 1992";
    return view('profile', compact('nama1','umur1','alamat1','tgl1'));
});

Route::get('boruto', function () {
    // mereturn string
    $nama1 = "Boruto uzumaki";
    $umur1 = "14";
    $alamat1 = "Konoha";
    $tgl1 = "10 April 2007";
    return view('profile', compact('nama1','umur1','alamat1','tgl1'));
});

Route::get('hima', function () {
    // mereturn string
    $nama1 = "himawari uzumaki";
    $umur1 = "9";
    $alamat1 = "Konoha";
    $tgl1 = "6 agustus 2010";
    return view('profile', compact('nama1','umur1','alamat1','tgl1'));
});

Route::get('whildanuzumaki', function () {
    // mereturn string
    $nama1 = "Whildan uzumaki";
    $umur1 = "17";
    $alamat1 = "cibedug hilir";
    $tgl1 = "03 Januari 2004";
    return view('profile', compact('nama1','umur1','alamat1','tgl1'));
});

//route parameter
Route::get( 'biodata/{nama}/{alamat}/{jeniskelamin}/{tb}/{bb}', function ($a,$b,$c,$d,$e) {
    return view("biodata", compact('a','b','c','d','e'));
});

//optional parameter
Route::get('post/{id}', function ($a = 1){
    return "Halaman posting ke - <b>$a</b>";
});

// ubah route biodata yang di atas ke dalam route optional parameter jika salah satu dari paramter tidak diisi secara
// berurutan, maka tidak ditampilkan, jika tidak diisi maka ada keterangan "isi dulu biodata anda"
//boleh pake view boleh tidak

Route::get( 'biodata1/{nama?}/{alamat?}/{jeniskelamin?}/{tb?}/{bb?}', function (
    $nama = null,$alamat = null,$jeniskelamin = null,$tb = null,$bb = null) {
    return view("biodata1", compact('nama','alamat','jeniskelamin','tb','bb'));
});

// Mengakses data melalui model
Route::get('testmodel', function () {
    $query = App\Models\Post::all();
    return $query;
});

// Mencari data berdasarkan parameter 'id'
Route::get('testmodel/{id}', function ($id) {
    $query = App\Models\Post::find($id);
    return $query;
});

// Mencari data berdasarkan field 'title' yang sama dengan parameter 's'
Route::get('testmodel-cari/{search}', function ($s) {
    $query = App\Models\Post::where('title','like',"%$s%")->get();
    return $query;
});

// Mengubah judul dari data ke 2 berdasarkan 'id'
Route::get('testmodel-update', function () {
    $query = App\Models\Post::find(2);
    $query->title = "Bane si bajak laut";
    $query->save();
    return $query;
    });

    // Menambah data baru
Route::get('testmodel-add', function () {
    $query = new App\Models\Post();
    $query->title = "Sholawat penghapus Maksiat";
    $query->title = "Lorem ipsum sit amet dolor";
    $query->save();
    return $query;
    });

    Route::get('testmodel-delete/{id}', function ($id) {
        $query = App\Models\Post::find($id);
        $query->delete();
        return redirect('/testmodel');
        });

        Route::get('barang', function () {
            $query = App\Models\Barang::all();
            return $query;
        });
        Route::get('pembeli', function () {
            $query = App\Models\Pembeli::all();
            return $query;
        });
        Route::get('pembelian', function () {
            $query = App\Models\Pembelian::all();
            return $query;
        });
        Route::get('pesanan', function () {
            $query = App\Models\Pesanan::all();
            return $query;
        });
        Route::get('suplier', function () {
            $query = App\Models\Suplier::all();
            return $query;
        });