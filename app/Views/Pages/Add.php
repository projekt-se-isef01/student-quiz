<?php if(session()->getFlashdata('add')):?>

<div class="container  d-flex align-items-center justify-content-center" style="height:80vh">
    <div class="container-fluid py-5 p alert alert-warning ">
        <div class="text-center display-5 " >
            <?= session()->getFlashdata('add') ?>
        </div>
    </div>
</div>
<?php endif;?>
<div class="container">
    <br>
    <?php if(isset($_SESSION['validation'])):?>
        <div class="alert text-center alert-warning">
            <?= esc($_SESSION['validation'] )?>
        </div>
    <?php endif;?>
    <?php if(isset($frage)):?>


    <form id="editForm"   action="<?php echo base_url();?>/Fragenkatalog/storeFrage" method="post">
        <?= csrf_field() ?>
        <div class="text-center p-6">
            <button type="submit" class="btn btn-secondary">Speichern</button>
        </div> <br>
        <input type="text" hidden="hidden" name="fragenkatalogId"id="fragenkatalogId" value="<?php echo $frage['fragenkatalogId']?>"/>
        <div class="row g-2">
            <div class="col-8 mx-auto">
                <div class="form-floating">

                    <textarea autocomplete="on" id="frage=" name="frage" class="form-control text-center" placeholder="" cols="95" style="height:100px"><?= old('frage')?></textarea>
                    <label for="frage">Frage</label>

                </div>
            </div>
            <div class="row g-2">
                <div class="col-6">
                    <div class="form-floating">

                        <textarea id="antwort1" name="antwort1" class="form-control text-center" placeholder="" style="height: 100px"><?= old('antwort1')?></textarea>
                        <label for="floatingInputGrid">Antwort 1</label>

                    </div>
                </div>

                <div class="col-6">
                    <div class="form-floating">

                        <textarea type="text" id="antwort2" name="antwort2" class="form-control text-center" placeholder=""  style="height: 100px"><?= old('antwort2')?></textarea>
                        <label for="floatingInputGrid">Antwort 2</label>

                    </div>
                </div>
                <div class="col-6">
                    <div class="form-floating">

                        <textarea type="text" id="antwort3"  name="antwort3" class="form-control text-center" placeholder=""  style="height: 100px"><?= old('antwort3')?></textarea>
                        <label for="floatingInputGrid">Antwort 3</label>

                    </div>
                </div>
                <div class="col-6">
                    <div class="form-floating">

                        <textarea id="antwort4" name="antwort4" class="form-control text-center" placeholder="" style="height: 100px"><?= old('antwort4')?></textarea>
                        <label for="floatingInputGrid"> Antwort 4</label>

                    </div>
                </div>

            </div>
            <div class="row g-2">
                <div class="col-6 mx-auto">


                        <label for="antwortLoesung"> Lösung</label>
                        <?php echo form_dropdown('antwortLoesung', [
                                '1'  => 'Antwort 1',
                                '2'    => 'Antwort 2',
                                '3'  => 'Antwort 3',
                                '4' => 'Antwort 4',]
                            , old('antwortLoesung'),'class="form-select"');?>

                    </div>
                    <div class="col-6 mx-auto">
                        <div class="form-floating">

                            <textarea  placeholder="" id="hinweis" name="hinweis" class="form-control text-center"  style="height: 100px" ><?= old('hinweis')?></textarea>
                            <label for="floatingInputGrid" class="text-center">Hinweis</label>

                        </div>
                    </div>
                </div>


                <div class="row g-2 justify-content-center">
                    <div class="col-3">
                            <label for="floatingInputGrid">50:50 Joker</label>
                            <?php echo form_dropdown('Joker50501', [
                                    null=>'',

                                    '1'  => 'Antwort 1',
                                    '2'    => 'Antwort 2',
                                    '3'  => 'Antwort 3',
                                    '4' => 'Antwort 4',]
                                , old('Joker50501'),'class="form-select"');?>

                        </div>

            <div class="col-3">
                <label for="floatingInputGrid">50:50 Joker</label>
                <?php echo form_dropdown('Joker50502', [
                        null=>'',

                        '1'  => 'Antwort 1',
                        '2'    => 'Antwort 2',
                        '3'  => 'Antwort 3',
                        '4' => 'Antwort 4',]
                    , old('Joker50502'),'class="form-select"');?>

            </div>
                </div>
</div>

    </form>
</div>
<br>

<?php endif;?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>
<script src="/js/editValidation.js"></script>