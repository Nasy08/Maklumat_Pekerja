<?php
include_once "connection.php";

$id = $_GET['padam_id'];
$result = mysqli_query($mysqli,"DELETE FROM info_pekerja WHERE id = '$id'");
 echo "<script>window.location='index.php'</script>";

 ?>