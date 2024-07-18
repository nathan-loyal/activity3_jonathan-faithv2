<?php

namespace App\Http\Controllers;

use App\Models\StudentGrade;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return student::all();
        //return Student::limit(3)->get();

        //return Student::where ('province', 'Maryland')->get();
            //->where('province', 'California');
            //->get();
    
        return student::where ('fname', 'like', '%t%')->get();
          
        //return Sturdent::orderby('fname')->get();
        //return Sturdent::orderby('fname', 'desc')->get();

        //return Student::limit(3)->get();
     
       //return Student::whereIn('id', [1,3,5,7,9,11])->get();

       // return Student::with('grade')

       
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       // reutrn Student::find('$id')
       //$student = Student::find($id);
       //return $student->fname . ' ' . $student->lname;

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    
}