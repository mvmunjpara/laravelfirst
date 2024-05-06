<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Contact;
class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $student = Student::all();
        // $student = Student::with('contact')->get();
        // $student = Student::with('contact')->get();
        // $student = Student::with('contact')->where('gender','M')->get();
        // $student = Student::withwhereHas('contact',function($query){
        //     $query->where('city','Ahedabad');
        // })->get();
        // $student = Student::where('gender','F')->withwhereHas('contact',function($query){
        //     $query->where('city','Bhavnagar');
        // })->get();
        $student = Student::where('gender','M')->whereHas('contact',function($query){
            $query->where('city','Ahmedabad');
        })->get();
        return $student;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $student = Student::create(['name'=>'John Abrahm','age'=>18,'gender'=>'M']);

        $student->contact()->create(['email'=>'john@gmail.com','phone'=>'123456789','address'=>'John address','city'=>'Mumbai']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
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
