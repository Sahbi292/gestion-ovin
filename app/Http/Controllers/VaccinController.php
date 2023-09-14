<?php

namespace App\Http\Controllers;

use App\Http\Resources\VaccinResource;
use App\Models\Vaccin;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class VaccinController extends Controller
{
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storevaccin(Request $request, Vaccin  $vaccin)
    {
        $vaccin = Vaccin::create($request->all());
        return response()->json([
            'message' => 'vaccin added Successfully!!!',
            'vaccin' => $vaccin
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexvaccin()
    {
       

        return response()->json(
            [
                'message' => "vaccin retuned successfully",
                'vaccins' =>  VaccinResource::collection(Vaccin::get()),
            ],
            Response::HTTP_ACCEPTED
        );
       
    }
    public function updatevaccin(Request $request,  $id)
    {
        $vaccin=Vaccin::find($id);
    //  dd($race);
        $vaccin->update($request->all());
        return response()->json([
            'message' => 'vaccin Updated Successfully!!!',
            'vaccin' => $vaccin
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vaccin  $vaccin
     * @return \Illuminate\Http\Response
     */
    public function destroyvaccin(Vaccin $vaccin, $id)
    {
        $vaccinToDelete = $vaccin->find($id);

        if ($vaccinToDelete) {
            $vaccinToDelete->delete();
            return response()->json([
                'message' => 'vaccin Deleted Successfully!!!'
            ]);
        } else {
            return response()->json([
                'message' => ' vaccin not found!'
            ], 404);
        }
    }
}
