<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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


<footer>
 <?= URL_BASE; ?> - Todos os Direitos Reservados
</footer>
</body>
</html>