<?php
class fruit{
    public $name;
    public $color;
    function __construct($name,$color){
        $this->name=$name;
        $this->color=$color;
    }
    function get_name(){
        return $this->name;
    }
    function get_color(){
        return $this->color;
    }
  
}
$apple=new fruit('apple','red');
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();

?>