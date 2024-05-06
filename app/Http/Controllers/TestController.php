<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Single record get
        // $test = Test::find(1);
        // return $test->meta_data;
                
        //All data get
        // $test = Test::get();
        // return $test;

        //Ascending order
        // $test = Test::orderBy('meta_data->name','asc')->get();
        // return $test;

        //Descending order
        // $test = Test::orderBy('meta_data->name','desc')->get();
        // return $test;


        //Nested Data get
        // $test = Test::find(1);
        // return $test;

        // $test = Test::find(3);
        // return $test->meta_data;

        // $test = Test::find(3);
        // // return $test->meta_data['address']; 
        // return $test->meta_data['address']['street']. 
        //  $test->meta_data['address']['city'].
        //  $test->meta_data['address']['country']; 

        //Serach Data
        // $test = Test::where('meta_data->name','LIKE','sa%')->get();
        // return $test;

        //Search data whereJsonContains
        // $test = Test::whereJsonContains('meta_data->name','Yahoo Baba')->get();
        // return $test;

        // //Search data null name
        // $test = Test::whereJsonContains('meta_data->name',0)->get();
        // return $test;

        //Search data true name
        // $test = Test::whereJsonContains('meta_data->name',1)->get();
        // return $test;

        //Update data
        // $test = Test::where('id',2)->update(['meta_data->name'=>'Yahoo Baba']);

        // $test = Test::find(3);
        // // $test->meta_data['name'] = 'John Abrahm';
        // // $test->meta_data['address']['street'] = 'Update street test';
        // $test->meta_data['address']['country'] = 'London';
        // $test->save();

        // $test = Test::where('id',3)->update(['meta_data->address->city'=>'Delhi']);

        // Remove data in josn data
        // $test = Test::find(2);
        // $test->meta_data =collect($test->meta_data)->forget('email');
        // $test->save();

        //update data in json
        $test = Test::where('id',2)->update(['meta_data->email'=>'yahoobaba@gmail.com']);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $test = new Test;
        // $test->meta_data = [
        //     'name'=>'Yahoo Baba',
        //     'email'=>'yahoobaba@gmail.com',
        //     'mobile_number'=>'123456767'
        // ];
        // $test->save();

        $test = Test::create(
            ['meta_data'=>
                [
                    'name'=>'Test khan',
                    'email'=>'test@gmail.com',
                    'mobile_number'=>'1234567899',
                    'address'=>['street'=>'Test stree','city'=>'Test City','country'=>'India']

                ]
            ]);
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
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        //
    }
}
