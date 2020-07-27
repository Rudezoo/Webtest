<?php
    $conn=mysqli_connect("localhost","root","wndjs1212");
    mysqli_select_db($conn,'pinsert');

    $sql="Insert into topic(title,autor,description,created) values"."('".$_POST['title']."','".$_POST['autor']."','".$_POST['description']."',now())";

    $result=mysqli_query($conn,$sql);

    header('Location: http://localhost:81/index.php');
?>