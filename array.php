<?php
class student{
    public $name;
    public $roll;
    public $email;
    function __construct($name,$roll,$email){
        $this->name=$name;
        $this->roll=$roll;
        $this->email=$email;
    }
    function intro(){
        echo("hello my details are name is {$this->name} roll number : {$this->roll} email is: {$this->email}");
    }

    }
    class school extends student{
        function school_details(){
            echo("my school name is xyz");
        }
    }
    class college extends school{
        function college_details(){
            echo("my college name is xyz");
        }
    }
    $ankit=new school('ankit sharma','18scse1010055','ankitvashisht00@gmail.com');
    $ankit->school_details();
    $ankit->intro();
    $college->intro();
    $college->college_details();
?>