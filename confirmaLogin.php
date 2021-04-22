<?php
include_once ("includes/config.inc.php");
$con=mysqli_connect(HOST,USER,PASSWORD,DATABASE);

$nome=addslashes($_POST['nome']);
$password=addslashes($_POST['password']);

if ($nome === 'admin' AND $password ==='admin'){
    header("location:admin/offersAdmin.php");
}else{
    header("location:index.php");
}
?>

<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/smoothscroll.js"></script>
<script src="../js/custom.js"></script>
