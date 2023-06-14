<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\reservation_group;

class DashboardController extends Controller
{
    public function checkinDashboard(Request $request)
    {
        $reservasi_group = $reservation_group = reservation_group::whereNotNull('registration_confirmation_at')->get();
        return view('admin.checkinDashboard',compact('reservasi_group'));
    }

    public function registrationDashboard(Request $request)
    {
        $reservasi_group = $reservation_group = reservation_group::whereNotNull('group_code')->get();
        return view('admin.registrationDashboard',compact('reservasi_group'));
    }
}
