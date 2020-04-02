<?php

namespace App\Http\Controllers;

// use App\Http\Requests\Request;
// use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\Cotacao;

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

    /**
     * GET /quote
     * @return mixed
     */
    public function quote()
    {
        try {
            return Cotacao::all();
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'error' => [
                    'message' => 'Quotes not found'
                ]
            ], 404);
        }
    }

    /**
     * GET /quote
     * @return mixed
     */
    public function travelQuote($from, $to)
    {
        try {
            //return Cotacao::all();
            $result = app('db')->select("SELECT * FROM cotacao WHERE `from` = '{$from}' AND `to` = '{$to}'");

            return response()->json([$from, $to, [$result]]);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'error' => [
                    'message' => 'Travel Quotes not found'
                ]
            ], 404);
        }
    }

    /**
     * POST /route
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function route(Request $request)
    {
        try {
            $quote = Cotacao::create($request->all());
            return response()->json(['created' => true], 201);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'error' => [
                    'message' => 'Not create a travel quote '
                ]
            ], 404);
        }
    }
}