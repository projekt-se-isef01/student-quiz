
<div class="container">

    <h3 class="text-center"> Wähle Fragenkatalog</h3>

    <?php if (! empty($katalog) && is_array($katalog)): ?>

        <?php foreach ($katalog as $katalog_item): ?>

            <div class="main">
            </div>
            <p><a href="/Singleplayer/<?= esc($katalog_item['fragenkatalogbezeichnung']) ?>">                <?= esc($katalog_item['fragenkatalogbezeichnung']) ?>
                </a></p>
        <?php endforeach ?>


    <?php endif ?>
</div>