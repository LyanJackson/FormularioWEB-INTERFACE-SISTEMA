<?php 
include '../web/seguranca.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$celular = $_POST['celular'];
$idade = $_POST['idade'];
$curso = $_POST['curso'];
$instituicao = $_POST['instituicao'];
$periodo = $_POST['periodo'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$cursorealizado = $_POST['cursorealizado'];

$sql = "INSERT INTO inscricoes_astronomia (nome, email, endereco, celular, idade, curso, instituicao, periodo, rg, cpf, cursorealizado) VALUES ('$nome', '$email', '$endereco', '$celular', '$idade', '$curso', '$instituicao', '$periodo', '$rg', '$cpf', '$cursorealizado')";

if(mysqli_query($_SG['link'], $sql)){
	// Envia e-mail avisando que alguém respondeu
	echo '<i class="fa fa-check"></i> Obrigado por se inscrever, agora é só aguardar que entraremos em contato.';
}
else {
	echo '<i class="fa fa-close"></i> Houve um erro no banco de dados, tente novamente mais tarde.';
	echo '<script>alert("Erro: '.mysqli_error($_SG['link']).'")</script>';
}

