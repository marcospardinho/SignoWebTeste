function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            var fileurl = e.target.result;
            $('.profile-pic').attr('src', fileurl);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$(".file-upload").on('change', function() {
    readURL(this);
});
$(".upload-button").on('click', function() {
    $(".file-upload").click();
});

$("body").on("submit", "form", function() {
    $(this).submit(function() {
        return false;
    });
    return true;
});

$('#telefone1').mask('(00) 0000-00009');
$('#telefone1').blur(function(event) {
if ($(this).val().length == 15) { // Celular com 9 dígitos + 2 dígitos DDD e 4 da máscara
    $('#telefone1').mask('(00) 00000-0009');
} else {
    $('#telefone1').mask('(00) 0000-00009');
}
});

$('#telefone2').mask('(00) 0000-00009');
$('#telefone2').blur(function(event) {
if ($(this).val().length == 15) { // Celular com 9 dígitos + 2 dígitos DDD e 4 da máscara
    $('#telefone2').mask('(00) 00000-0009');
} else {
    $('#telefone2').mask('(00) 0000-00009');
}
});


$('#cep').on('blur', function() {

if ($.trim($("#cep").val()) != "") {
    var cep = $("#cep").val().replace("-", "").replace(".", "");
    $("#mensagem").html('(Aguarde, consultando CEP ...)');
    var url = 'https://viacep.com.br/ws/'+cep+'/json/';
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
    if (this.readyState == 4) {
        if (this.status == 200) {
            var result = JSON.parse(this.responseText);

            if(result.erro != true){
                console.log(result);
                $("#endereco").val(unescape(result.logradouro));
                $("#bairro").val(unescape(result.bairro));
                $("#cidade").val(unescape(result.localidade));
                $("#uf").val(unescape(result.uf));
                $("#numero").focus();
                $("#mensagem").html('');
            }else{
                $("#mensagem").html('(CEP inválido!)');
            }
        }
    }
    };
    xhttp.open('GET', url, true);
    xhttp.send();
}
});
$("#preco").maskMoney();

$("#cep").inputmask({
mask: ["99999-999", ],
keepStatic: true
});

$(document).ready(function(){
    document.querySelector("[name='acesso']").value = Math.floor(1000000000000* Math.random());
});