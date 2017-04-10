<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Auth;

class CommentsController extends Controller
{
    function addComment($article_id, Request $request){
    	$new_comment = new Comment();
    	$new_comment->content = $request->content;
    	$new_comment->article_id = $article_id; 
    	$new_comment->user_id = Auth::user()->id;
    	$new_comment->save();

    	return redirect("/articles/$article_id");	
    }
}
