//desabilita e esconde todos os inputs do campo area de atuação
$('#TipoDocumento').change(function(e) {
    let opcaoSelecionada = this.querySelector('option:checked');

    //desabilita e esconde todos os inputs
    let inputs = $('#InputsDocumento input');
    inputs.attr('type', 'hidden');
    inputs.attr('disabled', '');

    //habilita e mostra o input relevante
    let inputEscolhido = inputs.filter('#'+ opcaoSelecionada.dataset.tipo);
    inputEscolhido.attr('type', 'text');
    if (opcaoSelecionada.dataset.tipo !== 'placeholder')
        inputEscolhido.removeAttr('disabled');


    //mostra/nãom mostra o estado
    switch($('#TipoDocumento').val()) {
        case "Acadêmico":
        case "Outros":
        case "Não sou da Areá da Saúde":
            $("#estado").hide();
            break;
        default:
            $("#estado").show();
            break;
    }
});