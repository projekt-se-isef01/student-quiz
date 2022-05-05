
<?php if (! empty($frage) && is_array($frage)): ?>

<?php foreach ($frage as $frage_item): ?>

<h3><?= esc($frage_item['frage']) ?></h3>
    <h2><?=esc($frage_item['hinweis'])?> </h2>

    <?php endforeach ?><?php endif ?>
    <?php if (! empty($antwort) && is_array($antwort)): ?>

        <?php foreach ($antwort as $antwort_item): ?>

            <h3><?= esc($antwort_item['antwort']) ?></h3>

        <?php endforeach ?>

    <?php endif ?>