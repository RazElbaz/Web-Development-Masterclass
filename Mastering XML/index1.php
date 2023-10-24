<?php

$bookstore=array('Bens Books', 'Carmans Chronicles');
$books=array(
    array('Book1 subject', 'Book1 title', 'Book1 author'),
    array('Book2 subject', 'Book2 title', 'Book2 author'),
    array('Book3 subject', 'Book3 title', 'Book3 author')
    );

$tab="&nbsp;&nbsp;&nbsp;&nbsp;";
$html="<html><head></head></html><body><p id='xml'><stores>";

foreach($bookstore as $val){
    $html.="<bookstore>"."<name>".$val."</name>";
    foreach($books as $info){
        $html.=""."<subject>$info[0]</subject>"."<title>".$info[1]."</title>"."<author>$info[2]</author>";
    }
    $html.="</bookstore>";
}
$html.="</stores></p><script>
var htmlval=document.getElementById('xml').innerHTML;
parser = new DOMParser();
    xmlDoc= parser.parseFromString(htmlval, \"text/xml\");
    var output= xmlDoc.getElementsByTagName (\"subject\")[0].childNodes[0].nodeValue;
    var output1= xmlDoc.getElementsByTagName (\"title\")[0].childNodes[0].nodeValue;
    var output2= xmlDoc.getElementsByTagName (\"author\")[0].childNodes[0].nodeValue;
    alert(output);
    alert(output1);
    alert(output2);
</script></body></html>";
echo $html;

?>
