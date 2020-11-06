<?php 
session_start();
include ("conexao.php");
    
    if(isset($_POST['enviar'])){

        $email = $mysqli->escape_string($_POST['email']);

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $erro[] = "Email inválido";
        }

        $sql_code = "SELECT senha, codigo FROM usuario WHERE email = 'email'";
        $sql_query = $mysqli->query($sql_code) or die($mysqli->error);
        $dado = $sql_query->fetch_assoc();
        $total = $sql_query->num_rows;

        if($total == 0)
            $echo[] = "O email informado não existe no nosso banco de dados";



        if(count($erro) == 0 && $total > 0){}

        $novasenha = substr(md5(time()), 0, 6);
        $nscriptografada = md5(md5($novasenha));

        if(mail($email, "Sua nova senha", "Sua nova senha: ".$novanha)){


        $sql_code = "UPDATE usuario SET senha = '$nscriptografada' WHERE email = '$email'";
        $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

        }

    }

?>
