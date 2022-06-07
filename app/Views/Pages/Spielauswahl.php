

<div class="container">
    <?php if (! empty($spiel) && is_array($spiel)): ?>

    <h3 class="text-center"> Wähle Spiel oder <a href="<?= site_url("/VS/addGame")?>">erstelle neues </a> </h3>


        <?php foreach ($spiel as $spiel_item): ?>

            <p><a href="<?= site_url("/VS/".$spiel_item['gameId'])?>">
                    <?= esc($spiel_item['gameName']) ?>
                </a></p>
        <?php endforeach ?>


    <?php endif ?>
</div>