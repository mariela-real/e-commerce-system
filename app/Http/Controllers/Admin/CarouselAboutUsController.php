<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\CarouselAboutUs;
class CarouselAboutUsController extends Controller
{
    public function index()
    {
        $carousels = CarouselAboutUs::all();
        return view('admin.carousel.carousel_aboutUs.index', compact('carousels'));
    }

    public function create()
    {
        return view('admin.carousel.carousel_aboutUs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'urlphoto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'order' => 'integer',

        ]);
        $carousel = new carouselAboutUs($request->all());
        if($request->hasFile('urlphoto'))
        {
            $image = $request->file('urlphoto');
            $newName ='carousel_'.time().'.'.$image->guessExtension();
            Image::make($image->getRealPath())
            ->fit(1200, 450, function($constraint){ $constraint->upsize(); })
            ->save(public_path('/img/carousel/'.$newName));

            $carousel->urlphoto = $newName;
        }
        $carousel->save();
        return redirect('/aboutUs_carousel');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'urlphoto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'order' => 'integer',

        ]);
        $carousel = CarouselAboutUs::findOrfail($id);
        $carousel->fill($request->all());
        $previousPhoto =  $carousel->urlphoto;
        if($request->hasFile('urlphoto'))
        {
        $previousRoute = public_path('/img/carousel/'.$previousPhoto);
        if(file_exists($previousRoute)){unlink(realpath($previousRoute));}
        $image = $request->file('urlphoto');
        $newName ='carousel_'.time().'.'.$image->guessExtension();
        Image::make($image->getRealPath())
        ->fit(1200, 450, function($constraint){ $constraint->upsize(); })
        ->save(public_path('/img/carousel/'.$newName));

        $carousel->urlphoto = $newName;
	    }
	$carousel->save();
	return redirect('/aboutUs_carousel');

    }
    public function edit($id)
    {
        $carousel = CarouselAboutUs::findOrfail($id);
	    return view('admin.carousel.carousel_aboutUs.edit', compact('carousel'));
    }


    public function destroy($id)
    {
        $carousel = CarouselAboutUs::findOrFail($id);
        $delete = public_path('/img/carousel/'.$carousel->urlphoto);
        if(file_exists($delete)){unlink(realpath($delete));}
            $carousel->delete();
        return redirect('/aboutUs_carousel');
    }

}
