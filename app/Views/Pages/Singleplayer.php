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
            <form id="singleplayerForm" name="singleplayerForm" accept-charset="utf-8" action="javascript:void(0)" method="post">
                <input type="hidden" class="txt_csrfname" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                <input type="hidden" id="frageId" name="frageId"  value="<?php echo $frage['frageId']?>"/>
                <input type="hidden" id="score" name="score" value="">
                <div class="row pt-4">
                    <div class="col">

                        <input type="radio" id="antwort1" name="antwort" class="btn-check" autocomplete="off" required value="1"/>
                        <label class="btn btn-outline-warning " style="width: 80%; height:120%" for="antwort1"><span class="next1"> <?php echo $frage['antwort1']?> </span> </label>
                    </div>

                    <div class="col">


                        <input type="radio" id="antwort2" name="antwort" class="btn-check" autocomplete="off" required value="2"/>
                        <label class="btn btn-outline-warning " style="width: 80%; height:120%" for="antwort2" ><span class="next2"><?php echo $frage['antwort2']?></span></label>
                    </div>
                </div>
                <div class="row pt-4">
                    <div class="col">

                        <input type="radio" id="antwort3"  name="antwort"  class="btn-check" autocomplete="off" value="3"/>
                        <label class="btn btn-outline-warning " style="width: 80%; height:120%" for="antwort3"><span class="next3"> <?php echo $frage['antwort3']?></span></label>
                    </div>

                    <div class="col">


                        <input type="radio" id="antwort4" name="antwort" class="btn-check" autocomplete="off" value="4"/>
                        <label class="btn btn-outline-warning " style="width: 80%; height:120%" for="antwort4"><span class="next4"><?php echo $frage['antwort4']?> </span> </label>
                    </div>
                </div>

                </div>

                <div class="pt-5">


                <button class="btn btn-secondary" id="send_form" type="submit"style="height: auto">Bestätigen</button>
            </div>
                        </form>
            <?php if(!isset($_SESSION['joker'])): ?>

            <a class="btn btn-secondary bg-light text-black-50 mt-4" id="show">Hinweis</a>

            <div id="hinweis" class="d-none row pt-4">

                <?php echo $frage['hinweis']?>
            </div>
            <form action="joker">
                <button class="btn btn-secondary bg-light text-black-50 mt-4" id="show2">Hinweis</button>

                <div id="joker" class="d-none row pt-4">

                    <?php echo $frage['Joker50502']?>
                    <?php echo $frage['Joker50501']?>

                </div>
            </form>
            <?php endif;?>

                        </div>
    <?php endif; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>
<script src="/js/SP.js"></script