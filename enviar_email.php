<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    $para = "admin@nyxferion.com"; // E-mail do administrador
    $corpo_mensagem = "Nome: $nome\n";
    $corpo_mensagem .= "E-mail: $email\n";
    $corpo_mensagem .= "Assunto: $assunto\n";
    $corpo_mensagem .= "Mensagem:\n$mensagem\n";

    $cabecalhos = "From: $email";

    if (mail($para, $assunto, $corpo_mensagem, $cabecalhos)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem.";
    }
}
?>
