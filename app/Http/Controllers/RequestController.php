<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class RequestController extends Controller
{
    public function index(Request $request){
        $pokemonName = $request->input('pokemonName');

        $client = new Client();
        if($pokemonName){
            $response = $client->request('GET', 'https://api.pokemontcg.io/v2/cards?q=name:' .$pokemonName );
        }
        else{
            $response = $client->request('GET', 'https://api.pokemontcg.io/v2/cards');
        }
       
        $data = json_decode($response->getBody()->getContents(), true);
        return view('cards', ['cards' =>$data['data']]);
    }
}
