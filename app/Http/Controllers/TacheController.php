<?php

namespace App\Http\Controllers;

use App\Http\Resources\TacheResource;
use App\Models\Tache;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TacheController extends Controller
{
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storetache(Request $request, Tache  $tache)
    {
        $tache = Tache::create($request->all());
        return response()->json([
            'message' => 'tache added Successfully!!!',
            'tache' => $tache
        ]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indextache()
    {
       

        return response()->json(
            [
                'message' => "tache retuned successfully",
                'vaccins' =>  TacheResource::collection(Tache::get()),
            ],
            Response::HTTP_ACCEPTED
        );
       
    }




    public function updatetache(Request $request,  $id)
    {
        $tache=Tache::find($id);
    //  dd($race);
        $tache->update($request->all());
        return response()->json([
            'message' => 'tache Updated Successfully!!!',
            'tache' => $tache
        ]);
    }


     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tache  $tache
     * @return \Illuminate\Http\Response
     */
    public function destroytache(Tache $tache, $id)
    {
        $tacheToDelete = $tache->find($id);

        if ($tacheToDelete) {
            $tacheToDelete->delete();
            return response()->json([
                'message' => 'tache Deleted Successfully!!!'
            ]);
        } else {
            return response()->json([
                'message' => ' tache not found!'
            ], 404);
        }
    }

}
