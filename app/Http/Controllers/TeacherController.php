<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = User::where('role','councellor')->orderBy('id','desc')->get();
        return view('admin.councellors.index',get_defined_vars());
    }
    public function add()
    {
        return view('admin.councellors.add');
    }
    public function store(Request $request)
    {
        $teacher = new User();
        $teacher->first_name = $request->first_name;
        $teacher->last_name = $request->last_name;
        $teacher->name = $request->first_name .' '.$request->last_name;
        $teacher->email = $request->email;
        $teacher->password =Hash::make($request->password);
        $teacher->role="councellor";
        $teacher->phone = $request->phone;
        $teacher->save();
        return redirect('councellors')->withSuccess('Teacher Added Successfully');
    }
    public function edit($id)
    {
        $teacher =User::find($id);
        return view('admin.councellors.edit',get_defined_vars());
    }
    public function update(Request $request,$id)
    {
        $teacher =User::find($id);
        $teacher->first_name = $request->first_name;
        $teacher->last_name = $request->last_name;
        $teacher->name = $request->first_name .' '.$request->last_name;
        $teacher->email = $request->email;
 
        $teacher->phone = $request->phone;
        $teacher->update();
        return redirect('councellors')->withSuccess('Teacher Updated Successfully');
    }
    public function delete($id)
    {
        $teacher =User::find($id);
        $teacher->delete();
        return redirect('councellors')->withError('Teacher Deleted Successfully');
    }
}
