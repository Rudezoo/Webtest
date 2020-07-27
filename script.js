var temp;

/*document.write("<input type='button' value='white' id='white_btn'/><input type='button' value='Black' id='black_btn'/>");*/




var wbtn=document.getElementById("white_btn");
wbtn.addEventListener('click',function(){
    white();
});

var bbtn=document.getElementById("black_btn");
bbtn.addEventListener('click',function(){
    black();
});

  


function white(){
    document.getElementById('back').className='white';
    temp=document.getElementsByClassName("indexing2");

    while(temp.length){
        temp[0].className="indexing";
    }
         
}
function black(){
    document.getElementById('back').className='black';
    temp=document.getElementsByClassName("indexing");
    while(temp.length){
        temp[0].className="indexing2";
    }
}




