<?php

namespace App\Http\Controllers;

use App\Http\Resources\AlimentationResource;
use App\Models\Alimentation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AlimentationController extends Controller
{
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storealimentation(Request $request, Alimentation  $alimentation)
    {
        $alimentation = Alimentation::create($request->all());
        return response()->json([
            'message' => 'alimentation added Successfully!!!',
            'alimentation' => $alimentation
        ]);
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexalimentation()
    {
       

        return response()->json(
            [
                'message' => "alimentation retuned successfully",
                'alimentations' =>  AlimentationResource::collection(Alimentation::get()),
            ],
            Response::HTTP_ACCEPTED
        );
       
    }
    public function updatealimentation(Request $request,  $id)
    {
        $alimentation=Alimentation::find($id);
    //  dd($race);
        $alimentation->update($request->all());
        return response()->json([
            'message' => 'alimentation Updated Successfully!!!',
            'alimentation' => $alimentation
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alimentation  $alimentation
     * @return \Illuminate\Http\Response
     */
    public function destroyalimentation(Alimentation $alimentation, $id)
    {
        $alimentationToDelete = $alimentation->find($id);

        if ($alimentationToDelete) {
            $alimentationToDelete->delete();
            return response()->json([
                'message' => 'alimentation Deleted Successfully!!!'
            ]);
        } else {
            return response()->json([
                'message' => ' alimentation not found!'
            ], 404);
        }
    }

}
