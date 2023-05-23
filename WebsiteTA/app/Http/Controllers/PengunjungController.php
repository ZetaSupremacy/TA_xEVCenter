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
        return view('pengunjung.registrasi');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // $data = $request;
        
        // $pengunjung = new pengunjung;
        // $pengunjung->visitor_name = $data['visitor_name'];
        // $pengunjung->gender = $data['gender'];
        // $pengunjung->age = $data['age'];
        // $pengunjung->job_title = $data['job_title'];
        // $pengunjung->institution_category = $data['institution_category'];
        // $pengunjung->save();
        $count = count($request['visitor_name']);
        
        if ($count > 0) {
            for ($i = 0 ; $i < $count ; $i++ )
            {
                $pengunjung = new pengunjung;
                $pengunjung->visitor_name = $request['visitor_name'][$i];
                $pengunjung->gender = $request['gender'][$i];
                $pengunjung->age = $request['age'][$i];
                $pengunjung->job_title = $request['job_title'][$i];
                $pengunjung->intitution_category = $request['institution_category'][$i];

                $pengunjung->save();
            }
            
                // dd($request);
                // array(
                //     visitor_name => $request['visitor_name'][$i],
                //     gender => $request['gender'][$i],
                //     age => $request['age'][$i],
                //     job_title => $request['job_title'][$i],
                //     institution_category => $request['institution_category'][$i],
                // );
                // dd($pengunjung);
                // pengunjung::create($data);
            
        }

        return redirect()->back()->with('status', 'Data Berhasil Di Input');
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
