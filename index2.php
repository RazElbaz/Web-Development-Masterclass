<?php
if(isset($_POST["lessons"])){
    $var=$_POST["lessons"];
}
else{
    $var=array("Tony", "Steve", "Jaff", "Fraklin");
}

$var3=6;

$var2="<html>
<head></head>
<body>
<h1>Hello</h1>
<form action='http://localhost/lessons/index2.php' method='POST'>
<input type='text' name='name'>Your Name</input><br  />
<b>What lessons do you want to learn?</b><br>
 <select name='lessons[]' size='4' multiple>
    <option value='mysql'>My SQL</option>
    <option value='web_dev'>Web Dev</option>
    <option value='orcale'>Orcale</option>
    <option value='javascript'>JavaScript</option>
</select>
<input type='submit' value='Submit'>
</form>
<script>
    var a=5;
    var b=3;
    var c=a+b;
    c=c+c;
    alert(c);
</script>
</body>
</html>";

// array_push($var, "Billy");
// array_pop($var);
// $var[2]="Arnold";

foreach($var as $index){
    echo $index." ";
    echo "<br>";
}
// print_r($var);
echo $var2;




?>