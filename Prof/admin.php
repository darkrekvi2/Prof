<?php
$servername = "mysql.75ace4c223da.hosting.myjino.ru";
$username = "j44619831_course";
$password = "grji0h2e89";
$dbname = "j44619831_course";

$conn = new mysqli($servername, $username, $password, $dbname);

$users = mysqli_query($conn,"SELECT * FROM Users");


if ($users->num_rows > 0) {
  // output data of each row
  echo "<div class='srow'> <p>ID</p> <p>ФИО</p> <p>Номер</p> <p>Пароль</p> <p>Почта</p> <p>Направление</p> </div>";
  while($row = $users->fetch_assoc()) {
    echo "<div class='srow'> <p>" . $row["ID"]. "</p> <p>" . $row["FIO"]. "</p> <p>" . $row["number"]. "</p> <p>" . $row["password"]. "</p> <p>" . $row["email"]. "</p> <p>" . $row["path"]. "</p> </div>";
  }
} else {
  echo "0 results";
}



$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name='viewport' content="width=device-width">
  <title>Админ панель</title>
   <link href="admin.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div>
	
	
	
	<?php
$servername = "mysql.75ace4c223da.hosting.myjino.ru";
$username = "j44619831_course";
$password = "grji0h2e89";
$dbname = "j44619831_course";

$link = mysqli_connect($servername, $username, $password, $dbname) or die( mysqli_error() );
mysqli_select_db( $link, $dbname ) or die( mysqli_error() );

// delete record
if( isset( $_POST['delete'] ) ) {

    echo $did = $_POST['ID'];
    $query = $link->prepare( "DELETE FROM users WHERE ID=?" );
    $query->bind_param( "s", $did );
    $query->execute();
}

// get all records
$query = "SELECT * FROM users" or die( mysqli_error() );
$res = mysqli_query( $link, $query );

?>

<table border="1">

    <tr>
        <th>ID</th>
        <th>FIO</th>
        <th>Number</th>
        <th>EMAIL</th>
        <th>PASSWORD</th>
		<th>PATH</th>
		<th>DELETE</th>
    </tr>

    <?php

        if( $res->num_rows > 0 ) {

            while( $row = $res->fetch_assoc() ) {

                echo "<tr>";
                echo "<td>" . $row["ID"] . "</td>";
                echo "<td>" . $row["FIO"] . "</td>";
                echo "<td>" . $row["number"] . "</td>";
				echo "<td>" . $row["email"] . "</td>";
				echo "<td>" . $row["password"] . "</td>";
				echo "<td>" . $row["path"] . "</td>";
                echo "<td><form method='POST'>
                <input type=hidden name=ID value=".$row["ID"]." >
                <input type=submit value=Удалить name=delete >
                </form>
                </td>";
                echo "</tr>";
            }

        } else {  
            die("0 results");
        }  
    ?>

</table>




</div>
</body>

</html>