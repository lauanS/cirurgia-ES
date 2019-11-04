<div class="form-row">
    <div class="name">Nome do Medico</div>
    <div class="value">
        <div class="input-group">
            <input class="input--style-5" type="text" name="nomeMedico" id="nomeMedico">
        </div>
    </div>
    <script>
            $(function () {
                var nomes = [
                    "Carlos Tadeus",
                    "Lauan Souza",
                    "Launita Maria",
                    "Leonardo Stein"
                ];
                $("#name").autocomplete({
                    source: nomes
                });
            });
        </script>
</div>
<div class="form-row">
    <div class="name">CRM</div>
    <div class="value">
        <div class="input-group">
            <input class="input--style-5" type="text" name="crm">
        </div>
    </div>
</div>
<div class="form-row">
    <div class="name">Telefone do Paciente</div>
    <div class="value">
            <div class="input-group-desc">
                <input class="input--style-5" type="text" name="telefoneMedico">
                <label class="label--desc">Número de Telefone</label>
            </div>
    </div>
</div>
