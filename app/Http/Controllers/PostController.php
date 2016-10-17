<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Session;
use App\Post;
use Validator;
use App\Comment;
use Carbon\Carbon;
use Illuminate\Http\Response;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class PostController extends Controller
{
    /*
    */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carbon = new Carbon;
        $posts = Post::orderBy('updated_at', 'desc')->paginate(15);
        $count = $this->countPosts();
        return view('posts.index')->withPosts($posts)->withCount($count)->withCarbon($carbon);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'desc' => 'required',
            'image' => 'image|max:20000',
        ];

        $messages = [
            'desc.required' => 'Please enter the description!',
            'image.image' => 'File must be an image!',
            'image.max' => 'File too large!',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        } else {
            $post = new Post;
            $post->user_id = Auth::user()->id;
            $post->desc = trim($request->desc);
            $post->save();

            if($request->hasFile('image')) {
                $image = new FileController;

                if(!$image->postImage($request, 'post', $post->id)) {
                    Session::flash('error', 'Error uploading photo!');
                    return back();
                }
            }

            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carbon = new Carbon;
        $post = Post::findOrFail($id);
        $comments = Comment::where('post_id', $id)->orderBy('updated_at', 'desc')->paginate(10);
        return view('posts.show')->withPost($post)->withComments($comments)->withCarbon($carbon);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carbon = new Carbon;
        $post = Post::findOrFail($id);
        if($post->user_id != Auth::user()->id) return redirect()->route('posts.show', $post->id);
        return view('posts.edit')->withPost($post)->withCarbon($carbon);
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
        $rules = [
            'desc' => 'required',
        ];

        $messages = [
            'desc.required' => 'Please enter the description!',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) return redirect('posts/' . $id . '/edit')->withErrors($validator)->withInput();
        else {
            $post = Post::findOrFail($id);

            if($post->user_id != Auth::user()->id) return redirect()->route('posts.show', $post->id);

            $post->desc = trim($request->desc);
            $post->save();

            Session::flash('success', 'This post was successfully saved.');

            return redirect()->route('posts.show', $post->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        if($post->user_id != Auth::user()->id) return redirect()->route('posts.show', $post->id);

        $comments = Comment::where('post_id', $post->id)->get();
        foreach ($comments as $comment) {
          $comment->delete();
        }
        $post->delete();

        return redirect()->route('home');
    }

    private function countPosts() {
        $count['all'] = Post::all()->count();
        $count['me'] = Post::where('user_id', Auth::user()->id)->get()->count();
        $count['other'] = Post::where('user_id','!=', Auth::user()->id)->get()->count();

        return $count;
    }
}
