var a=5;
var b=3;
var c=a+b;
c=c+c;
function getval(id, text){
    document.getElementById(id).innerHTML=text;
}
function yesnoCheck(){
    if(document.getElementById('yesCheck').checked){
        document.getElementById('ifYes').style.display = 'none';
    } else{
        document.getElementById('ifYes').style.display = 'block';
    }
    
}