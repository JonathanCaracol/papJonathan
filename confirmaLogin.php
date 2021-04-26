<?php
include_once ("includes/config.inc.php");
$con=mysqli_connect(HOST,USER,PASSWORD,DATABASE);
$sql="select * from users inner join utilizadores on userId = utilizadorUserId";
$result=mysqli_query($con,$sql);

$nome=addslashes($_POST['nome']);
$password=addslashes($_POST['password']);

if ($nome === 'admin' AND $password ==='admin'){
    header("location:admin/offersAdmin.php");
}else{
    while ($dados=mysqli_fetch_array($result)){
        if ($nome === $dados['userName'] AND $password === $dados['userPassword'] AND $dados['utilizadorEstado'] == 'ativo') {
            session_start();
            $_SESSION['id'] = $dados['userId'];
            $_SESSION['nome'] = $dados['userName'];
            header("location:index.php");
        }else if($nome === $dados['userName'] AND $password === $dados['userPassword'] AND $dados['utilizadorEstado'] == 'inativo'){{
            $verificacao='sim';
            header("location:login.php?message");
        }
        }
        else if(!isset($_SESSION['id']) AND !isset($verificacao)){{
            header("location:login.php?msg");
        }
        }
}}
?>

<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/smoothscroll.js"></script>
<script src="../js/custom.js"></script>
