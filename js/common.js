function fillTableServicos(txt = ''){
    $.ajax({
        url:"AJAX/AJAXFillServicos.php",
        type:"post",
        data:{
            txt:txt
        },
        success:function (result){
            $('#tableContent').html(result);
        }
    });
}
function fillTableServicosBackOffice(txt = ''){
    $.ajax({
        url:"../AJAX/AJAXFillServicosBackOffice.php",
        type:"post",
        data:{
            txt:txt
        },
        success:function (result){
            $('#tableContent').html(result);
        }
    });
}