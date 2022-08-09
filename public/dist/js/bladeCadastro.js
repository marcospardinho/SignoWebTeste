
function trocainput() {

    var id = $('input[name="flexRadio"]:checked').val();

    document.getElementById("cnrpj").style.display = "none";
    document.getElementById("crpf").style.display = "none";

    if (id == 2) {

        document.getElementById("cnrpj").style.display = "block";
    }

    if (id == 1) {

        document.getElementById("crpf").style.display = "block";
    }
};

jQuery(function($) {
    $("#cpf").mask("000.000.000-00");
});

jQuery(function($) {
    $("#cnpj").mask("00.000.000/0000-00");
});

