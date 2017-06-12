<?php

namespace App\Http\Controllers;

use App\deviceId;
use Illuminate\Http\Request;

class DeviceIdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(){
       $post = new deviceId;
       $post->RollNo=request('roll');
       $post->DeviceId=request('id');
       $post->save();
       return redirect('/login');
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\deviceId  $deviceId
     * @return \Illuminate\Http\Response
     */
    public function show(deviceId $deviceId)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\deviceId  $deviceId
     * @return \Illuminate\Http\Response
     */
    public function edit(deviceId $deviceId)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\deviceId  $deviceId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, deviceId $deviceId)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\deviceId  $deviceId
     * @return \Illuminate\Http\Response
     */
    public function destroy(deviceId $deviceId)
    {
        //
    }
}
