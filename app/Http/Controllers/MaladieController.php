<?php

namespace App\Http\Controllers;

use App\Http\Resources\MaladieResource;
use App\Models\Maladie;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MaladieController extends Controller
{
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storemaladie(Request $request, Maladie  $maladie)
    {
        $maladie = Maladie::create($request->all());
        return response()->json([
            'message' => 'maladie added Successfully!!!',
            'maladie' => $maladie
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexmaladie()
    {
       

        return response()->json(
            [
                'message' => "maladies retuned successfully",
                'maladies' =>  MaladieResource::collection(Maladie::get()),
            ],
            Response::HTTP_ACCEPTED
        );
       
    }
    public function updatemaladie(Request $request,  $id)
    {
        $maladie=Maladie::find($id);
    //  dd($race);
        $maladie->update($request->all());
        return response()->json([
            'message' => 'maladie Updated Successfully!!!',
            'maladie' => $maladie
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Maladie  $maladie
     * @return \Illuminate\Http\Response
     */
    public function destroymaladie(Maladie $maladie, $id)
    {
        $maladieToDelete = $maladie->find($id);

        if ($maladieToDelete) {
            $maladieToDelete->delete();
            return response()->json([
                'message' => 'maladie Deleted Successfully!!!'
            ]);
        } else {
            return response()->json([
                'message' => ' maladie not found!'
            ], 404);
        }
    }
}
