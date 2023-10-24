<?php

$bookstore=array('Bens Books', 'Carmans Chronicles');
$books=array(
    array('Book1 subject', 'Book1 title', 'Book1 author'),
    array('Book2 subject', 'Book2 title', 'Book2 author'),
    array('Book3 subject', 'Book3 title', 'Book3 author')
    );

$tab="&nbsp;&nbsp;&nbsp;&nbsp;";
$html="<html><head></head></html>";

foreach($bookstore as $val){
    $html.=htmlspecialchars("<bookstore>")."<br>$tab".htmlspecialchars("<name>".$val."</name>")."<br>";
    foreach($books as $info){
        $html.="$tab$tab".htmlspecialchars("<subject>$info[0]</subject>")."<br>$tab$tab$tab".htmlspecialchars("<title>".$info[1]."</title>")."<br>$tab$tab$tab$tab".htmlspecialchars("<author>$info[2]</author>")."<br>";
    }
    $html.=htmlspecialchars("</bookstore>")."<br>";
}
echo $html;

?>