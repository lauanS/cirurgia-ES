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
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">RESERVA DE AGENDA CIRÚRGICA </h2>
                </div>
                <div class="card-body">
                    <form class="form" method="POST" action="./controller/AgendamentoController.php">
                        <div class="form-row">
                            <div class="name">Nome</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="nome">
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
                                    <input class="input--style-5" type="datetime-local" name="data">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">CPF</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="company">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Nascimento</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="data">
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Telefone</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="area_code">
                                            <label class="label--desc">Código de Área</label>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="phone">
                                            <label class="label--desc">Número de Telefone</label>
                                        </div>
                                    </div>
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
                                    <input type="radio" checked="checked" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Feminino
                                    <input type="radio" name="exist">
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
