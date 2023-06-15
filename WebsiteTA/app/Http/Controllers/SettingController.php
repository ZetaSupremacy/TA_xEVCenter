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
        $request->allow_days = explode(", ", $request->allow_days);
        $request->allow_days = array_unique($request->allow_days);

        allow_day::truncate();
        // dd($request->allow_days);
       foreach ($request->allow_days as $day) {
        switch ($day) {
            case 'Senin':
                allow_day::create([
                    'allow_days' => '1'
                ]);
                break;
            case 'Selasa':
                allow_day::create([
                    'allow_days' => '2'
                ]);
                break;
            case 'Rabu':
                allow_day::create([
                    'allow_days' => '3'
                ]);
                break;
            case 'Kamis':
                allow_day::create([
                    'allow_days' => '4'
                ]);
                break;
            case "Jum'at":
                allow_day::create([
                    'allow_days' => '5'
                ]);
                break;
            case 'Sabtu':
                allow_day::create([
                    'allow_days' => "6"
                ]);
                break;
            case 'Minggu':
                allow_day::create([
                    'allow_days' => "0"
                ]);
                break;
    }};       

    return redirect('/setting')->with('success', 'Data kontol sudah berhasil di update'); 
        // return view('admin.setting', compact('kuota', 'dateInterval'));
    }

}
