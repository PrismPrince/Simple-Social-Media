<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use App\Comment;
use Illuminate\Http\Response;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\LengthAwarePaginator;

class AjaxController extends Controller
{
    public function __construct()
    {
        $this->middleware('api');
    }

    public function getShow($view, $id = null)
    {
        switch ($view) {
            case 'activities':
                $this->showActivities();
                break;
            case 'userposts':
                $this->showUserPosts($id);
                break;
            default:
                abort(404);
                break;
        }
    }

    public function getActivity($type, $id)
    {
        switch ($type) {
            case 'post':
                $info = Post::findOrFail($id);

                $head = view('ajax.activity_head')->withActivity($info)->render();
                $body = view('ajax.activity_body')->withActivity($info)->render();
                $com = view('ajax.activity_comment')->withPost($id)->render();

                return response()->json(['head' => $head, 'body' => $body, 'com' => $com]);

            case 'comment':
                $coms = Comment::where('post_id', $id)->get();

                $view = view('ajax.activity_comments')->withComments($coms)->render();

                return response()->json(['coms' => $view]);

            default: return 0;
        }
    }

    private function showActivities()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        echo view('ajax.activities')->withActivities($posts)->render();
        return true;
    }

    private function showUserPosts($id)
    {
        $posts = Post::where('user_id', $id)->orderBy('created_at', 'desc')->paginate(5);
        echo view('ajax.activities')->withActivities($posts)->render();
        return true;
    }

    public function getCreate($view)
    {
    	switch ($view) {
    		case 'post':
    			$this->createPost();
    			break;
    		default:
    			return view('');
    			break;
    	}
    }

    private function createPost()
    {
        echo view('ajax.create_post')->render();
        return true;
    }

    public function com(Request $request)
    {
        return response()->json(['scom' => $request]);
    }
}
