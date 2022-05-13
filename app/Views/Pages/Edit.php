

    <div class="container">
    <?php if(session()->getFlashdata('msg')):?>
            <div class="alert alert-warning">
                <?= session()->getFlashdata('msg') ?>
            </div>
        <?php endif;?>

        <?php if(isset($frage)):?>

<br>
        <form action="<?php echo base_url();?>/Fragenkatalog/update" method="post">
            <?= csrf_field() ?>

            <input type="text" hidden="hidden" name="frageId"id="frageId" value="<?php echo $frage['frageId']?>">

            <div class="row g-2">
            <div class="col-8 mx-auto">
                <div class="form-floating">

                    <input type="text" name="frage" class="form-control text-center" placeholder="" style="height:100px " value="<?php echo $frage['frage']?>"/>
                    <label for="floatingInputGrid" class="text-center">Frage</label>

                </div>
            </div>
            <div class="row g-2">
                <div class="col-6">
                    <div class="form-floating">

                        <input type="text" name="antwort1" class="form-control" placeholder="" style="height: 100px"  value="<?php echo $frage['antwort1']?>"/>
                        <label for="floatingInputGrid">Antwort 1</label>

                    </div>
                </div>

                <div class="col-6">
                    <div class="form-floating">

                        <input type="text" name="antwort2" class="form-control" placeholder=""  style="height: 100px" value="<?php echo $frage['antwort2']?>"

                        />
                        <label for="floatingInputGrid">Antwort 2</label>

                    </div>
                </div>
                <div class="col-6">
                    <div class="form-floating">

                        <input type="text" name="antwort3" class="form-control" placeholder=""  style="height: 100px" value="<?php echo $frage['antwort3']?>"/>
                        <label for="floatingInputGrid">Antwort 3</label>

                    </div>
                </div>
                <div class="col-6">
                    <div class="form-floating">

                        <input type="text" name="antwort4" class="form-control" placeholder=""style="height: 100px" value="<?php echo $frage['antwort4']?>"/>
                        <label for="floatingInputGrid"> Antwort 4</label>

                    </div>
                </div>

            </div>
            <div class="row g-2">
                <div class="col-6 mx-auto">
                    <div class="form-floating">

                        <input type="text" name="antwortLoesung" class="form-control" placeholder="" style="height: 100px"   value="<?php echo $frage['antwortLoesung']?>"/>
                        <label for="floatingInputGrid">Lösung</label>

                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-6 mx-auto">
                        <div class="form-floating">

                            <input type="text" placeholder="" name="hinweis" class="form-control text-center"  style="height: 100px" value="<?php echo $frage['hinweis']?>"/>
                            <label for="floatingInputGrid" class="text-center">Hinweis</label>

                        </div>
                    </div>
                </div>


                <div class="row g-2 justify-content-center ">
                    <div class="col-3">
                        <div class="form-floating">

                            <input type="text" name="5050Joker1" class="form-control" placeholder="" style="height: 100px"   value="<?php echo $frage['5050Joker1']?>"/>
                            <label for="floatingInputGrid">50:50 Joker</label>

                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-floating">
                            <input type="text" name="5050Joker2" class="form-control" placeholder="name@example.com"  style="height: 100px" value="<?php echo $frage['5050Joker2']?>"
<?php echo $frage['5050Joker2']?>

                            />
                            <label for="floatingInputGrid">50:50 Joker</label>
                        </div>
                        </div>
                </div>

                <div class="">

                <button type="submit" class="btn btn-secondary" >Speichern</button>
            </div
        </form>
                </div>
<?php endif;?>