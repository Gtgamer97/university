<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Http\Request;
use App\Http\Requests\LecturerRequest;
use App\Http\Resources\LecturerResource;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return LecturerResource::collection(Lecturer::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\LecturerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LecturerRequest $request)
    {
        $newLecturer = Lecturer::create($request->all());
        return new LecturerResource($newLecturer);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $lecturer = Lecturer::find($id);
        $lecturer->update($request->all());
        return $lecturer;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Lecturer::destroy($id);
    }
}
