<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function store(Request $request) {

        $appointment = new Appointment();

        $appointment->name = $request->name;

        $appointment->email = $request->email;

        $appointment->service = $request->service;

        $appointment->time = $request->time;

        $appointment->date = $request->date;

        $appointment->message = $request->message;

        $appointment->save();

        return redirect()->back()->with('message','Request Sent. We will send you a confirmation email.');
    }

    public function showAll() {

        $data = Appointment::where('status','confirmed')->get();

        return view('admin.showAll', compact('data'));
    }

    public function today() {

        $data = Appointment::where('date', Carbon::today())->where('status','confirmed')->get();

        $count = Appointment::where('date', Carbon::today())->where('status','confirmed')->count();

        return view('admin.today', compact('data','count'));
    }

    public function pending() {

        $data = Appointment::where('status','pending')->get();

        $count = Appointment::where('status','pending')->count();

        return view('admin.pending', compact('data','count'));
    }

    public function checkAvailability(Request $request) {

        $appointment = Appointment::find($request->id);

        $data = Appointment::where('date', $appointment->date)->where('status','confirmed')->get();

        $count = Appointment::where('date', $appointment->date)->where('status','confirmed')->count();

        return view('admin.viewsched',compact('appointment','data','count'));
    }

    public function confirm(Request $request) {

        $appointment = Appointment::find($request->id);

        $appointment->status = 'confirmed';

        $appointment->save();

        return redirect('home')->with('message','Appointment Confirmed Successfully');

    }
}

