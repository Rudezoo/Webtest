<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

        $list=array(1,2,3,4);
        for($i=0;$i<4;$i++){
            echo $list[$i]."<br>";
        }

        echo count($list);
     
    ?>
</body>
</html>