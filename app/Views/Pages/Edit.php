<link rel="stylesheet" type="text/css" href="/css/error.css">
<?php if(isset($frage) ):?>

<div class="container">


<br>
        <form id="editForm" action="<?php echo base_url();?>/Fragenkatalog/updateFrage" method="post">
           <?= csrf_field() ?>
            <input type="hidden" name="frageId" value="<?php echo $frage['frageId']?>"/>
            <div class="text-center p-2">
            <button type="submit" class="btn btn-secondary" >Speichern</button>
    </div>

            <div class="row g-2">
            <div class="col-8 mx-auto">
                <div class="form-floating">

                    <textarea type="text" id="frage" name="frage" class="form-control text-center" placeholder="" style="height:100px " value=""><?php echo $frage['frage']?></textarea>
                    <label for="floatingInputGrid" class="text-center">Frage</label>

                </div>
            </div>
            <div class="row g-2">
                <div class="col-6">
                    <div class="form-floating">

                        <textarea type="text" id="antwort1" name="antwort1" class="form-control" placeholder="" style="height: 100px"  value=""><?php echo $frage['antwort1']?></textarea>
                        <label for="floatingInputGrid">Antwort 1</label>

                    </div>
                </div>

                <div class="col-6">
                    <div class="form-floating">

                        <textarea type="text" id="antwort2" name="antwort2" class="form-control" placeholder=""  style="height: 100px" value=""><?php echo $frage['antwort2']?></textarea>
                        <label for="floatingInputGrid">Antwort 2</label>

                    </div>
                </div>
                <div class="col-6">
                    <div class="form-floating">

                        <textarea type="text" id="antwort3"  name="antwort3" class="form-control" placeholder=""  style="height: 100px" value=""><?php echo $frage['antwort3']?></textarea>
                        <label for="floatingInputGrid">Antwort 3</label>

                    </div>
                </div>
                <div class="col-6">
                    <div class="form-floating">

                        <textarea type="text" id="antwort4" name="antwort4" class="form-control" placeholder=""style="height: 100px" value=""><?php echo $frage['antwort4']?></textarea>
                        <label for="floatingInputGrid"> Antwort 4</label>

                    </div>
                </div>

            </div>
            <div class="row g-2">
                <div class="col-6 mx-auto">
                    <div class="form-floating">

                        <textarea type="text" id="antwortLoesung" name="antwortLoesung" class="form-control" placeholder="" style="height: 100px"   value=""><?php echo $frage['antwortLoesung']?></textarea>
                        <label for="floatingInputGrid">Lösung</label>

                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-6 mx-auto">
                        <div class="form-floating">

                            <textarea type="text" placeholder="" id="hinweis" name="hinweis" class="form-control text-center"  style="height: 100px" value=""><?php echo $frage['hinweis']?></textarea>
                            <label for="floatingInputGrid" class="text-center">Hinweis</label>

                        </div>
                    </div>
                </div>


                <div class="row g-2 justify-content-center">
                    <div class="col-3">
                        <div class="form-floating">

                            <textarea type="text" id="Joker50501" name="Joker50501" class="form-control" placeholder="" style="height: 100px"><?php echo $frage['Joker50501']?></textarea>
                            <label for="floatingInputGrid">50:50 Joker</label>

                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-floating">
                            <textarea type="text" id="Joker50502" name="Joker50502" class="form-control" placeholder="name@example.com"  style="height: 100px"><?php echo $frage['Joker50502']?></textarea>
                            <label for="floatingInputGrid">50:50 Joker</label>
                        </div>
                        </div>
                </div>

                <div class="">

            </div
        </form>
                </div>
<?php endif;?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>
<script src="/js/editValidation.js"></script>