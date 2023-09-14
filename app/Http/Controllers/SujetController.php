<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\SujetResource;
use App\Models\Lot;
use App\Models\Sujet;
use Illuminate\Http\Response;

class SujetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexsujet()
    {
        // $sujets = Sujet::all(['identifiant', 'genre', 'date_naissance', 'poids', 'note', 'id_parent']);
        // return response()->json($sujets);

        return response()->json(
            [
                'message' => "sujet retuned successfully",
                'sujets' =>  SujetResource::collection(Sujet::get()),
            ],
            Response::HTTP_ACCEPTED
        );
        // PostResources::collection(Sujet::get());

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storesujet(Request $request)
    {
        $lot = Lot::find($request->lot_id);
        $sujet = new Sujet();
        $sujet->fill($request->all());
        $lot->sujet()->save($sujet);
        
        return response()->json([
            'message' => 'Sujet Created Successfully!!!',
            'sujet' => $sujet
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sujet  $sujet
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sujet = Sujet::find($id);

        return response()->json(
            [
                'message' => "Sujets retuned successfully",
                'data' => $sujet,
            ],
            Response::HTTP_ACCEPTED
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sujet  $sujet
     * @return \Illuminate\Http\Response
     */
    public function edit(Sujet $sujet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sujet  $sujet
     * @return \Illuminate\Http\Response
     */
    public function updatesujet(Request $request,  $id)
    {
        $sujet=Sujet::find($id);
    //  dd($race);
        $sujet->update($request->all());
        return response()->json([
            'message' => 'sujet Updated Successfully!!!',
            'sujet' => $sujet
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sujet  $sujet
     * @return \Illuminate\Http\Response
     */
    public function destroysujet(Sujet $sujet, $id)
    {
        $sujetToDelete = $sujet->find($id);

        if ($sujetToDelete) {
            $sujetToDelete->delete();
            return response()->json([
                'message' => 'Sujet Deleted Successfully!!!'
            ]);
        } else {
            return response()->json([
                'message' => 'Sujet not found!'
            ], 404);
        }
    }
}
