<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Order;
use App\Models\User;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $customers = Customer::get();
        // $customers = Customer::with('latestOrder')->get();
        // return $customers;

        //Oldest Order Get
        // $customers = Customer::with('oldestOrder')->get();
        // return $customers;

        //Oldest Order Get Only One
        // $customers = Customer::with('oldestOrder')->find(2);
        // return $customers;

        //Customer Smallest Order 
        // $customer = Customer::with('smallestOrder')->find(2);
        // return $customer;

        //All Customer Smallest Order get
        // $customer = Customer::with('smallestOrder')->get();
        // return $customer;
        //Customer Largest Order
        // $customer = Customer::with('largestOrder')->find(3);
        // return $customer;

        //All customer largest order get
        // $customer = Customer::with('largestOrder')->get();
        // return $customer;

        //Get customer all orders gets
        // $customer = Customer::with('orders')->get();
        // return $customer;

        //Get customer all latest order get
        $customer = Customer::with('orders')->with('latestOrder')->get();
        return $customer; 

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
