<?php

namespace App\Http\Controllers;

Use app\Models\Student;
Use app\Models\SubjectGrade;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return student::all();

        //return student::where ('province', 'Arkansas')->get();

        //return student:: where('province', 'Kansas')
        //->where('fname', 'jules')
        //->get();

        //return student:: where('province', 'Kansas')
        //->orwhere('province', 'Arkansas')
        //->get();

        //return student:: where('province', 'Kansas')
        //->orwhere('province', 'Arkansas')
        //->orwhere('fname', 'Brad')
        //->get();

        //return student::where('province', 'like', '%t%')->get();

        //return student::orderBy('fname')->get();
        //return student::orderBy('fname', 'desc')->get();
        
        //return student::limit(7)->get();

        //return student:: where('province', 'Kansas')->first();


        //return student::with('grades')->get();

        return student::with(['grades' => function($query) {
            return $query->where('grade', '>=', 97);
            }])->get();
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
        //return student::find ($id);
        //$student = Student::find($id);
        //return $student->fname . ' ' . student->lname;
        //$student = Student::find($id);
        //return $student->fullname; 

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
