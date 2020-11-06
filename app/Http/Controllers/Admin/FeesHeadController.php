<?php

namespace App\Http\Controllers\Admin;
use App\model\Fees_Head;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeesHeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = Fees_Head::all();
        return view('auth.fees.fees_head',compact('users'));
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
            'fees_head' => 'required',
            
            
        ]);

        $users = new Fees_Head();
        $users->fees_head=$request->fees_head;
        $users->description=$request->description;
        $users->save();
        return redirect('fees_head')->with('success','Successfull Register');
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
        $users = Fees_Head::findorfail();
        return view('auth.fees.edit_fees',compact('users'));
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
        $users=  Fees_Head::findorfail($id);
        $users->delete();
        return redirect('fees_head')->with('success', 'Fees Head Deleted Successfully');
    }
}
