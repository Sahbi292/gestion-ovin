<?php

namespace App\Http\Controllers;

use App\Http\Resources\LotResource;
use App\Models\Lot;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class LotController extends Controller
{
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storelot(Request $request, Lot  $lot)
    {
        $lot = Lot::create($request->all());
        return response()->json([
            'message' => 'lot Created Successfully!!!',
            'lot' => $lot
        ]);
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexlot()
    {
       

        return response()->json(
            [
                'message' => "lot retuned successfully",
                'lots' =>  LotResource::collection(Lot::get()),
            ],
            Response::HTTP_ACCEPTED
        );
       
    }

    public function updatelot(Request $request,  $id)
    {
        $lot=Lot::find($id);
    //  dd($race);
        $lot->update($request->all());
        return response()->json([
            'message' => 'lot Updated Successfully!!!',
            'lot' => $lot
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lot  $lot
     * @return \Illuminate\Http\Response
     */
    public function destroylot(Lot $lot, $id)
    {
        $lotToDelete = $lot->find($id);

        if ($lotToDelete) {
            $lotToDelete->delete();
            return response()->json([
                'message' => 'lot Deleted Successfully!!!'
            ]);
        } else {
            return response()->json([
                'message' => 'lot not found!'
            ], 404);
        }
    }
}
