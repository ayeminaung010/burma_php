<?php

    namespace App\Utli;


    use Illuminate\Database\Capsule\Manager as DB;
    use App\Utli\Student;

    class Database 
    {
        public function __construct()
        {
            $db = new DB;

            $db->addConnection([
                'driver' => 'mysql',
                'host' => 'localhost',
                'database' => 'school',
                'username' => 'root',
                'password' => 'kali',
                'charset' => 'utf8',
                'collation' => 'utf8_unicode_ci',
                'prefix' => '',
            ]);

            $db->setAsGlobal();

            $db->bootEloquent();
        }

        public function index()
        {
            $students = Student::get();
            return $students;
        }

        public function destroy($id)
        {
            $result = Student::xwhere('id','=',$id)->delete();
            if($result){
                header('location: index.php');
            }
        }

        public function store($data)
        {
            $id = Student::xinsertGetId([
                'name' => $data['name'],
                'email' => $data['email'],
                'gender' => $data['gender'],
                'dob' => $data['dob'],
                'age' => $data['age'],
            ]);
            
            if($id){
                echo 'data new added..';
                header('location: index.php');
            }else{
                echo 'Something Wrong';
            }
        }

        public function show($id)
        {
            $student = Student::xwhere('id','=',$id)->first();
            return $student;
        }

        public function update($data)
        {
            $id = Student::xwhere('id',$data['id'])->update([
                'name' => $data['name'],
                'email' => $data['email'],
                'gender' => $data['gender'],
                'dob' => $data['dob'],
                'age' => $data['age'],
            ]);
            
            if($id){
                echo 'data new added..';
                header('location: index.php');
            }else{
                echo 'Something Wrong';
            }
        }
    }

?>