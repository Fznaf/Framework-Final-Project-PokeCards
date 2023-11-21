<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class InfoController extends Controller
{
    public function index(Request $request, $name, $id ){
        $client = new Client();
       
        // $name = $request->input('name');
        // $id = $request->input('id');
       
        $response = $client->request('GET', "https://api.pokemontcg.io/v2/cards?q=name:{$name} id:{$id}");
        
        $data = json_decode($response->getBody()->getContents(), true);
        return view('cardinfo', ['cards' =>$data['data']]);
    }
}
