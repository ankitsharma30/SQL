<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    </style>
</head>
<body>
<h1><center> Checkbox Check </center> </h1>
    <script>
function toggle(source) {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
            checkboxes[i].checked = source.checked;
    }
}
</script>



   
    
        <div style="display: flex;">
        <input type="checkbox" onclick="toggle(this);" />Heading<br />

        </div>
        
        <p> <b>     Question 1 </p>
    
        <div style="display: flex;">
        <input type="checkbox" name="question 1" value="a">
        </div>
        a <input type="checkbox" name="question 1" value="a"><br><br>
        b <input type="checkbox" name="question 1" value="b"><br><br>
        c <input type="checkbox" name="question 1" value="c"><br><br>

        <p> <b>     Question 2 </p>
        <div style="display: flex;">
        <input type="checkbox" name="question 1" value="a">
        </div>
        a <input type="checkbox" name="question 2" value="a"><br><br>
        b <input type="checkbox" name="question 2" value="b"><br><br>
        c <input type="checkbox" name="question 2" value="c"><br><br>
    


</body>
</html>