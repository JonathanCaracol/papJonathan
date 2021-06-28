<?php
include_once ("includes/config.inc.php");
include_once ("includes/body.inc.php");
$con=mysqli_connect(HOST,USER,PASSWORD,DATABASE);
$avaliacao=intval($_POST['id']);
$nota=intval($_POST['nota']);

$sql= "Select * from avaliacao inner join servicos on avaliacaoServicoId = servicoId where avaliacaoId=".$avaliacao;
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
$sqlCliente="select * from utilizadores where utilizadorId=".$_SESSION['id'];
$resultCliente=mysqli_query($con,$sqlCliente);
$dadosCliente=mysqli_fetch_array($resultCliente);
$pontosCliente=(int)$dadosCliente['utilizadorPontos'];
$pontosCliente -= 1;


echo $update="update utilizadores set utilizadorPontos='".$pontosCliente."' where utilizadorId=".$_SESSION['id'];
mysqli_query($con,$update);
echo $dados['servicoUtilizadorId'];
if ($nota===1){
    $sqlPrestador="select * from utilizadores where ".$dados['servicoUtilizadorId'];
    $resultPrestador=mysqli_query($con,$sqlPrestador);
    $dadosPrestador=mysqli_fetch_array($resultPrestador);
    $pontosPrestador=(int)$dadosPrestador['utilizadorPontos'];
    echo $updatePrestador="update utilizadores set utilizadorPontos='".$pontosPrestador."' where utilizadorId=".$dados['servicoUtilizadorId'];
    mysqli_query($con,$updatePrestador);
}else if ($nota===2){
    $sqlPrestador="select * from utilizadores where ".$dados['servicoUtilizadorId'];
    $resultPrestador=mysqli_query($con,$sqlPrestador);
    $dadosPrestador=mysqli_fetch_array($resultPrestador);
    $pontosPrestador=(int)$dadosPrestador['utilizadorPontos'];
    $pontosPrestador += 1;
    echo $updatePrestador="update utilizadores set utilizadorPontos='".$pontosPrestador."' where utilizadorId=".$dados['servicoUtilizadorId'];
    mysqli_query($con,$updatePrestador);
}else if($nota===3){
    $sqlPrestador="select * from utilizadores where ".$dados['servicoUtilizadorId'];
    $resultPrestador=mysqli_query($con,$sqlPrestador);
    $dadosPrestador=mysqli_fetch_array($resultPrestador);
    $pontosPrestador=(int)$dadosPrestador['utilizadorPontos'];
    $pontosPrestador += 2;
    echo $updatePrestador="update utilizadores set utilizadorPontos='".$pontosPrestador."' where utilizadorId=".$dados['servicoUtilizadorId'];
    mysqli_query($con,$updatePrestador);
}
$delete ="delete from avaliacao where avaliacaoId=".$avaliacao;
mysqli_query($con,$delete);
header("location:perfil.php");
?>
