<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller{
public function index()
{
    $comments = Comment::all();
    return view('comments.index', compact('comments'));
}

public function store(Request $request)
{
    $request->validate([
        'content' => 'required',
        'favorite_list_id' => 'required|exists:posts,id',
    ]);

    Comment::create([
        'user_id' => auth()->user()->id,
        'favorite_list_id' => $request->favorite_list_id,
        'content' => $request->content,
    ]);

    return back()->with('success', 'Comment added successfully.');
}
}