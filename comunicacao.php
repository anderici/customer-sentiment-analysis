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
    
    $obj = json_decode($response);
    
    if($obj->{'sentimento'} == "Bom"){ ?>
        <!DOCTYPE html>
        <html>

        <head>
            <meta charset="utf-8">
            <title>Analisador de sentimento com Machine Learning</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        </head>

        <body>
                <div class="div-conteiner" style="padding: 10px;">
                    <h1>Sentimento <font color="green">BOM!</font></h1>
                    <h6>Que legal! Parece que você gostou do nosso produto!</h6>

                    

                    <div class="form-group">
                        <button onclick="window.location.href='home.php';" class="btn btn-primary btn-lg">Nova Análise</button>
                    </div>
            </form>

            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
            </div>
        </body>

        </html>
    <?php 
    } 
    else{ ?>
        <!DOCTYPE html>
        <html>

        <head>
            <meta charset="utf-8">
            <title>Analisador de sentimento com Machine Learning</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        </head>

        <body>
                <div class="div-conteiner" style="padding: 10px;">
                    <h1>Sentimento <font color="red">RUIM!</font></h1>
                    <h6>Que pena! Nosso suporte entrará em contato para podermos ajudá-lo!</h6>

                    

                    <div class="form-group">
                        <button onclick="window.location.href='home.php';" class="btn btn-primary btn-lg">Nova Análise</button>
                    </div>
            </form>

            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
            </div>
        </body>

        </html>
    <?php } 
    ?>