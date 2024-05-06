<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user = User::get();
        // $user = User::with('post')->get();
        
        // $user = User::with('post')->find(1);
        // $post = $user->post;
        // return $post;

        // $user = User::doesntHave('post')->get();
        // return $user;

        // $user = User::has('post')->get();
        // return $user;

        // $user = User::has('post')->with('post')->get();
        // return $user;

        // $user = User::has('post','>=',1)->with('post')->get();
        // return $user;

        // $user = User::withCount('post')->get();
        // return $user;

        // $user = User::select(['name','email'])->withCount('post')->get();
        // return $user;

        // $user = User::find(1);
        // return $user->roles;

        // $user = User::find(1);
        // foreach($user->roles as $role){
        //     echo $role->role_name."<br>";
        // }

        // $users = User::get();
        // foreach($users as $user){
        //     echo $user->name."<br>";
        //     echo $user->email."<br>";
        //     foreach($user->roles as $role){
        //         echo $role->role_name."<br>";
        //     }echo "<hr>";
        // }

        //User Get Data
        // $users = User::with('company')->with('phoneNumber')->get();
        // return $users;
        
        // $users = User::with('company')->with('phoneNumber')->find(2);
        // echo $users->name."<br>";
        // echo $users->company->company_name."<br>";
        // echo $users->phoneNumber->number."<br>";
        // return $users;

        //Get All Data 
        // $users = User::with('company')->with('phoneNumber')->get();
        // foreach($users as $user){
        //     echo $user->name."<br>";
        //     echo $user->company->company_name."<br>";
        //     echo $user->phoneNumber->number."<br>";
        //     echo "<hr>";
        // }

        //Get all user post
        // $users = User::with('posts')->get();
        // return $users;

        // Get all user posts with country name
        // $users = User::with('posts')->with('country')->get();
        // return $users;

        //Get All User Data with image
        // $user = User::with('image')->get();
        // return $user;

        //Get User post data
        // $user = User::with('post')->find(1);
        // return $user;

        //User delete and at same time user post delete
        $post = User::find(6)->delete();
        // Post::where('user_id',5)->delete();
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $post = new Post(['title'=>'News title test','description'=>'just testing']);
        // $user = User::find(2);
        // $user->post()->save($post);


        // $user = User::find(2);
        // $user->post()->create(['title'=>'New test 2...','description'=>'just testing']);

        // $user = User::find(2);
        // $user->post()->createMany([['title'=>'New post 3','description'=>'just new post 3'],['title'=>'New post 4','description'=>'just new post 4']]);

        // Add Role 
        // $user = User::find(4);
        // $user->roles()->attach(1);

        //Add Multiple role add
        // $user = User::find(4);
        // $roles = [2,3];
        // $user->roles()->attach($roles);

        //Delete Role
        // $user = User::find(4);
        // $user->roles()->detach(1);

        //Update Role
        // $user = User::find(4);
        // $roles = [1,4];
        // $user->roles()->sync($roles);

        $user = User::find(3);
        $user->image()->create(['url'=>'images/user/deepika.jpg']);


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
