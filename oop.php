<?php
class student{
    public $name;
    public $roll;
    public $email;
    function set_name($name){
        $this->name=$name;
    }
    function get_name(){
        return $this->name;
    }
    function set_roll($roll){
        $this->roll=$roll;
    }
    function get_roll(){
        return $this->roll;
    }
    function set_email($email){
        $this->email=$email;
    }
    function get_email(){
        return $this->email;
    }
}
$ankit= new student();
$ankit->set_name('ankit sharma ');
echo $ankit->get_name();
echo"<br>";
$number=new student();
$number->set_roll("18SCSE1010055");
echo $number->get_roll();
echo("<br>");
$mail=new student();
$mail->set_email('ankitvashisht00@gmail.com');
echo $mail->get_email();
?>