<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request;
// use Illumenate\Http\JsonResponse;
// use Illumenate\Http\Request;

class CotacaoDeViagemController extends Controller
{
    /**
     * Create a new controller instance.
     * 
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function quote() {
       /* $response = [
            "GRU,BRC,10",
            "GRU,SCL,18",
            "GRU,ORL,56",
            "GRU,CDG,75",
            "SCL,ORL,20",
            "BRC,SCL,5",
            "ORL,CDG,5"
        ];

        return response()->json($response) */
        return "retorna teste";
    }

    public function route(Request $request) {

        return [print_r($request->input())];

        //return "teste de mensagem via post";
    }
}