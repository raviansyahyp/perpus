<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//tambahkan namespace dari model
//use App\Anggota;
use DB;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$anggota = Anggota::all();
        //return view('anggota.index', compact('anggota'));
        $data=DB::table('table_anggota')->get();
        return view('anggota.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //public function create()
    public function tambah()
    {
        return view('anggota.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return redirect('anggota')->with('msg','Data Berhasil di Simpan');
        DB::table('table_anggota')->insert([
            'nama_anggota' => $request -> nama_anggota,
            'jenis_kelamin' => $request -> jenis_kelamin,
            'alamat' => $request -> alamat, 
            'email' => $request -> email, 
            'no_telp' => $request -> no_telp
        ]);
        return redirect('/anggota')->with('msg','Data Berhasil di Simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_anggota)
    {
        $data = DB::table('table_anggota')->where('id_anggota',$id_anggota)->first();
        return view ('anggota/edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function update(Request $request, $id)
    public function update(Request $request)
    {
        DB::table('table_anggota')->where('id_anggota',$request->id_anggota)->update([
            'nama_anggota' => $request -> nama_anggota,
            'jenis_kelamin' => $request -> jenis_kelamin,
            'alamat' => $request -> alamat, 
            'email' => $request -> email, 
            'no_telp' => $request -> no_telp
        ]);

        return redirect('/anggota')->with('msg','Data Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function destroy($id)
    public function hapus($id_anggota)
    {
        DB::table('table_anggota')->where('id_anggota',$id_anggota)->delete();
        return redirect()->back()->with('msg','Data Berhasil di Hapus');
    }
}
