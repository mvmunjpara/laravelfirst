<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $photos = Photo::get();

        return view('file-upload',compact('photos'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
        // $file = $request->file('photo');
        $request->validate(['photo'=>'required|mimes:png,jpg,jpeg|max:3000']);
        // image store as public access
        // $path = $request->file('photo')->store('image','public');
       
        //image store as local storage access
        // $path = $request->photo->store('image','local');

        //image store as original name
        // $filename = $file->getClientOriginalName(); 
        // $path =  $request->photo->storeAs('image',$filename,'public');
        // return $filename;

        //image store as original name with time
        // $file = $request->file('photo');
        // $filename = time().'_'.$file->getClientOriginalName(); 
        // $path =  $request->photo->storeAs('image',$filename,'public');
        // return $filename;

        //get file extension
        // $file = $request->file('photo');
        // $extension = $file->getClientOriginalExtension();
        // return $extension;

        //get excet file extension
        // $file = $request->file('photo');
        // $extension = $file->extension();
        // return $extension;

        //define image hasname
        // $file = $request->file('photo');
        // $extension = $file->hashName();
        // return $extension;

        //get client mime type
        // $file = $request->file('photo');
        // $extension = $file->getClientMimeType();
        // return $extension;

        // get file size
        // $file = $request->file('photo');
        // $extension = $file->getSize();
        // return $extension;

        //store image path in table
        // $file = $request->file('photo');
        // $path = $file->store('image','public');
        // $photo = Photo::create(['photos'=>$path]);

        $file =  $request->file('photo');
        $file->move(public_path('uploads'),$file->getClientOriginalName());
        $photo = Photo::create(['photos'=>$file->getClientOriginalName()]);


        return redirect()->back()->with('status','Photo save successfully!');

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
        $photo = Photo::find($id);
        return view('file-update',compact('photo'));
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
        // dd($request->all());
        $photo = Photo::find($id);
        if($request->hasFile('photo')){

            //Image delete 
            $image_path = public_path('storage/').$photo->photos;
            if(file_exists($image_path)){
                @unlink($image_path);
            }

            //Inage Update
            $path = $request->photo->store('image','public');
            $photo->photos = $path;
            $photo->save();

            return redirect('photo')->with('status','Photo update successfully!');
        }
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
        // dd($id);
        $photo = Photo::find($id);
        $photo->delete();
        $image_path = public_path('storage/',$photo->photos);
        // return $image_path;
        if(file_exists($image_path)){
            @unlink($image_path);
        }
        return redirect()->back()->with('status','Photo delete successfully!');
    }
}
