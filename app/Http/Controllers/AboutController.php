<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\User;
use App\About;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $about = About::findOrFail($id);
        if(Auth::user()->id != $id) return redirect('profile/' . $id . '/about');
        return view('about.edit')->withAbout($about)->withUser($user);
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
        $about = About::findOrFail($id);
        $about->bio = trim($request->bio);
        $about->sex = trim($request->sex);
        $about->bday = date('Y-m-d', strtotime($request->bday));
        $about->loc = trim($request->loc);
        $about->pref = trim($request->pref);
        $about->status = trim($request->status);
        $about->save();

        return redirect('profile/' . $id . '/about');
    }
}
