function fillTableServicos(txt = '',id=0){
    $.ajax({
        url:"AJAX/AJAXFillServicos.php",
        type:"post",
        data:{
            id: id,
            txt:txt
        },
        success:function (result){
            $('#tableContent').html(result);
        }
    });
}
function fillTablePerfil(id=0){
    $.ajax({
        url:"AJAX/AJAXFillPerfil.php",
        type:"post",
        data:{
            id: id
        },
        success:function (result){
            $('#tableContent').html(result);
        }
    });
}
function fillTablePedidos(id=0){
    $.ajax({
        url:"AJAX/AJAXFillPedidos.php",
        type:"post",
        data:{
            id: id
        },
        success:function (result){
            $('#tableContent').html(result);
        }
    });
}
function fillTableServicosBackOffice(txt = '',id=0){
    $.ajax({
        url:"../AJAX/AJAXFillServicosBackOffice.php",
        type:"post",
        data:{
            id: id,
            txt:txt
        },
        success:function (result){
            $('#tableContent').html(result);
        }
    });
}
function fillTableUtilizadorBackOffice(txt = ''){
    $.ajax({
        url:"../AJAX/AJAXFillUtilizadorBackOffice.php",
        type:"post",
        data:{
            txt:txt
        },
        success:function (result){
            $('#tableContent').html(result);
        }
    });
}