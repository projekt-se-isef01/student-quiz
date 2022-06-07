<form id="VSform" name="VSform" accept-charset="utf-8" action="<?php echo base_url(); ?>/VS/endGame" method="post">

<?php if (! empty($frage) && is_array($frage)): ?>

    <?php foreach ($frage as $frage_i): ?>
        <div class="container text-center">
            <br>
            <div class="row g-2">
                <div class="col-8 mx-auto">
                    <div class="form-floating">

                        <input type="text" id="frage" name="frage" class="form-control text-center" placeholder="" style="height:100px " value="<?php echo $frage_i['frage'] ?>"/>
                        <label for="floatingInputGrid" class="text-center"><span class="nextf"> Frage</span></label>

                    </div>
                </div>
                <br>
                <?= \Config\Services::validation()->listErrors(); ?> <span class="d-none alert alert-success mb-3" id="res_message"></span>
                <input type="hidden" id="<?php echo $frage_i['frageId']?>" name="frageId[]"  value="<?php echo $frage_i['frageId']?>"/>
                    <div class="row p-2">
                        <div class="col">

                            <input type="radio" id="antwort1<?php echo $frage_i['frageId']?>" name="antwort[<?php echo $frage_i['frageId']?>]" class="btn-check" autocomplete="off" required value="1"/>
                            <label class="btn btn-outline-warning " for="antwort1<?php echo $frage_i['frageId']?>"><span class="next1"> <?php echo $frage_i['antwort1']?> </span> </label>
                        </div>

                        <div class="col">


                            <input type="radio" id="antwort2<?php echo $frage_i['frageId']?>" name="antwort[<?php echo $frage_i['frageId']?>]" class="btn-check" autocomplete="off" value="2"/>
                            <label class="btn btn-outline-warning " for="antwort2<?php echo $frage_i['frageId']?>" ><span class="next2"><?php echo $frage_i['antwort2']?></span></label>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col">

                            <input type="radio" id="antwort3<?php echo $frage_i['frageId']?>"  name="antwort[<?php echo $frage_i['frageId']?>]"  class="btn-check" autocomplete="off" value="3"/>
                            <label class="btn btn-outline-warning " for="antwort3<?php echo $frage_i['frageId']?>"><span class="next3"> <?php echo $frage_i['antwort3']?></span></label>
                        </div>

                        <div class="col">


                            <input type="radio" id="antwort4<?php echo $frage_i['frageId']?>" name="antwort[<?php echo $frage_i['frageId']?>]" class="btn-check" autocomplete="off" value="4"/>
                            <label class="btn btn-outline-warning " for="antwort4<?php echo $frage_i['frageId']?>"><span class="next4"><?php echo $frage_i['antwort4']?> </span> </label>
                        </div>
                    </div>

            </div>


        </div>


    <?php endforeach ?>



<?php endif ?> </form>
<div class="">


    <button class="btn btn-secondary" form="VSform" id="VSform" type="submit"style="height: auto">Bestätigen</button>
</div>
