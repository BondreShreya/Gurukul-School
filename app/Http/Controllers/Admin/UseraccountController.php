<?php

namespace App\Http\Controllers\Admin;
use App\model\UserAccount;
use App\User;
use App\Role;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UseraccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = UserAccount::all();
        return view('auth.setup.user_account',compact('user'));
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

        $user= new UserAccount();
            $user->name=$request->name;
            $user->email=$request->email;
            $user->password=$request->password;
            $user->password_confirmation=$request->password_confirmation;
            $user->mobileNumber=$request->mobileNumber;
            $user->userProfile=$request->userProfile;
            $user->description=$request->description;
            $user->save();

            
      return redirect('user_account_create')->with('success','Successfull Register');
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
        $user = UserAccount::findorfail($id);
        return view('auth.setup.edit_user_account',compact('user'));
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
        
        $user = UserAccount::findorfail($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->mobileNumber=$request->mobileNumber;
        $user->userProfile=$request->userProfile;
        $user->description=$request->description;
        $user->update($request->all());
    return redirect('user_account_create')->with('success', 'User Account Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $user=  UserAccount::findorfail($id);
        $user->delete();
        return redirect('user_account_create')->with('success', 'User Account Deleted Successfully');
    }
}
