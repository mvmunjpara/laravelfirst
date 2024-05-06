<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
class StudentController extends Controller
{
    //
    public function index(){
       // $data['student'] =  DB::table('students')->get();
       // $data =  DB::table('students')->get();
       // $data =  DB::table('students')->where('name','Test')->get();
       // $data =  DB::table('students')->whereIn('name',['Test'])->get();
       // $data =  DB::table('students')->whereNotIn('name',['Test'])->get();
       // $data =  DB::table('students')->orWhereIn('name',['Test'])->get();
       // $data =  DB::table('students')->whereNull('name')->get();
       // $data =  DB::table('students')->whereNotNull('name')->get();
       // $data =  DB::table('students')->whereDate('created_at','2024-04-18')->get();
       // $data =  DB::table('students')->whereMonth('created_at','04')->get();
       // $data =  DB::table('students')->whereDay('created_at','18')->get();
       // $data =  DB::table('students')->whereYear('created_at','2025')->get();
       // $data =  DB::table('students')->whereTime('created_at','20:21:11')->get();
       // $data =  DB::table('students')->orderBy('created_at','asc')->get();
       // $data =  DB::table('students')->orderBy('created_at','desc')->first();
       // $data =  DB::table('students')->orderBy('created_at','desc')->latest()->first();
       // $data =  DB::table('students')->oldest()->first();
       // $data =  DB::table('students')->inRandomOrder()->first();
       $data =  DB::table('students')->limit(1)->get();
       $data =  DB::table('students')->limit(3)->offset(1)->get();
       // dd($data);
       return view("show",['data'=>$data]);
    }
    public function show(){
        $data = DB::table('students')->simplePaginate(2);
        return view('show',['data'=>$data]);
    }
    public function views($id){
        // $data['student'] = DB::table('students')->where('id',$id)->get();
        $data['student'] = Student::where('id',$id)->first();
       
        return view('views',compact('data'));
    }
    public function addstudent(){
        // $addStudent = DB::table('students')->insert(['name'=>'Test4','email'=>'Test4@gmail.com','created_at'=>now(),'updated_at'=>now()]);

        // $addStudent = DB::table('students')->insertOrIgnore(['name'=>'test5','email'=>'test5@gmail.com','created_at'=>now(),'updated_at'=>now()]);
        // $addStudent = DB::table('students')->upsert(['name'=>'test5','email'=>'test5@gmail.com','created_at'=>now(),'updated_at'=>now()],['email']);
        // if($addStudent){
        //     echo "<h1>Studetn add success</h1>";
        // }else{
        //     echo "<h2>No add</h2>";
        // }
        return view("addstudent");
    }
    public function store(Request $request){
        $student = DB::table('students')->insert(['name'=>$request->name,'email'=>$request->email]);
        if($student){
            echo "Student insert successfully";
        }else{
            echo "Student not insert";
        }
        return redirect()->back();
    }
    public function edit($id){
        $student = DB::table('students')->where('id',$id)->first();
        return view('edit',['student'=>$student]);
    }
    public function update(Request $request,$id){
        // dd($id);
        $update = DB::table('students')->where('id',$id)->update([
            'name'=>$request->name,'email'=>$request->email]);
       
        return redirect()->route('show')->with('message','Record updated successfully');
    }
    public function delete($id){
        // dd($id);
        $student = DB::table('students')->where('id',$id)->delete();
        return redirect()->route('show')->with('message','Recored delete successfully');
    }
    public function deleteStudent(){
        $deleteStudent = DB::table('students')->where('id','5')->delete();
        if($deleteStudent){
            echo "Delete student successfully";
        }else{
            echo "Not Delete";
        }
    }
    public function Studentjoins(){
        $students =DB::table('students')->join('cities','students.city','=','cities.id')->select('students.*','cities.city_name')->get();
        return view('studentjoin',compact('students'));
    }
}
