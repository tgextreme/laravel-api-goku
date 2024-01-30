<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\CharacterController;

class CharacterController extends Controller
{
    public function index()
    {
        $response = file_get_contents('https://dragonball-api.com/api/characters?limit=1000');
        $data = json_decode($response, true);
        return view('characters', ['characters' => $data['items']]);
    }
    public function show($id)
{
    $response = file_get_contents('https://dragonball-api.com/api/characters/' . $id);
    $data = json_decode($response, true);
    return view('character_details', ['character' => $data]);
}
}
