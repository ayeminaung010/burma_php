<?php

    namespace App\Controllers;
    // use App\Utli\Database;
    use App\Models\Student;

    class StudentController 
    {
        public function index()
        {
            $students = Student::get();
            view('index.php',['students' => $students]);
        }

        public function show()
        {
            $student = Student::where('id','=',$id)->first();
            view('show.php',['student' => $student]);
        }

        public function create()
        {
            view('create.php');
        }
       
    }

?>