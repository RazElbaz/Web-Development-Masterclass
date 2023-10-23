<?php
if(isset($_POST["lessons"])){
    $var=$_POST["lessons"];
}
else{
    $var=array("Tony", "Steve", "Jaff", "Fraklin");
}

$var3=6;

$var2="<html>
<head><script type=text/javascript src='myscript.js'></script></head>
<body>
<h1 id=val2>Hello!</h1>
<form action='http://localhost/lessons/index2.php' method='POST' id='form1'>
<input type='text' name='name'>Your Name</input><br  />
<p id='value1'><b>What lessons do you want to learn?</b></p><br>
 <select name='lessons[]' size='4' multiple>
    <option value='mysql'>My SQL</option>
    <option value='web_dev'>Web Dev</option>
    <option value='orcale'>Orcale</option>
    <option value='javascript'>JavaScript</option>
</select>
<p>Are you learning from our videos?</p>
Yes
<input type=\"radio\" onclick=\"javascript:yesnoCheck();\" id=\"yesCheck\">No
<input type=\"radio\" onclick=\"javascript:yesnoCheck();\" id=\"noCheck\">
<br>
<div id=\"ifYes\" style=\"display:none\">If no, please explain:
    <input type='text' id='yes' name='yes'/>
</div>

<input type='submit' value='Submit'>
<br><br>
<button onclick=\"document.getElementById('value1').innerHTML=Date(); return false;\">Update</button>
</form>
<script>
    function validateForm(){
        var name= form[\"name\"].value;
        if( name === \"\"){
            alert(\"Name cannot be left blank.\");
            return false;
        }
    }
    var form= document.getElementById(\"form1\");
    form.onsubmit = validateForm;
   
    
</script>
</body>
</html>";

// array_push($var, "Billy");
// array_pop($var);
// $var[2]="Arnold";

// foreach($var as $index){
//     echo $index." ";
//     echo "<br>";
// }

// print_r($var);
echo $var2;




?>