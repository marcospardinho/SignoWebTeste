$(document).ready(function() {
    var html = "<div class='form-group row'>";
    html += "<div class='col-sm-10'>";
    html +=
        "<input type='text' class='form-control' name='resposta[]' required='true' placeholder='Escreva qual vai ser a resposta da enquete Ps: Máximo de 50 caracteres' maxlength='50'>";
    html += "</div>";

    $('#quantidade-respostas').on('change', function() {
        $('#conteudo-respostas').html('');

        if ($(this).val().length !== 0) {
            for (var i = 1; i <= $(this).val(); i++) {
                $('#conteudo-respostas').append(html);
            }
        }
    });
});

$(function() {

//Date and time picker
$('#reservationdatetime').datetimepicker({
    format: 'DD/MM/YYYY HH:mm:ss',
    minDate: new Date(),
    changeMonth: true,
    changeYear: true,
    locale: 'pt-br',
    icons: {
        time: 'far fa-clock'
    },


});

$('#reservationdatetime2').datetimepicker({
    format: 'DD/MM/YYYY HH:mm:ss',
    minDate: new Date(),
    changeMonth: true,
    changeYear: true,
    locale: 'pt-br',
    icons: {
        time: 'far fa-clock'
    },

});

});