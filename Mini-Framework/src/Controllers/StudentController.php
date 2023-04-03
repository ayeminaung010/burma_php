<?php

    namespace App\Controllers;
    // use App\Utli\Database;
    use Symfony\Component\HttpFoundation\Request;
    use App\Models\Student;


    class StudentController 
    {
        private $query,$post;

        public function index()
        {
            
            $students = Student::get();
            
            return view('index.php',['students' => $students]);

        }

        public function show($id)
        {
            $student = Student::find($id);
            return view('show.php',['student' => $student]);
        }

        public function create()
        {
            return view('create.php');
        }
       
        public function store(Request $request)
        {
            $student = Student::create($request->request->all());
            if($student){
                header("location: /index");
            }
        }

        public function edit($id)
        {
            $student = Student::find($id);
            return view('edit.php',['student' => $student]);
        }

        public function update(Request $request,$id)
        {
            $result = Student::find($id)->update($request->request->all());

            if($result){
                header("location: /index");
            }
        }

        public function destroy($id)
        {
            $student = Student::find($id);
            $result = $student->delete();
            if($result){
                header("location: /index");
            }
        }
    }

?>