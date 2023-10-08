<?php

namespace App\Http\Controllers;

use App\Models\BotMan;
use Illuminate\Http\Request;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');
  
        $botman->hears('{message}', function($botman, $message) {
  
            if ($message == 'hi') {
                $this->askName($botman);
            }else{
                $botman->reply("Escribe 'hola' para comenzar...");
            }
  
        });
  
        $botman->listen();
        return view('botman');
        
    }
  
    /**
     * Place your BotMan logic here.
     */
    public function askName($botman)
    {
        $botman->ask('Hola! Cual es tu nombre?', function(Answer $answer) {
  
            $name = $answer->getText();
  
            $this->say('Gusto en conocerte '.$name);
        });
        return view('botman');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * @param  \App\Models\BotMan  $botMan
     * @return \Illuminate\Http\Response
     */
    public function show(BotMan $botMan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BotMan  $botMan
     * @return \Illuminate\Http\Response
     */
    public function edit(BotMan $botMan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BotMan  $botMan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BotMan $botMan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BotMan  $botMan
     * @return \Illuminate\Http\Response
     */
    public function destroy(BotMan $botMan)
    {
        //
    }
}
