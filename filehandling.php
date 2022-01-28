<?php
$myfile = fopen("web.txt", "w") or die("Unable to open file!");
    if (!isset($myfile)){
        throw new exception("unable to read file");
    }
    try{
$txt = "Mickey Mouse\n";
fwrite($myfile, $txt);

fclose($myfile);
    }
    catch (exception $e){
        echo("unable to open");
    }
?>

<?php
function divide($divident,$divisor){
    if ($divisor==0){
        throw new Exception("division by zero");
    }
    return $divident/$divisor;
}
try {
   echo divide(5,1);
}
catch(exception $e){
   
       echo("unable to divide");
   
}
?>