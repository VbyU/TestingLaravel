<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    //
    // public function index(){
    //     $nama="Vincentius bayu fajar kurniawan";

    //     $pelajaran=["Pelajaran 1","pelajaran 2","pelajaran 3"];

    //     return view('biodata',['nama'=>$nama,'pelajaran'=>$pelajaran]);
    // }

    // public function formulir(){
    //     return view('formulir');
    // }

    // public function proses(Request $REQUEST){
    //     $nama=$REQUEST->input('nama');
    //     $alamat=$REQUEST->input('alamat');
    //     return "Nama : ".$nama.", Alamat : ".$alamat;
    // }

    // public function index(){
    //     $pegawai=\DB::table('pegawai')->get();

    //     return view('index',['pegawai'=>$pegawai]);
    // }

//     public function index(){
//         // $pegawai=\DB::table('pegawai')->paginate(10);

//         // return view('index',['pegawai'=>$pegawai]);

//         // $pegawai = Pegawai::all();
//         $pegawai = Pegawai::find(2); 
 
//     	// mengirim data pegawai ke view pegawai
//     	return view('pegawai', ['pegawai' => $pegawai]); 
//     }

//     public function tambah(){
//         return view('tambah');
//     }

//     public function store(Request $request)
// {
// 	// insert data ke table pegawai
// 	\DB::table('pegawai')->insert([
// 		'pegawai_nama' => $request->nama,
// 		'pegawai_jabatan' => $request->jabatan,
// 		'pegawai_umur' => $request->umur,
// 		'pegawai_alamat' => $request->alamat
// 	]);
// 	// alihkan halaman ke halaman pegawai
// 	return redirect('/pegawai');
 
// }

// public function edit($id)
// {
// 	// mengambil data pegawai berdasarkan id yang dipilih
// 	$pegawai = \DB::table('pegawai')->where('pegawai_id',$id)->get();
// 	// passing data pegawai yang didapat ke view edit.blade.php
// 	return view('edit',['pegawai' => $pegawai]);
 
// }

// public function update(Request $request)
// {
// 	// update data pegawai
// 	\DB::table('pegawai')->where('pegawai_id',$request->id)->update([
// 		'pegawai_nama' => $request->nama,
// 		'pegawai_jabatan' => $request->jabatan,
// 		'pegawai_umur' => $request->umur,
// 		'pegawai_alamat' => $request->alamat
// 	]);
// 	// alihkan halaman ke halaman pegawai
// 	return redirect('/pegawai');
// }

// public function hapus($id){
//     \DB::table('pegawai')->where('pegawai_id',$id)->delete();
//     return redirect('/pegawai');
// }

// public function cari(Request $request)
// {
//     // menangkap data pencarian
//     $cari = $request->cari;

//         // mengambil data dari table pegawai sesuai pencarian data
//     $pegawai = \DB::table('pegawai')
//     ->where('pegawai_nama','like',"%".$cari."%")
//     ->paginate();

//         // mengirim data pegawai ke view index
//     return view('index',['pegawai' => $pegawai]);

// }

public function index()
{
    $pegawai = Pegawai::all();
    return view('pegawai', ['pegawai' => $pegawai]);
}

public function tambah()
{
    return view('pegawai_tambah');
}

public function store(Request $request)
{
    $this->validate($request,[
        'nama' => 'required',
        'alamat' => 'required'
    ]);

    Pegawai::create([
        'nama' => $request->nama,
        'alamat' => $request->alamat
    ]);

    return redirect('/pegawai');
}

public function edit($id)
{
        $pegawai = Pegawai::find($id);
        return view('pegawai_edit', ['pegawai' => $pegawai]);
}

 public function update($id, Request $request)
{
        $this->validate($request,[
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        $pegawai = Pegawai::find($id);
        $pegawai->nama = $request->nama;
        $pegawai->alamat = $request->alamat;
        $pegawai->save();
        return redirect('/pegawai');
}

 public function delete($id)
{
        $pegawai = Pegawai::find($id);
        $pegawai->delete();
        return redirect('/pegawai');
}

}
