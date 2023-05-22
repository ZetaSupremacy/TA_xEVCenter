<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\pengunjung;

class PengunjungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $katakunci = $request->$katakunci;
        // if(strlen($katakunci)){
        //     $data = pengunjung::where('nama', 'like', "%$katakunci%")
        //             ->orWhere('nohp', 'like', "%$katakunci%")
        //             ->orWhere('email', 'like', "%$katakunci%");
        // } else {
        //     $data = pengunjung::orderBy('id','desc')->get();
        // }
        
        // return view('pengunjung.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengunjung.registrasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('nama',$request->nama);
        Session::flash('nohp',$request->nohp);
        Session::flash('alamat',$request->alamat);
        Session::flash('email',$request->email);
        Session::flash('lembaga',$request->lembaga);
        Session::flash('namalembaga',$request->namalembaga);

        $request->validate([
            'nama'=>'required:pengunjung,nama',
            'nohp'=>'required|numeric|:pengunjung,nohp',
            'alamat'=>'required:pengunjung,alamat',
            'email'=>'required:pengunjung,email',
            'lembaga'=>'required:pengunjung,lembaga',
            'namalembaga'=>'required:pengunjung,namalembaga',
        ],[
            'nama.required'=>'Nama Wajib Diisi!',
            'nohp.required'=>'Nomer Handphone Wajib Diisi!',
            'nohp.numeric'=>'Nomer Handphone Wajib Dalam Angka!',
            'alamat.required'=>'Alamat Wajib Diisi!',
            'email.required'=>'Email Wajib Diisi!',
            'lembaga.required'=>'Lembaga Wajib Dipilih!',
            'namalembaga.required'=>'Nama Lembaga Wajib Diisi!',
        ]);
        $data = [
            'nama'=>$request->nama,
            'nohp'=>$request->nohp,
            'alamat'=>$request->alamat,
            'email'=>$request->email,
            'lembaga'=>$request->lembaga,
            'namalembaga'=>$request->namalembaga,
        ];
        pengunjung::create($data);
        return redirect()->to('pengunjung')->with('success', 'Terimakasih Sudah Mendaftarkan Diri Untuk Mengunjungi xEV Center, Kami Tunggu Kehadiran Anda :)');
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
    public function edit($id)
    {
        $data = pengunjung::where('nama', $id)->first();
        return view('pengunjung.edit')->with ('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'=>'required:pengunjung,nama',
            'nohp'=>'required|numeric|:pengunjung,nohp',
            'alamat'=>'required:pengunjung,alamat',
            'email'=>'required:pengunjung,email',
            'lembaga'=>'required:pengunjung,lembaga',
            'namalembaga'=>'required:pengunjung,namalembaga',
        ],[
            'nama.required'=>'Nama Wajib Diisi!',
            'nohp.required'=>'Nomer Handphone Wajib Diisi!',
            'nohp.numeric'=>'Nomer Handphone Wajib Dalam Angka!',
            'alamat.required'=>'Alamat Wajib Diisi!',
            'email.required'=>'Email Wajib Diisi!',
            'lembaga.required'=>'Lembaga Wajib Dipilih!',
            'namalembaga.required'=>'Nama Lembaga Wajib Diisi!',
        ]);
        $data = [
            'nama'=>$request->nama,
            'nohp'=>$request->nohp,
            'alamat'=>$request->alamat,
            'email'=>$request->email,
            'lembaga'=>$request->lembaga,
            'namalembaga'=>$request->namalembaga,
        ];
        pengunjung::where('nama' ,$id)->update($data);
        return redirect()->to('pengunjung')->with('success', 'Data Telah Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        pengunjung::where('nama', $id)->delete();
        return redirect()->to('pengunjung')->with('success', 'Berhasil Menghapus Data');
    }
}
