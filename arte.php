<head>

    <title>PAP</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="js/custom.js"></script>

</head>


<section>
    <div class="container">
        <div class="text-center">
            <h1 style="color: #29ca8e"><b>Arte</b></h1>

            <br>

            <p class="lead">Lista dos serviços relacionados a arte.</p>
        </div>
    </div>
</section><hr>
<!--
<script>
    function confirmaElimina(id) {
        $.ajax({
            url:"AJAX/AJAXGetNameEmpresa.php",
            type:"post",
            data:{
                idEmpresa:id
            },
            success:function (result){
                if(confirm('Confirma que deseja eliminar a empresa:'+result+"?"))
                    window.location="eliminaEmpresa.php?id=" + id;
            }
        })
    };




    $('document').ready(function (){
        $('#search').keyup(function (){
            fillTableEmpresas(this.value);
        });
        fillTableEmpresas();
    })
</script>
-->


<div style="margin-left: 5%; margin-right: 5%; margin-bottom: 5%">
    <form class="d-flex">
        <input style="width: 50%; margin-right: 5px" class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
        <button class="btn btn-primary" type="submit">Pesquisar</button>
        <button class="btn" style="background-color: mediumseagreen; margin-left: auto" type="submit"><a href="adicionaServicos.php" style="color: white">Adicionar serviço</a></button>
    </form>

<div style="margin-top: 20px">


    <div class="position-relative">

        <div style="background-color: #29ca8e" class="d-table table-fixed col-12 width-full py-4 border-bottom color-border-secondary">

            <h5><div class="d-table-cell col-9 v-align-top pr-3">
                    <span class="link-gray"><b>Pinturas</b></span>
                <div class="text-gray text-small mb-2">
                    <div>Posso fazer pinturas para vocês e pintar o que quiser.</div>
                    <span><b>email@gmail.com</b></span>
                </div>
                    <span>Este serviço tem <b>x</b> horas disponíveis</span>

            </div><h5>

            <div class="d-table-cell col-2 v-align-top text-right">

                <!-- Abrir botão -->

            </div>
        </div>

        <div class="d-table table-fixed col-12 width-full py-4 border-bottom color-border-secondary">

            <h5><div class="d-table-cell col-9 v-align-top pr-3">
                    <span class="f4 link-gray-dark"></span>
                    <span class="link-gray"><b>Musica</b></span>

                <div class="text-gray text-small mb-2">
                    <div>Posso escrever uma musica para si.</div>
                    <span><b>email@gmail.com</b></span>
                </div>
                    <span>Este serviço tem <b>x</b> horas disponíveis</span>
            </div><h5>

        </div>

        <div style="background-color: #29ca8e" class="d-table table-fixed col-12 width-full py-4 border-bottom color-border-secondary">

            <h5><div class="d-table-cell col-9 v-align-top pr-3">
                    <span class="f4 link-gray-dark"></span>
                    <span class="link-gray"><b>Musica</b></span>

                <div class="text-gray text-small mb-2">
                    <div>Posso escrever uma musica para si.</div>
                    <span><b>email@gmail.com</b></span>
                </div>
                    <span>Este serviço tem <b>x</b> horas disponíveis</span>
            </div></h5>

        </div>


    </div>
</div>

</div>

