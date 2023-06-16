<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\setting;
use App\Models\allow_day;
use Illuminate\Support\Facades\Schema;

class SettingController extends Controller
{
    public function index()
    {
        $kuota = setting::pluck('kuota')->first();
        $dateInterval = setting::pluck('date_interval')->first();
        
        return view('admin.setting', compact('kuota', 'dateInterval'));
    }

    public function updateAllowDays(Request $request)
    {
        $request->allow_days = str_replace(" ", "", $request->allow_days);
        $request->allow_days = strtolower($request->allow_days);
        
        $request->allow_days = explode(",", $request->allow_days);
        $request->allow_days = array_unique($request->allow_days);
        allow_day::truncate();
        // dd($request->allow_days);
       foreach ($request->allow_days as $day) {
        switch ($day) {
            case 'senin':
                allow_day::create([
                    'allow_days' => '1'
                ]);
                break;
            case 'selasa':
                allow_day::create([
                    'allow_days' => '2'
                ]);
                break;
            case 'rabu':
                allow_day::create([
                    'allow_days' => '3'
                ]);
                break;
            case 'kamis':
                allow_day::create([
                    'allow_days' => '4'
                ]);
                break;
            case "jum'at":
                allow_day::create([
                    'allow_days' => '5'
                ]);
                break;
            case 'sabtu':
                allow_day::create([
                    'allow_days' => "6"
                ]);
                break;
            case 'minggu':
                allow_day::create([
                    'allow_days' => "0"
                ]);
                break;
    }};       

    return redirect('/setting')->with('success', 'Data sudah berhasil di update'); 
    
    }

}
