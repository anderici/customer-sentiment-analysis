<?php 
    $comentario = $_GET['comentario'];

    $url = 'http://127.0.0.1:8000/analise_sentimento/';
    
    $ch = curl_init();

    // Codifica uma string usada como parâmetro GET
    $comentario = curl_escape($ch, $comentario);
    // Resultado: Hofbr%C3%A4uhaus%20%2F%20M%C3%BCnchen

    // Cria uma URL com a string codificada
    $url = "http://127.0.0.1:8000/analise_sentimento/?message={$comentario}";

    // Envia a requisição HTTP e fecha o controlador
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    
    echo $response;
?>