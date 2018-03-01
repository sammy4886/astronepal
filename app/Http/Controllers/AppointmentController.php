<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Http\Requests\StoreAppointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class AppointmentController extends Controller
{
    public function store(StoreAppointment $request)
    {
        DB::transaction(function () use ($request) {
            $data = $request->data();
            Appointment::create($data);

        });
        Session::flash('flash_message','Your have successfully booked your appointment. We will call you soon ');
        return redirect('');
    }}
