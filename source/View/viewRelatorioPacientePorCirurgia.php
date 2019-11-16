<?php $v->layout("_theme"); ?>

<h1><?= $pageTitle ?></h1>

<section>
    <?php foreach($relatorio as $cirurgia => $value) ?>
        <article>
            <h3><?= $cirurgia ?> </h3>
            <p><?= $relatorio[$cirurgia] ?></p>
        </article>

</section>