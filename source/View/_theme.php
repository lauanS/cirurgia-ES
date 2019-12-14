<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= url("vendor/twbs/bootstrap/dist/css/bootstrap.min.css") ?>">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <title><?= $title; ?></title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-dark bg-dark">
            <?php
            if ($v->section("sidebar")) :
                echo $v->section("sidebar");
            else :
                ?>
                <a class="navbar-brand" title="" href="<?= url("") ?>">Home</a>
                <a class="navbar-brand" title="" href="<?= url("agendamento") ?>">Agendamento</a>
                <a class="navbar-brand" title="" href="<?= url("relatorio") ?>">Relatorio</a>
                <a class="navbar-brand" title="" href="<?= url("visualizar") ?>">Visualizar</a>
            <?php
            endif;
            ?>
        </nav>
    </div>

    <main>
        <div class="row col-xs-12 col-sm-12 col-md-12 col-lg-12"  align="center">
            <?= $v->section("content"); ?>
        </div>
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="<?= url("vendor/twbs/bootstrap/dist/js/bootstrap.min.js") ?>"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <?= $v->section("js"); ?>
</body>
<br>
<br>
<br>
<br>


</html>