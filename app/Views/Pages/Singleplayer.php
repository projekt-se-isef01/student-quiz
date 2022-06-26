
<?php if ( isset($frage)):
    ?>

    <div class="container pt-xl-5 text-center" xmlns="http://www.w3.org/1999/html">
            <br>
        <div class="row g-2">
            <div class="col-8 mx-auto">
                <div class="form-floating">

                    <input type="text" id="frage" name="frage" class="form-control text-center" readonly placeholder="" style="height:100px " value="<?php echo $frage['frage'] ?>"/>
                    <label for="floatingInputGrid" class="text-center"><span class="nextf"> Frage</span></label>

                </div>
            </div>
            <br>
            <?= \Config\Services::validation()->listErrors(); ?> <span class="d-none alert alert-success mb-3" id="res_message"></span>
            <form id="singleplayerForm" name="singleplayerForm" accept-charset="utf-8"  action="javascript:void(0)" method="post">
                <input type="hidden" class="txt_csrfname" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                <input type="hidden" id="frageId" name="frageId"  value="<?php echo $frage['frageId']?>"/>
                <input type="hidden" id="score" name="score" value="0">
                <div class="row pt-4">
                    <div class="col">

                        <input type="radio" id="antwort1" name="antwort" class="btn-check" autocomplete="off" required value="1"/>

                        <label class="btn text btn-outline-warning " style="color:#030201;font-weight:bold;width: 80%; height:120%" for="antwort1">Antwort 1: <span class="next1"> <?php echo $frage['antwort1']?> </span> </label>
                    </div>

                    <div class="col">

                        <input type="radio" id="antwort2" name="antwort" class="btn-check" autocomplete="off" required value="2"/>
                        <label class="btn btn-outline-warning " style="color:#030201;font-weight:bold;width: 80%; height:120%" for="antwort2" >Antwort 2: <span class="next2"><?php echo $frage['antwort2']?></span></label>
                    </div>
                </div>
                <div class="row pt-4">
                    <div class="col">

                        <input type="radio" id="antwort3"  name="antwort"  class="btn-check" autocomplete="off" value="3"/>
                        <label class="btn btn-outline-warning " style="color:#030201;font-weight:bold;width: 80%; height:120%" for="antwort3">Antwort 3: <span class="next3"> <?php echo $frage['antwort3']?></span></label>
                    </div>

                    <div class="col">


                        <input type="radio" id="antwort4" name="antwort" class="btn-check" autocomplete="off" value="4"/>
                        <label class="btn btn-outline-warning " style="color:#030201;font-weight:bold;width: 80%; height:120%" for="antwort4">Antwort 4: <span class="next4"><?php echo $frage['antwort4']?> </span> </label>
                    </div>
                </div>

                </div>

                <div class="pt-5">


                <button class="btn btn-secondary" id="send_form" type="submit"style="height: auto">Bestätigen</button>
            </div>
                        </form>
        <?php         helper('cookie');?>

            <button class="btn btn-secondary bg-light text-black-50 mt-4 mr-5" id="show">Hinweis</button>

        <button  class="btn btn-secondary bg-light text-black-50 mt-4 " id="show2">Joker</button>

    <div class="row mt-2" style="margin-left: 8rem">
            <div class="col w-50" >
                <?php if (isset($_COOKIE['hinweis'])):?>
                <?php if ($_COOKIE['hinweis']==="1"):?>
        <div id="hinweis" class="col h5 pt-4 alert alert-info" role="alert">

             <?php echo $frage['hinweis']?>
        </div>
        <?php endif; ?>
                <?php endif; ?>
    </div>
    <div class="col w-50"style="margin-right: 8rem">
        <?php if (isset($_COOKIE['joker'])):?>
        <?php if ($_COOKIE['joker']==="1"):?>
      <div id="joker1"  class="h5 alert alert-info" role="alert"">
          Antwort
            <span class="j1">
                    <?php echo $frage['Joker50502']?>
                </span>
          und
            <span class="j2">
                    <?php echo $frage['Joker50501']?>
                </span>fallen weg</div>

      </div>

<?php endif; ?>
        </div>
                        </div>
    <?php endif; ?>
<?php endif; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>
<script src="/js/SP.js"></script