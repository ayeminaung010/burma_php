<?php

    namespace App\Controllers;
    // use App\Utli\Database;
    use Symfony\Component\HttpFoundation\Request;
    use App\Models\Student;

    class StudentController 
    {
        private $query,$post;

        public function __construct()
        {
            $request = Request::createFromGlobals();
            $this->query = $request->query;
            $this->post = $request->request ;
        }

        public function index()
        {
            $students = Student::get();
            
            view('index.php',['students' => $students]);
        }

        public function show()
        {
            $student = Student::where('id','=',$this->query->get('id'))->first();
            view('show.php',['student' => $student]);
        }

        public function create()
        {
            view('create.php');
        }
       
        public function store()
        {
            $student = Student::create($this->post->all());
            if($student){
                header("location: /index");
            }
        }

        public function edit()
        {
            $student = Student::find($this->query->get('id'));
            view('edit.php',['student' => $student]);
        }

        public function update()
        {
            $result = Student::find($this->post->get('id'))->update($this->post->all());

            if($result){
                header("location: /index");
            }
        }

        public function destroy()
        {
            $student = Student::find($this->query->get('id'));
            $result = $student->delete();
            if($result){
                header("location: /index");
            }
        }
    }

?>