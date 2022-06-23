<div class="container">

    <div class="timer position-fixed display-2 mr-0" style="margin-top: 5rem; margin-right: 5rem;right:0"   ></div>
<div>
    <img src="/img/832.svg" class="position-fixed  display-2 mr-0" style=" margin-right: 5rem;right:0">
</div>
</div>
<div class="container-sm text-center">


    <div class=" pt-4">
    <button class="btn btn-secondary" form="VSform" type="submit"style="height: auto">Bestätigen</button>
</div>


    <?php if (! empty($frage) && is_array($frage)): ?>

    <?php foreach ($frage as $frage_i): ?>

<form id="VSform" name="VSform" accept-charset="utf-8" action="<?php echo base_url(); ?>/VS/endGame/<?=session()->get('gameId')?> " method="post">
    <?= csrf_field() ?>

            <br>
            <div class="row pt-4 g-2">
                <div class="col-8 mx-auto">
                    <div class="form-floating">

                        <input type="text" id="frage" readonly name="frage"  class="form-control text-center" placeholder="" style="height:100px " value="<?php echo $frage_i['frage'] ?>"/>
                        <label for="floatingInputGrid" class="text-center"><span class="nextf"> Frage</span></label>

                    </div>
                </div>
                <br>
                <?= \Config\Services::validation()->listErrors(); ?> <span class="d-none alert alert-success mb-3" id="res_message"></span>
                <input type="hidden" id="<?php echo $frage_i['frageId']?>" name="frageId[]"  value="<?php echo $frage_i['frageId']?>"/>
                    <div class="row pt-4 p-2">
                        <div class="col">

                            <input checked type="radio" id="antwort1<?php echo $frage_i['frageId']?>" name="antwort[<?php echo $frage_i['frageId']?>]" class="btn-check" autocomplete="off" required value="1"/>
                            <label class="btn btn-outline-warning " style="width: 80%; height:120%" for="antwort1<?php echo $frage_i['frageId']?>"><span class="next1"> <?php echo $frage_i['antwort1']?> </span> </label>
                        </div>

                        <div class="col">


                            <input type="radio" id="antwort2<?php echo $frage_i['frageId']?>" name="antwort[<?php echo $frage_i['frageId']?>]" class="btn-check" autocomplete="off" value="2"/>
                            <label class="btn btn-outline-warning " style="width: 80%; height:120%" for="antwort2<?php echo $frage_i['frageId']?>" ><span class="next2"><?php echo $frage_i['antwort2']?></span></label>
                        </div>
                    </div>
                    <div class="row pt-4 ">
                        <div class="col">

                            <input type="radio" id="antwort3<?php echo $frage_i['frageId']?>"  name="antwort[<?php echo $frage_i['frageId']?>]"  class="btn-check" autocomplete="off" value="3"/>
                            <label class="btn btn-outline-warning " style="width: 80%; height:120%" for="antwort3<?php echo $frage_i['frageId']?>"><span class="next3"> <?php echo $frage_i['antwort3']?></span></label>
                        </div>

                        <div class="col">


                            <input type="radio" id="antwort4<?php echo $frage_i['frageId']?>" name="antwort[<?php echo $frage_i['frageId']?>]" class="btn-check" autocomplete="off" value="4"/>
                            <label class="btn btn-outline-warning" style="width: 80%; height:120%" for="antwort4<?php echo $frage_i['frageId']?>"><span class="next4"><?php echo $frage_i['antwort4']?> </span> </label>
                        </div>
                    </div>
            </div>




<?php endforeach ?>



<?php endif ?>


</form>


<div class="pb-5 text-center pt-4">


    <button class="btn btn-secondary " form="VSform" id="VSform" type="submit"style="height: auto">Bestätigen</button>
</div>


</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>

   <script>


       function createCookie(name, value, days) {
           if (days) {
               var date = new Date();
               date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
               var expires = "; expires=" + date.toGMTString();
           } else var expires = "";
           document.cookie = name + "=" + value  +";" +expires + "; path=/"+";";
       }

       function readCookie(name) {
           var nameEQ = name + "=";
           var ca = document.cookie.split(';');
           for (var i = 0; i < ca.length; i++) {
               var c = ca[i];
               while (c.charAt(0) == ' ') c = c.substring(1, c.length);
               if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
           }
           return null;
       }

       function eraseCookie(name) {
           createCookie(name, "", -1);
       }

       $(function () {

           var count = 10;
           if (readCookie("timer") !== undefined && readCookie("timer") !==null) count = parseInt(readCookie("timer"));

           var counter = setInterval(timer, 1000);

           function timer() {
               createCookie("timer", count, 365);
               count--;
               if (count <= 0) {
                   clearInterval(counter);

                   eraseCookie("timer");
                   liftOff();
                   return;
               }
               console.log(count);
               console.log(readCookie("timer"));
               $('.timer').html(count);
           }
       });
    function liftOff() {
        $("#VSform").submit();
    }
    </script>
