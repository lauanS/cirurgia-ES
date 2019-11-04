<!DOCTYPE html>
<html>

<head>
    <title>RESERVA DE AGENDA CIRÚRGICA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Import CSS -->
    <link href="./css/main.css" rel="stylesheet" media="all">

    <!-- Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width;initial-scale=1;shrink-to-fit-no">

    <style>
        .destaque {
            background-color: lightgrey;
            border: solid 1px black;
        }
    </style>
</head>

<body>
    <div class="container destaque">
        <label class="label">RESERVA DE AGENDA CIRÚRGICA</label>
    </div>
    <!-- Scripts JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

    <!-- Import jQuery UI -->
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
</body>

<form class="form" method="POST" action="./controller/AgendamentoController.php">
    <br><br>
    <div class="container">
        <div class="col">
            <div class="row">
                <label class="label--up">Nome do Paciente:</label>
                <input type="text" class="form-control" id="nome">
            </div>
        </div>
    </div>
    <script>
        $(function () {
            var nomes = [
                "Test1",
                "Test2",
                "Test3",
                "Test4"
            ];
            $("#nome").autocomplete({
                source: nomes
            });
        });
    </script>

    <br>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <label class="label--up">Data de nascimento:</label>
                <input type="date" class="form-control">
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <input type="submit" value="enviar">
            </div>
        </div>
    </div>


</form>

</html>