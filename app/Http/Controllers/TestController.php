<?php

namespace App\Http\Controllers;

use App\Models\Circolari;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class TestController extends Controller
{
    public function store(Request $request)
    {
        $response = Http::get('https://6388ac21d94a7e5040a3887c.mockapi.io/circolari/circolari');


        foreach ($response->json() as $circolare) {
            $circolare = Circolari::updateOrCreate(
                ['id' => $circolare['id']],
                [

                    'title' => $circolare['circolare']['titolo'],
                    'date' => date('Y-m-d H:i:s', strtotime($circolare['circolare']['data'])),
                    'destinatari' => $circolare['circolare']['destinatari'],
                    'area' => $circolare['circolare']['areaprincipale'],
                    'main_file' => $circolare['circolare']['documento']['documentoprincipale'],


                ]
            );
        }
    }



    public function index()
    {
        $response = Http::get('https://6388ac21d94a7e5040a3887c.mockapi.io/circolari/circolari');

        $jsonData = $response->json();

        //get first element from the array 



        $firstElement = $jsonData[0];




        dd($firstElement);
        dd($jsonData);
    }
}
