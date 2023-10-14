<?php

namespace App\Http\Controllers;

use App\Models\AdviceRequests;
use App\Http\Requests\AdviceRequest;
use Illuminate\Http\Request;


class AdviceRequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewScheduleAdvice()
    {
        $advice_requests = AdviceRequests::all();
        return view('advice.schedule_advice');
    }
    public function sendScheduleAdvice(AdviceRequest $request)
    {
        $advice_requests = new AdviceRequests();
        $advice_requests->firstName = $request->firstName;
        $advice_requests->lastName = $request->lastName;
        $advice_requests->email = $request->email;
        $advice_requests->cell_phone_number = $request->cell_phone_number;
        $advice_requests->message = $request->message;
        $advice_requests->save();
       
        return redirect()->route('advice')->with('register', 'ok');
    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\advice_requests  $advice_requests
     * @return \Illuminate\Http\Response
     */
    public function show(advice_requests $advice_requests)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\advice_requests  $advice_requests
     * @return \Illuminate\Http\Response
     */
    public function edit(advice_requests $advice_requests)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\advice_requests  $advice_requests
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, advice_requests $advice_requests)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\advice_requests  $advice_requests
     * @return \Illuminate\Http\Response
     */
    public function destroy(advice_requests $advice_requests)
    {
        //
    }
}
