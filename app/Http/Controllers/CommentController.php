<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'favorite_list_id' => 'required|exists:favorites,id',
            'content' => 'required|string',
        ]);

        // Create a new comment
        Comment::create([
            'favorite_list_id' => $request->input('favorite_id'),
            'content' => $request->input('content'),
            // You may also associate the comment with the authenticated user
            'user_id' => auth()->id(),
        ]);

        // Redirect back or wherever you want after submitting the comment
        return redirect()->back();
    }
}
