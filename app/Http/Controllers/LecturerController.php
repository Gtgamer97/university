<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Lecturer::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'id'=>'numeric|unique:lecturers',
            //required | allow only alphabets and spaces
            'name'=>'required|regex:/^[\pL\s\-]+$/u',
            //required | allow only alphabets and spaces
            'surname'=>'required|regex:/^[\pL\s\-]+$/u',
            'personal_id'=>'required|numeric|unique:lecturers',
            'phone_number'=>'required|numeric|unique:lecturers',
            'email'=>'required|unique:lecturers',
            'address'=>'required',
            'date_of_birth'=>'required',
            'sex'=>'required|alpha',
            //required | without spaces
            'bank_account_number'=>'required|regex:/^\S*$/u',
            //required | only alphabets with spaces
            'ranks'=>'required|regex:/^[\pL\s\-]+$/u',
        ]);

        return Lecturer::create($request->all());
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
