<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Teacher;





class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = Teacher::orderBy('id','ASC')->get();
      return view('auth.teacher_info.teacher_list',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        
        $users = Teacher::all();
        return view('auth.teacher_info.new_teacher_profile',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
           
            
        ]);
        $teachInfo = new Teacher();
        $teachInfo->name = $request->name;
        $teachInfo->email = $request->email;
        $teachInfo->qualification = $request->qualification;
        $teachInfo->designation = $request->designation;
        $image = $request->file('file');
            if($image != '')
            {
                $image_name = rand() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('teacherImg'), $image_name);
            }
        $teachInfo->file =$image_name;
        $teachInfo->save();
        return redirect('teacher_list')->with('success','Successfull Register');
    }

    public function StoreFile($request)
    {
        //if request has file
        if ($request->hasFile('file')) {
            //storing file
            $path = public_path().'/teacherImg/';
            //upload new file
            $file = $request->file;
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            return $filename;
        }
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
        $teachInfo = Teacher::findorfail($id);
        return view('auth.teacher_info.edit_teacher', compact('teachInfo'));

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
        $teachInfo= Teacher::findorfail($id);
        $image_name = $request->hidden_image;
        $image = $request->file('file');
        if($image != '')
        {
            
        $image_name = rand() . '.' . $image->getClientOriginalExtension();
        // $image->storeAs('public/tempcourseimg',$image_name);
        $image->move(public_path('teacherImg'), $image_name);
        }
       
        $input_data = array (
            'name' => $request->name,
            'email' => $request->email,
            'qualification' => $request->qualification,
            'designation' => $request->designation,
            'file' => $image_name,
           
        );
        $teachInfo->update($request->all());
        $teacherimg = Teacher::whereId($id)->update(['file' => $image_name]);
        Teacher::whereId($id)->update($input_data);
       return redirect('/teacher_list')->with('success', 'Teacher Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teachInfo=Teacher::findorfail($id);
        $teachInfo->delete();
        return redirect('teacher_list')->with('success', 'Teacher Deleted Successfully');
    }
}
