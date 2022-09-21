<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use App\Models\Appointment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $countPending = Appointment::where('status','pending')->count();        
        $countAppointments = Appointment::where('status','confirmed')->count();
        $countToday = Appointment::where('date', Carbon::today())->where('status','confirmed')->count();
        
        return view('admin.index', compact('countPending','countAppointments','countToday'));
    }
}
