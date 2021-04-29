<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TimelinePost;
use App\Comment;
use Auth;

class TimelinePostController extends Controller
{
    public function index(){
        // $timelinePost = TimelinePost::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        $timelinePost = TimelinePost::orderBy('created_at', 'DESC')->get();
        return view('welcome', compact('timelinePost'));
    }

    public function store(Request $request){
        $timelinepost = new TimelinePost();
        $timelinepost->post = $request->input('post');
        $timelinepost->privacy = $request->input('privacy');
        $timelinepost->user_id = Auth::user()->id;
        $timelinepost->save();

        return back();

    }

    public function update(TimelinePost $timelinePost, Request $request){
        $timelinePost->post = $request->input('post');
        $timelinePost->update();
        return back();
    }

    public function destroy(TimelinePost $timelinePost){
        $timelinePost->delete();
        return back();
    }

    public function storeComment(Request $request, $id){
        $comment = new Comment();
        $comment->comment = $request->input('comment');
        $comment->timeline_post_id = $id;
        $comment->user_id = Auth::user()->id;
        $comment->save();
        return back();

    }

    public function updateComment(Comment $comment, Request $request){
        $comment->comment = $request->input('comment');
        $comment->update();
        return back();
    }

    public function destroyComment(Comment $comment){
        $comment->delete();
        return back();
    }
}
