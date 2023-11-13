<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class RequestController extends Controller
{
    public function index(){

        $client = new Client();
        $response = $client->request('GET', 'https://api.pokemontcg.io/v2/cards?q=name:gardevoir set.series:XY');
        $data = json_decode($response->getBody()->getContents(), true);
        return view('cards', ['cards' =>$data['data']]);
    }
}
