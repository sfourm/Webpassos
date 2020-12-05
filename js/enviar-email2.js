$('#form-2').submit(function(e){
    e.preventDefault();
    $('#div-mensagem2').addClass('text-info')
    $('#div-mensagem2').removeClass('text-danger')
    $('#div-mensagem2').removeClass('text-success')
    $('#div-mensagem2').text('Enviando')
    const nome2 = $('input[name="nome2"]').val();
    const sobrenome2 = $('input[name="sobrenome2"]').val();
    const email2 = $('input[name="email2"]').val();
    const telefone2 = $('input[name="telefone2"]').val();
    const mensagem2 = $('textarea[name="mensagem2"]').val();
    $.ajax({
        url:"mail.php",
        type:"post",
        data: {nome: nome2, sobrenome: sobrenome2, email: email2, telefone: telefone2, mensagem: mensagem2},
        success: function(msg){
            if(msg.trim() === 'Email enviado com Sucesso!'){
                $('#div-mensagem2').removeClass('text-info')
                $('#div-mensagem2').addClass('text-success')
                $('#div-mensagem2').text(msg);
                $('#email2').val('');
                $('#nome2').val('');
                $('#sobrenome2').val('');
                $('#telefone2').val('');
                $('#mensagem2').val('');
            
            }else{
                $('#div-mensagem2').addClass('text-danger')
                $('#div-mensagem2').text(msg);
            }
        }
    })
})