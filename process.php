<?php
    require("config/config.php");
    require("lib/db.php");
    $conn=db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"]);

    $sql="Insert into topic(title,autor,description,created) values"."('".$_POST['title']."','".$_POST['autor']."','".$_POST['description']."',now())";

    $result=mysqli_query($conn,$sql);

    header('Location: http://localhost:81/index.php');
?>