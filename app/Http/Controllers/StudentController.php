<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function index()
    {
        $students = User::where('role','student')->orderBy('id','desc')->get();
        return view('admin.students.index',get_defined_vars());
    }
    public function add()
    {
        return view('admin.students.add');
    }
    public function store(Request $request)
    {
        $student = new User();
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->name = $request->first_name .' '.$request->last_name;
        $student->email = $request->email;
        $student->password =Hash::make($request->password);
        $student->role="student";
        $student->phone = $request->phone;
        $student->save();
        return redirect('students')->withSuccess('Student Added Successfully');
    }
    public function edit($id)
    {
        $student =User::find($id);
        return view('admin.students.edit',get_defined_vars());
    }
    public function update(Request $request,$id)
    {
        $student =User::find($id);
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->name = $request->first_name .' '.$request->last_name;
        $student->email = $request->email;
 
        $student->phone = $request->phone;
        $student->update();
        return redirect('students')->withSuccess('Student Updated Successfully');
    }
    public function delete($id)
    {
        $student =User::find($id);
        $student->delete();
        return redirect('students')->withError('Student Deleted Successfully');
    }
}
