<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorites;
use App\Events\FavoriteCardMarking;
use Illuminate\Support\Facades\Redirect;

class FavoriteController extends Controller
{
    public function index(Request $request){
        $userid = $request->user()->id;
        $cardid = $request->input('favoriteCard');
        $cardname = $request->input('cardname');
        $image = $request->input('image');

        

        event(new FavoriteCardMarking($userid, $cardid, $image, $cardname));

        $favorites = Favorites::where('userid', $userid)->get();

        return Redirect::route('dashboard', ['favorites' => $favorites]);
    }
    
public function showFavorites()
{
    // Fetch favorites along with their associated comments
    $favorites = Favorites::with('comments')->get();

    return view('your_view', ['favoritesWithComments' => $favorites]);
}
}
