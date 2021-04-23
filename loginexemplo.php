<?php
session_start();
$_SESSION['id']=1;
$_SESSION['nome']='Jonathan';
?>

<button onclick="location:index.php?id=<?php echo $_SESSION['id']?>"></button>
