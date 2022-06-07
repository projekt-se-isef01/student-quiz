<div class="container ">

    <?php if(isset($validation)):?>
        <div class="alert alert-warning">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif;?>
<form action="<?php echo base_url(); ?>/Fragenkatalog/erstellen" method="post">
    <div class="row g-2 pb-5 mt-4">
        <div class="col-8 mx-auto">
        <label for="fragenkatalogbezeichnung" class="form-label">Fragenkatalog Bezeichnung</label>
        <input type="text" name="fragenkatalogbezeichnung" class="form-control" />
        </div>
   </div>
    <div class="row g-2">
        <div class="col justify-content-center d-grid ">
            <button type="submit" class="btn btn-secondary height: auto">Katalog speichern</button>
        </div>
    </div>
</form>
</div>