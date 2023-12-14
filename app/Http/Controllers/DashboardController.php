<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorites;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;

class DashboardController extends Controller
{
    public function index()
    {
        $comments = Comment::latest()->get();
         $favorites = Favorites::where('userid', Auth::id())->with('comments')->get();
        //dd($comments);
         return view('dashboard', compact('favorites', 'comments'));
    }     
}
