<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accessormutator;
class AccessormutatorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accessormutators = Accessormutator::get();
        return view('accesssormutator.index',compact('accessormutators'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accesssormutator.create');
    }
    public function view($id){
        $accessormutator = Accessormutator::find($id); 
        return view('accesssormutator.view',compact('accessormutator'));

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
        // dd($request->all());
        $request->validate([
            'user_name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'dob'=>'required',
            'salary'=>'required|numeric'
        ]);
        $accessormutator = Accessormutator::create([
            'user_name'=>$request->user_name,
            'email'=>$request->email,
            'password'=>$request->password,
            'dob'=>$request->dob,
            'salary'=>$request->salary,
        ]);
        return redirect('accessorsmutators')->with('message','User data add successfully!');

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
        $accessormutator = Accessormutator::find($id);
        return view('accesssormutator.edit',compact('accessormutator'));
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
        // dd($request->all());
        $request->validate([
            'user_name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'dob'=>'required',
            'salary'=>'required|numeric'
        ]);
        $accessormutator = Accessormutator::find($id)->update([
            'user_name'=>$request->user_name,
            'email'=>$request->email,
            'password'=>$request->password,
            'dob'=>$request->dob,
            'salary'=>$request->salary
        ]);
        return redirect('accessorsmutators')->with('message','Record updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        $accessormutator = Accessormutator::find($id);
        $accessormutator->delete();
        return redirect('accessorsmutators')->with('message','Record delete successfully!');

    }
}
