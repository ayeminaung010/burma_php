<?php

    namespace App\Utli;

    use Illuminate\Database\Eloquent\Model;

    class Student extends Model
    {

        protected $table = "students";
        public $timestamps = false;

        protected $fillable = ['name','email','dob','gender','age'];

    }
?>