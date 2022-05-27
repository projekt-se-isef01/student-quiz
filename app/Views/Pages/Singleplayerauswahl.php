
<div class="container">

    <h3 class="text-center"> Wähle Fragenkatalog</h3>

    <?php if (! empty($katalog) && is_array($katalog)): ?>

        <?php foreach ($katalog as $katalog_item): ?>

            <div class="main">
                <?= esc($katalog_item['fragenkatalogbezeichnung']) ?>
            </div>
            <p><a href="/Singleplayer/<?= esc($katalog_item['fragenkatalogbezeichnung']) ?>">Zum Katalog</a></p>
        <?php endforeach ?>


    <?php endif ?>
</div>