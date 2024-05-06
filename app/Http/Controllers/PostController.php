<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $post = Post::get();
        // $post = Post::with('user')->get();
        // $post = Post::with('user')->find(2);
        // $post = Post::with('user')->find(2);
        
        // $post = Post::with('user')->get();
        // foreach($post as $post){
        // echo $post->title."<br>";
        // echo $post->description."<br>";
        // echo $post->user->name."<br>";
        // }

        // $post = Post::with('user')->where('title','PHP Language')->get();
        // foreach($post as $post){
        // echo $post->title."<br>";
        // echo $post->description."<br>";
        // echo $post->user->name."<br>";
        // }

        // $post = Post::withWhereHas('user',function($query){
        //     $query->where('name','yahoo baba');
        // })->get();
        // foreach($post as $post){
        // echo $post->title."<br>";
        // echo $post->description."<br>";
        // echo $post->user->name."<br>";
        // }

        // $post = Post::withWhereHas('user',function($query){
        //     $query->where('name','yahoo baba')->orWhere('name','Dipika');
                
        // })->get();
        // foreach($post as $post){
        // echo $post->title."<br>";
        // echo $post->description."<br>";
        // echo $post->user->name."<br>";
        // }

        // $user = User::where('name','yahoo baba')->get();
        // $post = Post::whereBelongsTo($user)->get();
        // return $user;

        // $post = Post::with('image')->find(10);
        // return $post;

        //Only Image show data
        // $post = Post::find('10');
        // return $post->image;

        // $post = Post::with('tags')->find(12);
        // return $post;
        $posts = Post::with('tags')->get();
        foreach($posts as $post){
            echo "<h2>$post->title</h2>";
            echo "<p>$post->description</p>";
            foreach($post->tags as $tag){
                echo $tag->tag_name;
            }
            echo "<hr>";
        }
        // return $posts;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $post = Post::create([
        //     'title'=>'New post title one',
        //     'description'=>'this is new post with image','user_id'=>'1']);
        // $post->image()->create(['url'=>'images/post/post-one.jpg']);
    
        // $post = Post::create(['title'=>"New post title",'description'=>'this post description','user_id'=>'1']);
        // $post->comments()->create(['details'=>'this is post comments']);

        // $post = Post::create(['title'=>'News title four','description'=>'this test for description','user_id'=>'1']);
        // $post->tags()->create(['tag_name'=>'Sachin Tendulkar']);

        // $post = Post::create(['title'=>'This is test post','description'=>'This test description','user_id'=>'1']);
        // $post->tags()->attach(5);

        $post = Post::find(3);
        $post->tags()->attach([2,6]);



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
