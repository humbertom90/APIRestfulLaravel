<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\buyer;

class buyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compradores = buyer::has('transactions')->get();

        return response()->json(['data' => $compradores], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $compradores = buyer::has('transactions')->findOrFail($id);

        return response()->json(['data' => $compradores], 200);
    }


}
