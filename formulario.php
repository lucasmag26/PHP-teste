<?php

    include_once("conecta.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO user (nome, email, senha) VALUES ('$nome', '$email', '$senha')");

    mysqli_close($conexao);
    header('location:index.html');
?>