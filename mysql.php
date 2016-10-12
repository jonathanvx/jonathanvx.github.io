<?php

include("db.inc");
db_connect();
$result = executeSql('SELECT * WHERE 1=1');
if (!$result) {
    die('Invalid query: ' . mysql_error());
}

?>
