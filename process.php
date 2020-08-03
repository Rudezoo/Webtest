<?php
    require("config/config.php");
    require("lib/db.php");
    $conn=db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"]);

    $title=mysqli_real_escape_string($conn,$_POST['title']);
    $autor=mysqli_real_escape_string($conn,$_POST['autor']);
    $desc=mysqli_real_escape_string($conn,$_POST['description']);
    $sql="Insert into topic(`title`,`autor`,`description`,`created`) values"."('{$title}','{$autor}','{$desc}',now())";

    $result=mysqli_query($conn,$sql);

    header('Location: http://localhost:81/index.php');
?>