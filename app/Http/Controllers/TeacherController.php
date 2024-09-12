<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::paginate(5);
        return view('teachers.index', compact('teachers'));
    }

    public function create()
    {
        return view('teachers.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Teacher::create($input);
        return redirect('teachers')->with('flash_message', 'Teacher Added!');
    }

    public function show($id)
    {
        $teachers = Teacher::find($id);
        return view('teachers.show', compact('teachers'));
    }

    public function edit($id)
    {
        $teachers = Teacher::find($id);
        return view('teachers.edit', compact('teachers'));
    }

    public function update(Request $request, $id)
    {
        $teachers = Teacher::find($id);
        $teachers->update($request->all());
        return redirect('teachers')->with('flash_message', 'Teacher Updated!');
    }

    public function destroy($id)
    {
        Teacher::destroy($id);
        return redirect('teachers')->with('flash_message', 'Teacher deleted!');
    }
}
