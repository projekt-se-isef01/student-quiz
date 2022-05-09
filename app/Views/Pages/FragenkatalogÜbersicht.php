
<div class="container">

<a href="Fragenkatalogerstellung"  class="btn btn-link" style="height: auto">Erstelle Fragenkatalog</a>

<?php if (! empty($katalog) && is_array($katalog)): ?>

    <?php foreach ($katalog as $katalog_item): ?>



        <div class="main">
            <?= esc($katalog_item['fragenkatalogbezeichnung']) ?>
        </div>
        <p><a href="/Fragenkatalog/<?= esc($katalog_item['fragenkatalogbezeichnung'], 'url') ?>">Zum Katalog</a></p>
    <?php endforeach ?>


<?php endif ?>
</div>