<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\SujetResource;
use App\Models\Sujet;
use Illuminate\Http\Response;

class SujetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
    public function store(Request $request, Sujet  $sujet)
    {
        $sujet = Sujet::create($request->sujet());
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
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sujet  $sujet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sujet $sujet)
    {
        $sujet->fill($request->sujet())->save();
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
    public function destroy(Sujet $sujet, $id): Response
    {

        $sujet->find($id)->delete();
        return response()->noContent();

        // $sujet->delete();
        // return response()->json([
        //     'message' => 'Sujet Deleted Successfully!!!'
        // ]);
    }
}
