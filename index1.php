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
$html.="</stores></p></body></html>";
echo $html;

?>