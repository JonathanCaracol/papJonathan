<?php
include_once ("includes/config.inc.php");
$con=mysqli_connect(HOST,USER,PASSWORD,DATABASE);
$sql="select * from users";
$result=mysqli_query($con,$sql);

$nome=addslashes($_POST['nome']);
$password=addslashes($_POST['password']);

if ($nome === 'admin' AND $password ==='admin'){
    header("location:admin/offersAdmin.php");
}else{
    while ($dados=mysqli_fetch_array($result)){
        if ($nome === $dados['userName'] AND $password === $dados['userPassword']){
            session_start();
            $_SESSION['id']=$dados['userId'];
            $_SESSION['nome']=$dados['userName'];
            header("location:index.php");
        }else{
        }
    }
    header("location:index.php");
}
?>

<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/smoothscroll.js"></script>
<script src="../js/custom.js"></script>
