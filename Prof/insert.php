<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
		
        $conn = mysqli_connect("mysql.75ace4c223da.hosting.myjino.ru", "j44619831_course", "grji0h2e89", "j44619831_course");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $fio =  $_REQUEST['fio'];
        $path = $_REQUEST['path'];
        $number =  $_REQUEST['number'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['psw'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO users  VALUES (`id`,'$fio', 
            '$number','$password','$email','$path')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>"; 
 
            echo nl2br("\n$first_name\n $last_name\n "
                . "$gender\n $address\n $email");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>