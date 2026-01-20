<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class StudentController extends Controller
{
    public function index()
    {
        $student = [
            ['name' => 'Alice', 'age','22'],
            ['name' => 'ABC', 'age','26'],
            ['name' => 'BBA', 'age','25'],

        ];
        return view('student', ['student' => $student]);
    }
}