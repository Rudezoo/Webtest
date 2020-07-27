<?php

$conn=mysqli_connect("127.0.0.1:3306","root","wndjs1212");
mysqli_select_db($conn,'pinsert');
$id=mysqli_real_escape_string($conn,$_GET['id']);
$passwd=mysqli_real_escape_string($conn,$_GET['password']);
$sql="select * from user where userid='".$id."' and password='".$passwd."'";
$result=mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if($result->num_rows=='0'){
            echo "Denied";
        }else{
            echo "Accept";
        }
    ?>
</body>
</html>