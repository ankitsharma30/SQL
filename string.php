<html>
    <head>
        <body>
<?php
foreach($marks as $a){
  
echo $a;
}
<table>
    <tr>
    <th> Name </th>
    <th> physics </th>
    <th> chemistry </th>
    </tr>
    <tr> 
    <td> $a['name']</td>
    <td> $a['physics']</td>
    <td> $a['chemistry']</td>
    </tr>

if (physics>30 && chemistry>30){
   echo"<table>
   <tr>
   <th> Name </th>
   <th> physics </th>
   <th> chemistry </th>
   </tr>
   <tr> 
   <td> $a['name']</td>
   <td> $a['physics+=1']</td>
   <td> $a['chemistry+=1']</td>
   </tr>"
}
else{
    echo "error";
}
</html>
</head>
</body>
 
?>
