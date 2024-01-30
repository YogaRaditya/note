<?php
require_once("database.php");

$notes = $_POST["notes"];
$simpan=inputdata("INSERT INTO notes VALUES (null,now(),   
'$notes')"); 
if($simpan) {
    header("locatiin:list_notes.php");
}
?>