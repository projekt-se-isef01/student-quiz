<div class="container ">

<form action="<?php echo base_url(); ?>/VS/spielErstellen" method="post">
    <div class="row g-2 pb-5 mt-4">
        <div class="col-8 mx-auto">
            <label for="fragenkatalogbezeichnung" class="text-center">Spielname</label>
            <input name="spiel" id="spiel" value=""class="form-control" />
        </div>
    </div>
    <div class="row g-2 pb-5 mt-4">
                <div class="col-8 mx-auto">
                    <label for="fragenkatalogbezeichnung" >Fragenkatalog</label>
                    <select class="form-select" name="katalog" id="cars">
                        <?php if (! empty($katalog) && is_array($katalog)): ?>

                        <?php foreach ($katalog as $katalog_item): ?>

                            <option value="<?= esc($katalog_item['fragenkatalogbezeichnung'])?>"><?= esc($katalog_item['fragenkatalogbezeichnung'])?></option>
                        <?php endforeach ?>
                        <?php endif ?>
                    </select>
                </div>
    </div>

    <div class="row g-2">
        <div class="col justify-content-center d-grid ">
            <button type="submit" class="btn btn-secondary height: auto">Spiel erstellen</button>
        </div>
    </div>
</form>
</div>