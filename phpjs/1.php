Helloworld
<br>
<?php
    echo "hello";
 ?>
<br>
 <textarea id="input" onkeyup="input(), output()"></textarea>
 <textarea id="output" ></textarea>
 <button id="click">버튼</button>
<br>

<br>

 <script>
     var temp;


     function input(){
        temp=document.getElementById("input").value;

     }
     
     window.onload=function(){
         document.getElementById("click").onclick=function(){
            document.getElementById("output").value=test(2);
         }
     }
     function test(temp){
        return temp+2;
     }
     function output(){
        if(temp=="check"){
            document.getElementById("output").style.color="red";
            document.getElementById("output").value="check";
        }
     }
 </script>

<br>
<form method="post">
    <button type="submit" name="test" id="test" value="Run"></button>

</form>
<?php
    function testfun(){
        echo "button cliked<br>";
        echo "check : ".$_POST['test'];
    }
    
    if(array_key_exists('test',$_POST)){
        testfun();
    }
    
?>