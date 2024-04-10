<?php

	$conn = mysqli_connect("mysql.75ace4c223da.hosting.myjino.ru", "j44619831_course", "grji0h2e89", "j44619831_course");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
	
	
 if(isset($_POST['btn-update']))
 {
     // variables for input data
	 $id = $_POST['ID'];
     $FIO=$_POST['FIO'];
     $Number=$_POST['Number'];
	 $Password=$_POST['Password'];
	 $Email=$_POST['Email'];
	 $Path=$_POST['Path'];

     //sql query to update into database
    $sql_query="UPDATE users SET FIO='$FIO',Number='$Number',Password='$Password',Email='$Email',Path='$Path' WHERE ID='$id' ";
    mysqli_query($conn, $sql_query);
    //if(!$sql_query)
        //die('data can not update'.mysql_error());
    //else
        //echo 'data updated successfully';

	mysqli_close($conn);
 }
 ?>

<html>
<head>
  <title>Панель редактирования</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <link href="registration.css" rel="stylesheet" type="text/css" />
  <link href="general-style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<center>

<form method="post">
<table align="center">
<tr>
<td><input type="text" name="ID" placeholder="ID Студента" required />  </td>
</tr>
<tr>
<td><input type="text" name="FIO" placeholder="ФИО" required />  </td>
</tr>
<tr>
<td><input type="text" name="Number" placeholder="Номер телефона" required /> </td>
</tr>
<tr>
<td><input type="text" name="Password" placeholder="Пароль(Если необходимо)"  required/> </td>
</tr>
<tr>
<td><input type="text" name="Email" placeholder="Эл.Почта" required /> </td>
</tr>
<tr>
<td><input type="text" name="Path" placeholder="Направление" required /> </td>
</tr>
<tr>
<td>
<button type="submit" name="btn-update"><strong>Обновить</strong></button>
</td>
</tr>
</table>
</form>
</center>
</body>
</html>