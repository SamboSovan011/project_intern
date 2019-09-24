<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use Auth;

class ListingController extends Controller
{
    public function slideListing()
    {
        return view('listing.listingSlide');
    }

    public function slideForm()
    {
        return view('dashboard.slide');
    }

    public function postSlide(Request $request)
    {
        $slide = new Slide();
        $slide->user_id = Auth::user()->id;
        $slide->title = $request->input('title');
        $slide->is_main = $request->input('is_main');
        $slide->description = $request->input('desc');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . "." . $extension;
            $file->move('img/', $filename);
            $img_path = "img/" . time() . "." . $extension;
            $slide->img_path = $img_path;
        } else {
            return $request;
            $slide->img_path = "";
        }

        $slide->save();

        return view('dashboard.slide')->with('slide', $slide);
    }
}
