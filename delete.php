<?php
require_once(database.php);
  $id = $_GET['kode'];
  $sql = delete("notes",$id);
  if ($sql) {
    header("location:list_notes.php");
  }
?>