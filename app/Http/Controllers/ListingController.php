<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use Auth;

class ListingController extends Controller
{
    public function slideListing()
    {
        $slide = Slide::all();
        return view('listing.listingSlide')->with('slides', $slide);
    }

    public function slideForm()
    {
        return view('dashboard.slide');
    }

    public function postSlide(Request $request)
    {
        $slide = new Slide();
        $slide->user_email = Auth::user()->email;
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
            session()->flash('success', 'You have posted a slide successfully!');
        } else {
            return $request;
            $slide->img_path = "";
        }

        $slide->save();


        return redirect()->route('slidelisting');
    }

    public function deleteSlide($id){
        if(Slide::findOrFail($id)){
            Slide::where('id', $id)
                ->delete();
            session()->flash('success', 'You just deleted a slide!');
        }
        else{
            session()->flash('error', 'Sorry, there is some wrong occur!');
        }

        return redirect()->route('slidelisting');
    }

    public function approveSlide($id){
        if(Slide::findOrFail($id)){
            Slide::where('id', $id)
                ->update(['is_approved' => 2]);
            session()->flash('success', 'You just approved a slide post!');
        }

        return redirect()->route('slidelisting');
    }

    public function blockSlide($id){
        if(Slide::findOrFail($id)){
            Slide::where('id', $id)
                ->update(['is_approved' => 0]);
            session()->flash('success', 'You just blocked a slide post!');
        }
        return redirect()->route('slidelisting');
    }
}
