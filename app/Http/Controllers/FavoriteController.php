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
        $image = $request->input('image');

        

        event(new FavoriteCardMarking($userid, $cardid, $image));

        $favorites = Favorites::where('userid', $userid)->get();

        return Redirect::route('dashboard', ['favorites' => $favorites]);
    }
}
