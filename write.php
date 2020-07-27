<?php
    $conn=mysqli_connect("127.0.0.1:3306","root","wndjs1212");
    mysqli_select_db($conn,'pinsert');
    $result=mysqli_query($conn,"select * from topic");


?>
<!DOCTYPE html>
<html>
<head>
    <title>Pinsert</title>
    <meta charset="utf-8">
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
            <?php
              while($row=mysqli_fetch_assoc($result)){
                echo '<li><a href="http://localhost:81/index.php?id='.$row['id'].'">'.$row['title'].'</li></a>'."\n";
            }
            ?>
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

<script src="http://localhost:81/script2.js?after"></script>

<div id="script1">
<script src="http://localhost:81/script.js/after"></script>
</div>

</body>

</html>