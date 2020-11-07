<?php

namespace App\Http\Controllers\Admin;
use App\model\SchoolProfile;
use App\User;
use App\Role;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SchoolProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = SchoolProfile::orderBy('id','ASC')->paginate(1);
        return view('auth.school_info.school_list',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('auth.school_info.new-school-profile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'school_name' => 'required',
        //     'email' => 'required',
        //     'school_type' => 'required',
        //     'contact_number' => 'required',
        //     'website' => 'required',
            
        // ]);
        
            $school = new SchoolProfile();
                $school->society_name= $request->society_name;
                $school->society_reg_no= $request->society_reg_no;
                $school->society_address=$request->society_address;
                $school->so_city=$request->so_city;
                $school->so_taluka=$request->so_taluka;
                $school->so_district=$request->so_district;
                $school->so_state=$request->so_state;
                $school->so_country=$request->so_country;
                $school->so_zip_code=$request->so_zip_code;
                $school->school_name= $request->school_name;
                $school->school_address=$request->school_address;
                $school->school_city=$request->school_city;
                $image = $request->file('file');
                if($image != '')
                {
                  $image_name = rand() . '.' . $image->getClientOriginalExtension();
                  $image->move(public_path('schoolLogo'), $image_name);
                }
                $school->file = $image_name;
                $school->school_taluka=$request->school_taluka;
                $school->school_district=$request->school_district;
                $school->school_state=$request->school_state;
                $school->school_country=$request->school_country;
                $school->school_zip_code=$request->school_zip_code;
                $school->school_type=$request->school_type;
                $school->serial_number= $request->serial_number;
                $school->genral_reg_no=$request->genral_reg_no;
                $school->school_recog_no=$request->school_recog_no;
                $school->udise_no=$request->udise_no;
                $school->affiliation_name=$request->affiliation_name;
                $school->gr_number=$request->gr_number;
                $school->medium=$request->medium;
                $school->board=$request->board;
                $school->contact_number=$request->contact_number;
                $school->email=$request->email;
                $school->website=$request->website;
                $school->save();

            return redirect('school_list')->with('success','Successfull Register');
    }
    public function StoreFile(Request $request)
    {
        //if request has file
        if ($request->hasFile('file')) {
            //storing file
            $path = public_path().'/schoolLogo/';
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = SchoolProfile::findorfail($id);
        return view('auth.school_info.edit-new-school-profile',compact('users'));
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
        $school =SchoolProfile::findorfail($id);
                $school->society_name= $request->society_name;
                $school->society_reg_no= $request->society_reg_no;
                $school->society_address=$request->society_address;
                $school->so_city=$request->so_city;
                $school->so_taluka=$request->so_taluka;
                $school->so_district=$request->so_district;
                $school->so_state=$request->so_state;
                $school->so_country=$request->so_country;
                $school->so_zip_code=$request->so_zip_code;
                $school->school_name= $request->school_name;
                $school->school_address=$request->school_address;
                $school->school_city=$request->school_city;
                $image_name = $request->hidden_image;
                $image = $request->file('file');
                if($image != '')
                {
                  $image_name = rand() . '.' . $image->getClientOriginalExtension();
                  $image->move(public_path('schoolLogo'), $image_name);
                }
                // $school->file=$request->$image_name;
                $school->school_taluka=$request->school_taluka;
                $school->school_district=$request->school_district;
                $school->school_state=$request->school_state;
                $school->school_country=$request->school_country;
                $school->school_zip_code=$request->school_zip_code;
                $school->school_type=$request->school_type;
                $school->serial_number= $request->serial_number;
                $school->genral_reg_no=$request->genral_reg_no;
                $school->school_recog_no=$request->school_recog_no;
                $school->udise_no=$request->udise_no;
                $school->affiliation_name=$request->affiliation_name;
                $school->gr_number=$request->gr_number;
                $school->medium=$request->medium;
                $school->board=$request->board;
                $school->contact_number=$request->contact_number;
                $school->email=$request->email;
                $school->website=$request->website;
                $school->update($request->all());
                $schoolimg = SchoolProfile::whereId($id)->update(['file' => $image_name]);
                return redirect('school_list')->with('success', 'School Profile Updated Successfully!');
    }
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users=  SchoolProfile::findorfail($id);
        $users->delete();
        return redirect('school_list')->with('success', 'School Profile Deleted Successfully');
        
    }
}
