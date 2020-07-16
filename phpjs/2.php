<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    hello every body
    <br>

    <ul>
    <script>
        var list=new Array(2);
        for(var i=0;i<list.length;i++){
            list[i]=new Array(3);           
        }

        list[0][0]="A";
        list[0][1]="B";
        list[0][2]="C";
        
        list[1][0]="D";
        list[1][1]="E";
        list[1][2]="F";
        
        for(var i=0;i<list.length;i++){
            document.write(i+1 +"반");
            for(var j=0;j<list[i].length;j++){
                document.write("<li>"+list[i][j]+"</li>");
            }
            document.write("<br><br>");
        }

    </script>
    </ul>
    
    <ul>
    <?php

        $list=array(array(), array());

        $list[0][0]="A";
        $list[0][1]="B";
        $list[0][2]="C";
        
        $list[1][0]="D";
        $list[1][1]="E";
        $list[1][2]="F";

        $size_of_list=count($list);

        for($i=0;$i<$size_of_list;$i++){
            $size_of_list_list=count($list[$i]);
            echo ($i+1)."반";
            for($j=0;$j<$size_of_list_list;$j++){
                echo "<li>".$list[$i][$j]."</li>";
            }            
            echo "<br><br>";
        }
    ?>
    </ul>
</body>
</html>