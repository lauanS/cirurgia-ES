<div class="form-row">
    <div class="name">Cirurgia</div>
    <div class="value">
        <div class="input-group">
            <input class="input--style-5" type="text" name="nomeCirurgia" id="name">
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
    <div class="name">Descrição</div>
    <div class="value">
        <div class="input-group">
            <input class="input--style-5" type="text" name="descricao">
        </div>
    </div>
</div>
