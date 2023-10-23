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
    public function sendScheduleAdvice(RequestServiceRequest $request)
    {
        $service_requests = new ServiceRequests();
        $service_requests->firstName = $request->firstName;
        $service_requests->lastName = $request->lastName;
        $service_requests->email = $request->email;
        $service_requests->cell_phone_number = $request->cell_phone_number;
        $service_requests->subject = $request->subject;
        $service_requests->message = $request->message;
        $service_requests->state = "sent";
        $service_requests->save();
       
        return redirect()->route('service')->with('register', 'ok');
    } 
    public function messageReport()
    {
        $show_messages = ServiceRequests::all();
        return view('inbox.request_tray', compact('show_messages'));
    }
    public function show($id)
    {
        $show_messages = ServiceRequests::find($id);
        return view('inbox.request_tray', compact('show_messages'));

    }


}
