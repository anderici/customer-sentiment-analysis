<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Analisador de sentimento com Machine Learning</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <form action="comunicacao.php" method="GET">
        <div class="div-conteiner" style="padding: 10px;">
            <h1>Análise de sentimentos com Machine Learning e Python</h1>
            <h4>Preencha o campo abaixo com o seu comentário para que possamos avaliá-lo</h4>

            <div class="form-group">
                <label for="comentario">Comentário</label>
                <textarea class="form-control" name="comentario" rows="3"></textarea>
            </div>

            <div class="form-group" style="margin-top:50px;">
                <button type="submit" class="btn btn-primary btn-lg">Analisar Sentimento</button>
            </div>
    </form>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </div>
</body>

</html>