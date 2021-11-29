$('.rosa').click(function() {
    $('#rosa').toggle('slow');
    $('#pagRosa').toggle('slow');
    $('#amarelo').hide('slow');
    $('#pagAmarelo').hide('slow');
    $('#azul').hide('slow');
    $('#pagAzul').hide('slow');
    $('#vermelho').hide('slow');
    $('#pagVermelho').hide('slow');
});

$('.amarelo').click(function() {
    $('#amarelo').toggle('slow');
    $('#pagAmarelo').toggle('slow');
    $('#rosa').hide('slow');
    $('#pagRosa').hide('slow');
    $('#azul').hide('slow');
    $('#pagAzul').hide('slow');
    $('#vermelho').hide('slow');
    $('#pagVermelho').hide('slow');
});

$('.azul').click(function() {
    $('#azul').toggle('slow');
    $('#pagAzul').toggle('slow');
    $('#rosa').hide('slow');
    $('#pagRosa').hide('slow');
    $('#amarelo').hide('slow');
    $('#pagAmarelo').hide('slow');
    $('#vermelho').hide('slow');
    $('#pagVermelho').hide('slow');
});

$('.vermelho').click(function() {
    $('#vermelho').toggle('slow');
    $('#pagVermelho').toggle('slow');
    $('#rosa').hide('slow');
    $('#pagRosa').hide('slow');
    $('#amarelo').hide('slow');
    $('#pagAmarelo').hide('slow');
    $('#azul').hide('slow');
    $('#pagAzul').hide('slow');
});