<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnimalsController extends Controller
{

    /**
     * @SWG\Get(
     *     path="/api/animals",
     *     summary="List of available animals",
     *     @SWG\Response(response="200", description="List of available animals"),
     *     @SWG\Response(response="default", description="an unexpected error"),
     *     security={
     *         {
     *             "type": "apiKey",
     *             "in": "header",
     *             "name": "MY-API-KEY"
     *         }
     *     }
     * )
     */
    public function index()
    {
        //
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
     * @SWG\Post(
     *     path="/api/animals",
     *     summary="Store a new created animal",
     *     @SWG\Parameter(
     *         name="name",
     *         in="path",
     *         description="Animal name.",
     *         required=true,
     *         type="string"
     *     ),
     *     @SWG\Response(response="200", description="successful creation of animal"),
     *     @SWG\Response(response=500, description="internal server error")
     * )
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
