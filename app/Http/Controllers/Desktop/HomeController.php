<?php

namespace App\Http\Controllers\Desktop;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Models\Offer;
use App\Models\Page;
use App\Models\PopUp;
use App\Models\Review;
use App\Models\Villa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Page::where('is_active', '1')->where('id', '1')->first();
        $villa_list = Villa::where('is_active', '1')->get();
        $experience_list = Experience::where('is_active', '1')->get();
        $offer_list = Offer::where('is_active', '1')->latest()->get();
        $review_list = Review::where('is_active', '1')->get();
        $popup_list = PopUp::where('is_active', '1')->get();
        return view('seven_secret.home')->with(compact('setting', 'villa_list', 'experience_list', 'offer_list', 'review_list', 'popup_list'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
