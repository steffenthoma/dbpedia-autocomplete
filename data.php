<?php
    
$mysql_server = 'localhost';
$mysql_login = 'root';
$mysql_password = '';
$mysql_database = 'entitySearch';

mysql_connect($mysql_server, $mysql_login, $mysql_password);
mysql_select_db($mysql_database);
    
$req = "SELECT DISTINCT URI, label, score "
	."FROM entityScoreShort "
    ."WHERE label LIKE '".$_REQUEST['term']."%' "
    ."ORDER BY score DESC "
	."LIMIT 10";
        
$query = mysql_query($req) or die($req."<br/><br/>".mysql_error());

while($row = mysql_fetch_array($query))
{
    $results[] = array('label' => $row['label']." ".$row['URI']);
}

echo json_encode($results);
    
?>