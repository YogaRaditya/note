<?php
require_once("database.php");
$id=$_POST['id'];
$xnote = $_POST['notes'];

$sql2=update("notes", $note,$id);
if ($sql2) {
    header("location:list_notes.php");
}
?>