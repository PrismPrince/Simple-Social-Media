<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\Comment;

class CommentController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comment = new Comment;
        $comment->user_id = Auth::user()->id;
        $comment->post_id = $request->post_id;
        $comment->desc = trim($request->desc);
        $comment->save();
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
      $comment = Comment::findOrFail($id);
      if($comment->user_id != Auth::user()->id) return redirect()->route('posts.show', $request->post);
      return view('comments.edit')->withComment($comment)->withPost($request->post);
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
        $comment = Comment::findOrFail($id);
        if($comment->user_id != Auth::user()->id) return redirect()->route('posts.show', $request->post);
        $comment->desc = trim($request->desc);
        $comment->save();
        return redirect()->route('posts.show', $request->post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $comment = Comment::findOrFail($id);

        if($comment->user_id != Auth::user()->id) return redirect()->route('posts.show', $request->post);

        $comment->delete();

        return redirect()->route('posts.show', $request->post);
    }
}
