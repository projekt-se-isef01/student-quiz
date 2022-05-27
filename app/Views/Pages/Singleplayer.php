<?php if ( isset($frage)): ?>

        <div class="container text-center">
            <br>
        <div class="row g-2">
            <div class="col-8 mx-auto">
                <div class="form-floating">

                    <input type="text" id="frage" name="frage" class="form-control text-center" placeholder="" style="height:100px " value="<?php echo $frage['frage'] ?>"/>
                    <label for="floatingInputGrid" class="text-center">Frage</label>

                </div>
            </div>
            <br>
            <?= \Config\Services::validation()->listErrors(); ?> <span class="d-none alert alert-success mb-3" id="res_message"></span>
            <form id="singleplayerForm" name="singleplayerForm" accept-charset="utf-8" action="javascript:void(0)" method="post">
                <?= csrf_field() ?>
                <input type="hidden" id="frageId" name="frageId"  value="<?php echo $frage['frageId']?>"/>

                <div class="row p-2">
                    <div class="col">

                        <input type="radio" id="antwort1" name="antwort" class="btn-check" autocomplete="off" required value="1"/>
                        <label class="btn btn-outline-warning " for="antwort1"> <?php echo $frage['antwort1']?></label>
                    </div>

                    <div class="col">


                        <input type="radio" id="antwort2" name="antwort" class="btn-check" autocomplete="off" value="2"/>
                        <label class="btn btn-outline-warning " for="antwort2" ><?php echo $frage['antwort2']?></label>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col">

                        <input type="radio" id="antwort3"  name="antwort"  class="btn-check" autocomplete="off" value="3"/>
                        <label class="btn btn-outline-warning " for="antwort3"> <?php echo $frage['antwort3']?></label>
                    </div>

                    <div class="col">


                        <input type="radio" id="antwort4" name="antwort" class="btn-check" autocomplete="off" value="4"/>
                        <label class="btn btn-outline-warning " for="antwort4"> <?php echo $frage['antwort4']?> </label>
                    </div>
                </div>

                </div>
            <div class="">


                <button class="btn btn-secondary" id="send_form" type="submit"style="height: auto">Bestätigen</button>
            </div>
                        </form>
                        </div>
    <?php endif; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>
<script src="/js/SP.js"></script