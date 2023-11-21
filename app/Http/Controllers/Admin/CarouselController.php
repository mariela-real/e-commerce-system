<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slide;
class CarouselController extends Controller
{
    public function mainCarousel(){
        $carousel = Slide::orderBy('order','asc')->get();
        return view('home.home', compact('carousel'));
    }
}
