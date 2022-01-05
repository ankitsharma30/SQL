<!DOCTYPE html>
<html>
<style>
table, tr, th, td {
  border:1px solid black;
}
</style>
<body>
    

<h2>A basic HTML table</h2>

<table style="width:100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>Contact</th>
            <th>email</th>
            <th>password</th>
            <th>gender</th>
            <th>country</th>
        </tr>
    </thead>
    <tbody>    
    <tr>
        <td><?php echo $_POST["name"] ?></td>
        <td><?php echo $_POST["contact"] ?></td>
        <td><?php echo $_POST["email"] ?></td>
        <td><?php echo $_POST["password"] ?></td>
        <td><?php echo $_POST["gender"] ?></td>
        <td><?php echo $_POST["country"]?></td>
    </tr>
    </tbody>
</table>

</body>
</html>

