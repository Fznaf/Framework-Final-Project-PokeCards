<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorites;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
{
    $favorites = Favorites::where('userid', Auth::id())->get();

    return view('dashboard', compact('favorites'));
}
}
