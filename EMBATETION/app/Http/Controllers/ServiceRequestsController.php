<?php

namespace App\Http\Controllers;

use App\Models\ServiceRequests;
use App\Http\Requests\RequestServiceRequest;
use Illuminate\Http\Request;


class ServiceRequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewScheduleAdvice()
    {
        $service_requests = ServiceRequests::all();
        return view('form.service_request');
    }
    public function sendScheduleAdvice(RequestServiceRequest $request)
    {
        $service_requests = new ServiceRequests();
        $service_requests->firstName = $request->firstName;
        $service_requests->lastName = $request->lastName;
        $service_requests->email = $request->email;
        $service_requests->cell_phone_number = $request->cell_phone_number;
        $service_requests->subject = $request->subject;
        $service_requests->message = $request->message;
        $service_requests->save();
       
        return redirect()->route('service')->with('register', 'ok');
    }

}
