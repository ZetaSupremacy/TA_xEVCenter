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
        return view('pengunjung.pengunjung_registrasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('list-visitor-name',$request->nama);
        Session::flash('gender',$request->gender);
        Session::flash('age',$request->umur);
        Session::flash('job-title',$request->pekerjaan);
        Session::flash('institusi',$request->institusi);
        $request->validate([
            'list-visitor-name'=>'required:pengunjung,list-visitor-name',
            'gender'=>'required|numeric|:pengunjung,gender',
            'age'=>'required:pengunjung,age',
            'job-title'=>'required:pengunjung,pekerjaan',
            'institusi'=>'required:pengunjung,institusi',
        ],[
            'list-visitor-name.required'=>'Nama Wajib Diisi!',
            'gender.required'=>'Gender Wajib Diisi!',
            // 'nohp.numeric'=>'Nomer Handphone Wajib Dalam Angka!',
            'age.required'=>'Umur Wajib Diisi!',
            'job-title.required'=>'Pekerjaan Wajib Diisi!',
            'institusi.required'=>'Institusi Wajib Dipilih!',
        ]);
        $data = [
            'list-visitor-name'=>$request->nama,
            'gender'=>$request->gender,
            'age'=>$request->umur,
            'job-title'=>$request->pekerjaan,
            'institusi'=>$request->institusi,
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
            'list-visitor-name'=>'required:pengunjung,list-visitor-name',
            'gender'=>'required|numeric|:pengunjung,gender',
            'age'=>'required:pengunjung,age',
            'job-title'=>'required:pengunjung,pekerjaan',
            'institusi'=>'required:pengunjung,institusi',
        ],[
            'list-visitor-name.required'=>'Nama Wajib Diisi!',
            'gender.required'=>'Gender Wajib Diisi!',
            // 'nohp.numeric'=>'Nomer Handphone Wajib Dalam Angka!',
            'age.required'=>'Umur Wajib Diisi!',
            'job-title.required'=>'Pekerjaan Wajib Diisi!',
            'institusi.required'=>'Institusi Wajib Dipilih!',
        ]);
        $data = [
            'list-visitor-name'=>$request->nama,
            'gender'=>$request->gender,
            'age'=>$request->umur,
            'job-title'=>$request->pekerjaan,
            'institusi'=>$request->institusi,
        ];
        pengunjung::where('list-visitor-name' ,$id)->update($data);
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
        pengunjung::where('list-visitor-name', $id)->delete();
        return redirect()->to('pengunjung')->with('success', 'Berhasil Menghapus Data');
    }
}
