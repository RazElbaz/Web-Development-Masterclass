<?php
if(isset($_POST["name"])){
    $var=$_POST["name"];
}
else{
    $var=array("Tony", "Steve", "Jaff", "Fraklin");
}

$var3=6;
$var2="<html>
<head></head>
<body><h1>Hello</h1>
<form action='http://localhost/lessons/index2.php' method='POST'>
<input type='text' name='name'></input><br  />
<input type='submit' value='Submit'>
</form>
</body>
</html>";

array_push($var, "Billy");
array_pop($var);
$var[2]="Arnold";

foreach($var as $index){
    echo $index;
    echo "<br>";
}
print_r($var);
echo $var2;




?>