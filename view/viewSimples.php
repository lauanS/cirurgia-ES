<html>

<head>
    <title>RESERVA DE AGENDA CIRÚRGICA</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">

    <!-- Import CSS -->
    <link href="./css/main.css" rel="stylesheet" media="all">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
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

    <script type="text/javascript">
        $(document).ready(function(){
            $("input[name='nomePaciente']".blur(function() {
                var $cpf = $("input[name='cpf']");

                $.getJSON('C:/wamp64/www/cirurgia-ES/view/function.php', {
                    nomePaciente: $ (this).val()
                },function(json){
                    $cpf.val(json.cpf);
                });
            }));
        });

    </script>
    <form method="POST">
        <label>Nomes</label>
        <input class="form-control" type="text" name="nomePaciente" placeholder="s">
        <label>CPF</label>
        <input class="form-control" type="text" name="cpf" placeholder="77">
    </form>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="./node_modules/popper.js/dist/popper.min.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>



</body>
</html>
