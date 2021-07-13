<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Student::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\StudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
        /*
        $request->validate([
            'id'=>'numeric|unique:students',
            'major_id' => 'required|numeric',
            //required | allow only alphabets and spaces
            'name'=>'required|regex:/^[\pL\s\-]+$/u',
            //required | allow only alphabets and spaces
            'surname'=>'required|regex:/^[\pL\s\-]+$/u',
            'personal_id' => 'required|numeric|unique:students',
            'phone_number' => 'required|numeric|unique:students',
            'email' => 'required|unique:students',
            'address' => 'required',
            'date_of_birth' => 'required',
            'sex' => 'required|alpha'
        ]);
        */

        $validated = $request->validated();

        return Student::create($request->all());
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
        $student = Student::find($id);
        $student->update($request->all());
        return $student;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Student::destroy($id);
    }
}
