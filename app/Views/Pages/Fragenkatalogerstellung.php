
<?php if(isset($validation)):?>
    <br>
    <div class="alert mt-5  text-center alert-warning">
        <?= $validation->listErrors() ?>
    </div>
<?php endif;?>
<div style="height: 70vh;" class="container d-flex  justify-content-center align-items-center" >

<form action="<?php echo base_url(); ?>/Fragenkatalogerstellung/neuerKatalog" method="post">
   <?= csrf_field()?>
    <div class="row  g-2 pb-5 ">
        <div class="col ">
        <label for="fragenkatalogbezeichnung" class="form-label h2 text-center">Fragenkatalog Bezeichnung</label>
        <input type="text" name="fragenkatalogbezeichnung" class="form-control mt-3" />
        </div>
   </div>

    <div class="row g-2">
        <div class="col justify-content-center d-grid ">
            <button type="submit" class="btn btn-secondary height: auto">Katalog speichern</button>
        </div>
    </div>
</form>
</div>