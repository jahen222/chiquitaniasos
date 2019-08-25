<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Comment;
use App\User;
use Auth;

class CommentController extends Controller
{
    public function store(Blog $blog, Request $request){

        /*
         * Validate review
         */
        $this->validate($request, [
            'comment' => 'min:15|max:1000',
        ]);

        $user = Auth::user();

        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->user_id = $user->id;
        $comment->blog_id = $blog->id;
        $comment->save();

        return back();
    }

    public function update(Request $request){

        $input = $request->all();
        $comment = Comment::find($request->id);
        $comment->comment = $input['comment'];
        $comment->update();

        return back();
    }

    public function destroy(Comment $comment){

        $user = Auth::user();

        Comment::destroy($comment->id);

        return back();
    }
}
