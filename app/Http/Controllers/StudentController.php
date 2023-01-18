<?php

namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view("welcome");
    }
    public function create()
    {
        return view("create");
    }
    public function store(Request $request)
    {
        $student = new Student;

        $student->cnic = $request->get('cnic');
        $student->name = $request->get('name');
        $student->address = $request->get('address');
        $student->telno = $request->get('telno');
        $student->age = $request->get('age');
        $student->save();

        return redirect('create')->with('status', 'CNIC ' . $student->cnic . ' added Successfully!');
    }
    public function read()
    {
        $students = Student::all();

        return view('read')->with(['students' => $students]);
    }

    public function edit($cnic)
    {
        $students = Student::find($cnic);
        return view('update')->with(['students' => $students]);
    }
    public function update(Request $request, $cnic)
    {
        $student = Student::find($cnic);
        $student->cnic = $request->get('cnic');
        $student->name = $request->get('name');
        $student->address = $request->get('address');
        $student->telno = $request->get('telNo');
        $student->age = $request->get('age');
        $student->save();

        return redirect('read')->with('status', 'CNIC ' . $cnic . ' updated Successfully!');

    }

    public function delete($cnic)
    {
        Student::destroy($cnic);
        return redirect('read')->with('status', 'CNIC '.$cnic.' deleted Successfully!');


    }

}