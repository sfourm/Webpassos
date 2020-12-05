$('#form-1').submit(function(e){
    e.preventDefault();
    $('#div-mensagem').addClass('text-info')
    $('#div-mensagem').removeClass('text-danger')
    $('#div-mensagem').removeClass('text-success')
    $('#div-mensagem').text('Enviando')
    const nome = $('input[name="nome"]').val();
    const sobrenome = $('input[name="sobrenome"]').val();
    const email = $('input[name="email"]').val();
    const telefone = $('input[name="telefone"]').val();
    const mensagem = $('textarea[name="mensagem"]').val();
    $.ajax({
        url:"mail.php",
        type:"post",
        data: {nome: nome, sobrenome: sobrenome, email: email, telefone: telefone, mensagem: mensagem},
        success: function(msg){
            if(msg.trim() === 'Email enviado com Sucesso!'){
                $('#div-mensagem').removeClass('text-info')
                $('#div-mensagem').addClass('text-success')
                $('#div-mensagem').text(msg);
                $('#email').val('');
                $('#nome').val('');
                $('#sobrenome').val('');
                $('#telefone').val('');
                $('#mensagem').val('');
                
            }else{
                $('#div-mensagem').addClass('text-danger')
                $('#div-mensagem').text(msg);
            }
        }
    })
})
