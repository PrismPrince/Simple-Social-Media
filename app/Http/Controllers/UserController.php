<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Session;
use App\User;
use App\Post;
use App\About;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\LengthAwarePaginator;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function profileTimeline($id)
    {
        if (!About::find($id)) {
          $about = new About;
          $about->user_id = $id;
          $about->save();
        }
        $user = User::findOrFail($id);
        $about = About::findOrFail($id);
        $posts = Post::where('user_id', $id)->orderBy('created_at', 'desc')->paginate(5);
        return view('users.profile_timeline')->withUser($user)->withActivities($posts)->withAbout($about);
    }

    public function profileAbout($id)
    {
        if (!About::find($id)) {
          $about = new About;
          $about->user_id = $id;
          $about->save();
        }
        $about = About::findOrFail($id);
        $user = User::findOrFail($id);
        return view('users.profile_about')->withUser($user)->withAbout($about);
    }

    public function search(Request $request)
    {
      if($request->keyword == NULL) return view('users.search')->withUsers(collect([]))->withKey($request->keyword);
      $users = User::where('fname', 'LIKE', '%' . $request->keyword . '%')
        ->orWhere('lname', 'LIKE', '%' . $request->keyword . '%')->get();

      return view('users.search')->withUsers($users)->withKey($request->keyword);
    }
}
