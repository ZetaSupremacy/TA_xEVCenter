<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\setting;
use App\Models\allow_day;
use App\Models\reservation_session;
use Illuminate\Support\Facades\Schema;

class SettingController extends Controller
{
    public function index()
    {
        $kuota = setting::pluck('kuota')->first();
        $dateInterval = setting::pluck('date_interval')->first();
        
        return view('admin.setting', compact('kuota', 'dateInterval'));
    }

    public function reservationSession()
    {
        $reservationSession = reservation_session::all();
        return view('admin.reservationSessionDashboard', compact('reservationSession'));
    }

    public function reservationSessionEdit($id)
    {
        $reservationSession = reservation_session::where('id', $id)->first();

        $reservationSession->start_time = substr($reservationSession->start_time, 0, 5);
        $reservationSession->end_time = substr($reservationSession->end_time, 0, 5);
        
        return view('admin.reservationSessionEdit', compact('reservationSession'));
    }

    public function reservationSessionCreate()
    {
        
        return view('admin.reservationSessionCreate');
    }

    public function reservationSessionStore(Request $request)
    {
        $validateSession = [
            'session_name' => 'required',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_formatH:i',
            ];
            
        $validateSessionMasages = [
            'start_time.date_format'=>'Waktu harus di isi dengan format jam:menit (09:00)',
            'end_time.date_format'=>'Waktu harus di isi dengan format jam:menit (09:00)',
        ];
        $validateData = $request->validate($validateSession,$validateSessionMasages);

        reservation_session::create($validateData);
        
    return redirect('/setting/reservationSession')->with('success', 'Data sudah berhasil di update'); 
    }

    public function reservationSessionUpdate(Request $request)
    {
        $validateSession = [
            'session_name' => 'required',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
        ];
        
        $validateSessionMasages = [
            'start_time.date_format'=>'Waktu harus di isi dengan format jam:menit (09:00)',
            'end_time.date_format'=>'Waktu harus di isi dengan format jam:menit (09:00)',
        ];
        
        $validateData = $request->validate($validateSession,$validateSessionMasages);

        reservation_session::where('id', $request->id)->update([
            'session_name' => $request->session_name,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
        ]);
        
    return redirect('/setting/reservationSession')->with('success', 'Data sudah berhasil di update'); 
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
