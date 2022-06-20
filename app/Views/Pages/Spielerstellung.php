<div class="container ">
    <?php if(session()->getFlashdata('error')):?>
        <div class="alert alert-warning">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif;?>
<form action="<?php echo base_url(); ?>/Spielerstellung/spielErstellen" method="post">
  <?= csrf_field()?>

    <div class="row g-2 pb-5 mt-4">
        <div class="col-8 mx-auto">

            <label for="gameName" class="text-center">Spielname</label>
            <input name="gameName" id="gameName" class="form-control" />
        </div>
    </div>
    <div class="row g-2 pb-5 mt-4">
                <div class="col-8 mx-auto">
                    <label for="fragenkatalogbezeichnung" >Fragenkatalog</label>
                    <select class="form-select" name="fragenkatalogId" id="fragenkatalogId">
                        <?php if (! empty($katalog) && is_array($katalog)): ?>

                        <?php foreach ($katalog as $katalog_item): ?>

                            <option value="<?= esc($katalog_item['fragenkatalogId'])?>"><?= esc($katalog_item['fragenkatalogbezeichnung'])?></option>
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