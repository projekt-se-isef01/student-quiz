<div class="container">

    <?php if(isset($validation)):?>
        <div class="alert alert-warning">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif;?>
<form action="<?php echo base_url(); ?>/Fragenkatalog/erstellen" method="post">
    <div class="mb-3">
        <label for="fragenkatalogbezeichnung" class="form-label">Fragenkatalog Bezeichnung</label>
        <input type="text" name="fragenkatalogbezeichnung" class="form-control" />
    </div>
    <button type="submit" class="btn btn-secondary" style="width: 100%; height: auto">Katalog speichern</button>
    </form>
</div>