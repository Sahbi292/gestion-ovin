<?php

namespace App\Http\Controllers;

use App\Http\Resources\RaceResource;
use App\Models\Race;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class RaceController extends Controller
{
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storerace(Request $request, Race  $race)
    {
        $race = Race::create($request->all());
        return response()->json([
            'message' => 'race Created Successfully!!!',
            'race' => $race
        ]);
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexrace()
    {
       

        return response()->json(
            [
                'message' => "race retuned successfully",
                'races' =>  RaceResource::collection(Race::get()),
            ],
            Response::HTTP_ACCEPTED
        );
       

    }
 
    public function updateRace(Request $request,  $id)
    {
        $race=Race::find($id);
    //  dd($race);
        $race->update($request->all());
        return response()->json([
            'message' => 'race Updated Successfully!!!',
            'race' => $race
        ]);
    }

    public function destroyrace(Race $race, $id): Response
    {

        $race->find($id)->delete();
        return response()->noContent();

        $race->delete();
        return response()->json([
            'message' => 'Race Deleted Successfully!!!'
        ]);
    }
}
