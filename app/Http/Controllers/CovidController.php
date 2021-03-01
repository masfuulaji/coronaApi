<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class CovidController extends Controller
{
    public function index(){
        $response = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
        $data =collect($response->json());
        $data = $data->flatten(1);
        // dd($data);
        return view('covid')
        ->with(compact('data'));
    }
}
