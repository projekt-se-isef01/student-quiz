<br>
<div class="container d-flex align-items-center justify-content-center">

    <svg height="110" width="90" viewBox="0 0 110 120">

        <polygon points="50 3,100 28,100 75, 50 100,3 75,3 25" fill="#677cb1" /> <text x=50 y=65 font-size="45" fill="white" text-anchor="middle">?</text>
    </svg>
</div>
<?php if(isset($validation)):?>
    <br>
    <div class="alert mt-5  text-center alert-warning">
        <?= $validation->listErrors() ?>
    </div>
<?php endif;?>
<div style="height: 50vh;" class="container d-flex  justify-content-center align-items-center" >

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