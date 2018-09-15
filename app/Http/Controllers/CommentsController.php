<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Comment;

class CommentsController extends Controller
{

    public function store(Post $post)
    {
//        dd($post);
        $this->validate(request(), ['body' => 'required']);
        //add comment to a post
        $post->addComment(request('body'));
        
//        Comment::create(['post_id' => $post->id, 'body' => request('body')]);
        return back();
    }
}
