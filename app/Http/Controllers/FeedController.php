<?php

namespace App\Http\Controllers;


use App\Models\Feed;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

//OOP => free access to other function
class FeedController extends Controller
{
    public function index() {

        return view('pages.feed.index');
    }

    public function create() {

        //return view('pages.feed.create');
    }

    public function show(Feed $feed) {

        Log::debug("Show feed", [ 'feed' => $feed ]);
        return view('pages.feed.show', compact('feed'));
        //dd($feed);
    }

    public function update(Request $request, Feed $feed) {
        //validate sahaja
        $validate_request = $request->validate([
            'title' => 'required | string | max:100',
            'description' => 'required | string | max:300',
        ]);

        $feed->update($validate_request);
        return redirect()->route('feeds');
        
    }

    // public function show(Feed $feed) {

    //     Log::debug("Show feed", [ 'feed' => $feed ]);
    //     return view('pages.feed.show', compact('feed'));
    //     //dd($feed);
    // }

}
