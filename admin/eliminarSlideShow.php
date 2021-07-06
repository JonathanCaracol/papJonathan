<?php
include_once("../includes/body.inc.php");
$id=intval($_GET['id']);

$sql = "delete from slideshow where idslideShow=".$id;
mysqli_query($con,$sql);
header("location:slideBackOffice.php");
?>