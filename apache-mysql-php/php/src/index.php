<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $host = 'db_test';
       $user = 'MYSQL_USER';
       $password = 'MYSQL_PASSWORD';
       $conn = new mysqli($host, $user, $password);
       if($conn->connect_error){
            die("connection failed: ". $conn->connect_error);
       }else{
            echo "Connected to MySQL sever ";
       }
    ?>
</body>
</html>