<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\CarouselOpinion;
class CarouselOpinionController extends Controller
{
    public function index()
    {
        $carousels = CarouselOpinion::all();
        return view('admin.carousel.carousel_opinions.index', compact('carousels'));
    }

    public function create()
    {
        return view('admin.carousel.carousel_opinions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string|max:255',
            'name' => 'required|string',
            'order' => 'integer',
        ]);
        $carousel = new carouselOpinion($request->all());
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
        return redirect('/opinions_carousel');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'description' => 'required|string|max:255',
            'name' => 'required|string',
            'order' => 'integer',
        ]);
        $carousel = CarouselOpinion::findOrfail($id);
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
	return redirect('/opinions_carousel');

    }
    public function edit($id)
    {
        $carousel = CarouselOpinion::findOrfail($id);
	    return view('admin.carousel.carousel_opinions.edit', compact('carousel'));
    }


    public function destroy($id)
    {
        $carousel = CarouselOpinion::findOrFail($id);
        $delete = public_path('/img/carousel/'.$carousel->urlphoto);
        if(file_exists($delete)){unlink(realpath($delete));}
            $carousel->delete();
        return redirect('/opinions_carousel');
    }

}
