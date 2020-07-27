<?php
    require("config/config.php");
    require("lib/db.php");
    $conn=db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"]);
    $result=mysqli_query($conn,"select * from topic");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pinsert</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap-4.5.0-dist\css\bootstrap.css">

    <link rel="stylesheet" type="text/css" href="http://localhost:81/style.css?after">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>

<body id="back" class="white">


    <div style="text-align: center">
    <header>
        <a class ="indexing" href="http://localhost:81/index.php"><img src="pinsert.png" width="300"></a>
    </header>
    </div>

    <nav>
        <ol id='menubar' class="menus">
            <center>
            <?php
              while($row=mysqli_fetch_assoc($result)){
                echo '<li><a class="indexing" href="http://localhost:81/index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</li></a>'."\n";
            }
            ?>
            </center>
        </ol>
    </nav>

<article>
<form action="process.php" method="POST">
    <p>TITLE : <input type="text" name="title"></p>
    <p>AUTHOR : <input type="text" name="autor"></p>
    <p>Description : <textarea name="description"></textarea></p>
    <input type="submit" value="Submit">
</form>
</article>
<script src="bootstrap-4.5.0-dist\js\bootstrap.js"></script>

<script src="http://localhost:81/script2.js?after"></script>
<div id="script1">
<script src="http://localhost:81/script.js?after"></script>
</div>

</body>

</html>