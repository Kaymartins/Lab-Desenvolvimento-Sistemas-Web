<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Requests\StudentRequest;
use App\Models\Grade;
use App\Models\Student;
use App\Models\Team;
use Illuminate\Http\Request;

class StudentController extends Controller
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
    public function create(Request $request, Team $team)
    {
        $student = New Student();

        return view('students.create')
            ->with('student',$student)
            ->with('team',$team);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $studentRequest, Team $team)
    {
        $studentRequest->validated();

        $student = Student::create([
            'name' => $studentRequest->name,
            'team_id' => $team->id
        ]);

        session()->flash('status','aluno cadastrado com successo');
        return to_route('teams.show',$team->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $grades = Grade::all()->where('student_id',$student->id);

        return view('students.show')
            ->with('student',$student)
            ->with('grades',$grades);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit')->with('student',$student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(StudentRequest $request, Student $student)
    {
        try {
            $data = $request->validated();

            $student->update($data);
        }catch(\Exception $e){
            return $e->getMessage();
        }


        session()->flash('status','Aluno editado com successo');
        return to_route('teams.show',$student->team_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $id = $student->team_id;
        $student->delete();
        session()->flash('status','Aluno removido com sucesso');
        return to_route('teams.show',$id);
    }
}
