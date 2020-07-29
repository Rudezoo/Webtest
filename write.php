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

    <link rel="stylesheet" type="text/css" href="http://localhost:81/style.css">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>

<body id="back" class="white">

    <div class="container-fluid" style="z-index: 1;">
        <div class="text-center">
        <header>
            <a class ="indexing" href="http://localhost:81/index.php"><img src="pinsert.png" width="300"></a>
        </header>
        </div>

        <nav>
            <ol id='menubar' class="menus text-center">
                <?php
                $check=0;
                while($row=mysqli_fetch_assoc($result)){
                    echo '<li><a class="indexing" href="http://localhost:81/index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a>';
                    if($check==0){          
                        require("index_sibiling.html");
                        $check=$check+1;
                    }
                    echo '</li>';
               
                }
                ?>
            </ol>
        </nav>

    <article>
       
    <div class="jumbotron">
        
    <form action="process.php" method="POST">
        <div class="form-group">
                <label for="mytitle">TITLE</label>
                <input id="mtitle" class="form-control" type="text" name="title" placeholder="Write Title">
                <label for="myauthor">Author</label>
                <input id="myauthor" class="form-control" type="text" name="autor" placeholder="Write Author">
                <label for="mydesc">Author</label>
                <textarea id="mydesc" rows="10" class="form-control" type="text" name="description" placeholder="Write Description"></textarea>
            </div>
    <input type="submit" value="Submit" class="btn btn-success btn-lg">
</form>
    </div>
    </article>
    <hr>
    <a href="http://localhost:81/write.php" class="btn btn-success btn-lg">Write</a>
   
    <script src="bootstrap-4.5.0-dist\js\bootstrap.js"></script>

    <script src="http://localhost:81/script2.js?after"></script>
    </div>
</body>

</html>