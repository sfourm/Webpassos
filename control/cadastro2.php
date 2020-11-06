<?php
session_start();
include('conexao.php');

$email = filter_input (INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = md5(filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING));
$nome = filter_input (INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$sobrenome = filter_input (INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
$telefone = filter_input (INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$vkey = md5(time().$nome);


$sql = "select count(*) as total from usuario where email = '$email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['email_existe2'] = true;
	header('Location: ../index.php');
	exit;
}

$sql = "select count(*) as total from usuario where telefone = '$telefone'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['telefone_existe2'] = true;
	header('Location: ../index.php');
	exit;
}

$sql = "INSERT INTO usuario (email, senha, nome, sobrenome, telefone, vkey, data_cadastro) VALUES ('$email', '$senha', '$nome', '$sobrenome', '$telefone', '$vkey', NOW())";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro2'] = true;
}

$conexao->close();

header('Location: ../index.php');
exit;
?>

