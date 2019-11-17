<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= url("vendor/twbs/bootstrap/dist/css/bootstrap.min.css") ?>">

    <title><?=$title; ?></title>
</head>
<body>
    <nav>
        <?php
            if ($v->section("sidebar")):
                echo $v->section("sidebar");
            else:
                ?>
                <a title="" href="<?= url("")?>">Home</a>
                <a title="" href="<?= url("agendamento") ?>">Agendamento</a>
            <?php
            endif;
            ?>

    </nav>

    <main>
        <?= $v->section("content");?>
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="<?= url("vendor/twbs/bootstrap/dist/js/bootstrap.min.js") ?>"></script>
    <?= $v->section("js"); ?>
</body>
<footer>
    <?= URL_BASE; ?> - Todos os Direitos Reservados
</footer>
</html>