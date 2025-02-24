<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $age = htmlspecialchars($_POST['age']);
    $experience = htmlspecialchars($_POST['experience']);
    $why = htmlspecialchars($_POST['why']);
    $suggestions = htmlspecialchars($_POST['suggestions']);

    $to = "nyxferion.shop";
    $subject = "Nova Candidatura para Administrador";
    $message = "Nome: $name\n";
    $message .= "E-mail: $email\n";
    $message .= "Idade: $age\n";
    $message .= "Experiência com Minecraft:\n$experience\n";
    $message .= "Por que quer ser administrador:\n$why\n";
    $message .= "Sugestões para o servidor:\n$suggestions\n";

    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "<p>Sua candidatura foi enviada com sucesso!</p>";
    } else {
        echo "<p>Ocorreu um erro ao enviar sua candidatura. Por favor, tente novamente.</p>";
    }
}
?>