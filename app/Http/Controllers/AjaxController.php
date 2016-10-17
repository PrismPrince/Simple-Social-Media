<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use App\Survey;
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
}
