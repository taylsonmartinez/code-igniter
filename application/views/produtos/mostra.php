<html>
    <head>
            <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>">
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>

    <body>
        <div class="container">
        <h1><?= $produto["nome"] ?><br></h1>
        <?= $produto["preco"] ?><br>
        <?= auto_typography(html_escape($produto["descricao"])) ?><br>
        </div> 
    </body>    
</html>