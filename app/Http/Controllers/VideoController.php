<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Video;
use App\Models\Comment;
use App\Models\Tag;
class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $video = Video::find(1);
        // return $video->comments;

        // $video = Video::find(1);
        // echo "<h1>$video->title</h1>";
        // echo "<h1>$video->url</h1>";

        // foreach($video->comments as $comment){
        //     echo $comment->details;
        //     echo "<hr>";
        // }

        //latest video comment with post show
        // $video = Video::with('latestComment')->find(1);
        // return $video; 

        //Oldest video  comment with post show
        // $video = Video::with('oldestComment')->find(2);
        // return $video;

        //Maximum likes in video
        // $video = Video::with('BestComment')->find(2);
        // return $video;

        //Minimum likes in video
        // $video = Video::with('leastComment')->find(1);
        // return $video;

        // $video = Video::find(1);
        // return $video->leastComment;

        // $video = Video::find(1);
        // return $video->BestComment;

        //Display post tags
        $post = Post::find(1);
        return $post->tags;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $video = Video::find(2);
        // $video->comments()->create(['details'=>'Good Video']);

        $video = Video::find(2);
        $video->tags()->detach(2);

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
