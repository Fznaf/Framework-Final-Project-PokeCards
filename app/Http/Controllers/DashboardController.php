<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorites;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
{
    $favorites = Favorites::where('userid', Auth::id())->with('comments:id,content')->get();

    return view('dashboard', ['favorites' => $favorites]);
}     
}
