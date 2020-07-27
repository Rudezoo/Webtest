<?php
    require("lib/db.php");

    $sql="Insert into topic(title,autor,description,created) values"."('".$_POST['title']."','".$_POST['autor']."','".$_POST['description']."',now())";

    $result=mysqli_query($conn,$sql);

    header('Location: http://localhost:81/index.php');
?>