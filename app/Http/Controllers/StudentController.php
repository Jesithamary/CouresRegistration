<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentModel;

class StudentController extends Controller

    
{
    public function index()
    {
        $users = StudentModel::orderBy('id','Desc')->get(); 
        
    
        return view('backend.pages.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.stuform');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
         
        StudentModel::create($request->all());
  
        return redirect()->route('student.list')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = StudentModel::where('id',$id)->first();
        

        return view('backend.pages.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = StudentModel::where('id',$id)->first();

        return view('backend.pages.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = StudentModel::find($id);
       
        $user->update($request->all());
        // echo"<pre>"; print_r($user);exit;
        return redirect()->route('student.list')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = StudentModel::where('id',$id)->first();

        
        $user->delete();
    
                        

        return redirect()->route('student.list')
        ->with('success','Product deleted successfully');
    }



}
    
   

