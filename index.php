<!DOCTYPE html>
<html>
<head>
    <title>Pinsert</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:81/style.css">
</head>

<body id="back" class="white">
    <div style="text-align: center">
    <header>
        <a class ="indexing" href="http://127.0.0.1:81/index.php"><img src="pinsert.png" width="300"></a>
    </header>
    </div>

    <nav>
        <ol id='menubar' class="menus">
            <?php
            echo file_get_contents('list.txt');
            ?>
        </ol>
    </nav>

<article>
<?php
if(!empty($_GET['id'])){
    echo file_get_contents($_GET['id'].'.txt');
}else{
    echo file_get_contents('0.txt');
}

?>
</article>

<script src="http://127.0.0.1:81/script.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
</body>

</html>