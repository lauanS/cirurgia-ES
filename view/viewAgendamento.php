<!DOCTYPE html>
<html>

<head>
    <title>RESERVA DE AGENDA CIRÚRGICA</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">

    <!-- Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width;initial-scale=1;shrink-to-fit-no">

    <style>
        .destaque {
            background-color: lightgrey;
            border: solid 1px black;
        }
    </style>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">

    <!-- Import jQuery UI -->
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
</head>
<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">RESERVA DE AGENDA CIRÚRGICA </h2>
                </div>
                <div class="card-body">
                    <form class="form" method="POST"> <!-- action="./controller/AgendamentoController.php"> !-->
                        <input type="hidden" name="method" value="salvar">
                        <div class="form-row">
                            <div class="name">Nome</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="nomePaciente">
                                </div>
                            </div>
                            <script>
                                    $(function () {
                                        var nomes = [
                                            "Lauan",
                                            "Luana",
                                            "Launita",
                                            "Gabriel",
                                            "Gustavo",
                                            "Gustavo"
                                        ];
                                        $("#name").autocomplete({
                                            source: nomes
                                        });
                                    });
                                </script>
                        </div>
                        <div class="form-row">
                            <div class="name">Data/Hora da Cirurgia</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="datetime-local" name="dataCirurgia">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">CPF</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="cpf">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Nascimento</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="nascimento">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Telefone do Paciente</div>
                            <div class="value">
                                    <div class="input-group-desc">
                                        <input class="input--style-5" type="text" name="telefonePaciente">
                                        <label class="label--desc">Número de Telefone</label>
                                    </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Convênio</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="convenio">
                                </div>
                            </div>
                        </div>
                        <div class="form-row p-t-20">
                            <label class="label label--block">Gênero</label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Masculino
                                    <input type="radio" checked="checked" name="masculino">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Feminino
                                    <input type="radio" name="feminino">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <!-- MEDICO -->
                        <?php
                            require_once './view/viewFormMedico.php';
                            require_once './view/viewExtra.php';
                        ?>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Confirmar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<!-- Jquery JS-->
<script src="vendor/jquery/jquery.min.js"></script>
<!-- Vendor JS-->
<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/datepicker/moment.min.js"></script>
<script src="vendor/datepicker/daterangepicker.js"></script>

<!-- Main JS-->
<script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
