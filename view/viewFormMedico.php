<div class="form-row">
    <div class="name">Nome do Medico</div>
    <div class="value">
        <div class="input-group">
            <input class="input--style-5" type="text" name="nomeMedico" id="name">
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
