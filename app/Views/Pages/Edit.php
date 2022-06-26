<?php if(session()->getFlashdata('edit')):?>

    <div class="container  d-flex align-items-center justify-content-center" style="height:80vh">
        <div class="container-fluid py-5 p alert alert-warning ">
            <div class="text-center display-5 " >
                <?= session()->getFlashdata('edit') ?>
            </div>
        </div>
    </div>
<?php endif;?>
       <?php if(isset($_SESSION['validation'])):?>

        <br>
            <div class="alert text-center alert-warning">
                <?= $_SESSION['validation'] ?>
            </div>

<?php endif;?>

<div class="container d-flex ">
    <?php if(isset($frage) ):?>

<br>
        <form id="editForm" action="<?php echo base_url();?>/Fragenkatalog/updateFrage" method="post">
           <?= csrf_field() ?>
            <input type="hidden" name="frageId" value="<?php echo $frage['frageId']?>"/>
            <div class="text-center p-2">
            <button type="submit" class="btn btn-secondary" >Speichern</button>
    </div>

            <div class="justify-content-center align-items-center row g-2">
            <div class="col-8 mx-auto">
                <div class="form-floating">

                    <textarea type="text" id="frage" name="frage" class="form-control text-center" placeholder="" style="height:100px " ><?php echo $frage['frage']?></textarea>
                    <label for="floatingInputGrid" class="text-center">Frage</label>

                </div>
            </div>
            <div class="row g-2 ">
                <div class="col-6">
                    <div class="form-floating">

                        <textarea type="text" id="antwort1" name="antwort1" class=" text-center form-control" placeholder="" style="height: 100px"  value=""><?php echo $frage['antwort1']?></textarea>
                        <label for="floatingInputGrid">Antwort 1</label>

                    </div>
                </div>

                <div class="col-6">
                    <div class="form-floating">

                        <textarea type="text" id="antwort2" name="antwort2" class="text-center text-center  form-control" placeholder=""  style="height: 100px" value=""><?php echo $frage['antwort2']?></textarea>
                        <label for="floatingInputGrid">Antwort 2</label>

                    </div>
                </div>
                <div class="col-6">
                    <div class="form-floating">

                        <textarea type="text" id="antwort3"  name="antwort3" class=" text-center form-control" placeholder=""  style="height: 100px" value=""><?php echo $frage['antwort3']?></textarea>
                        <label for="floatingInputGrid">Antwort 3</label>

                    </div>
                </div>
                <div class="col-6">
                    <div class="form-floating">

                        <textarea type="text" id="antwort4" name="antwort4" class=" text-center form-control" placeholder=""style="height: 100px" value=""><?php echo $frage['antwort4']?></textarea>
                        <label for="floatingInputGrid"> Antwort 4</label>

                    </div>
                </div>

            </div>
            <div class="row justify-content-center align-items-center g-2">
                <div class="col-6 mx-auto">

                    <label for="antwortLoesung"> Lösung</label>
                   <?php echo form_dropdown('antwortLoesung', [
                           '1'  => 'Antwort 1',
                            '2'    => 'Antwort 2',
                            '3'  => 'Antwort 3',
                            '4' => 'Antwort 4',]
                       ,$frage['antwortLoesung'],'class="form-select"');?>
                </div>
                    <div class="col-6 mx-auto">
                        <div class="form-floating">

                            <textarea type="text" placeholder="" id="hinweis" name="hinweis" class="form-control text-center"  style="height: 100px" value=""><?php echo $frage['hinweis']?></textarea>
                            <label for="floatingInputGrid" class="text-center">Hinweis</label>

                        </div>
                    </div>
                </div>


                <div class="row g-2 justify-content-center">
                    <div class="col-3">
                        <label for="Joker50501">50:50 Joker</label>
                         <?php echo form_dropdown('Joker50501', [
                                 null=>'',
                                    '1'  => 'Antwort 1',
                                    '2'    => 'Antwort 2',
                                    '3'  => 'Antwort 3',
                                    '4' => 'Antwort 4',]
                                ,$frage['Joker50501'],'class="form-select"');?>
                        </div>


                    <div class="col-3">
                        <label for="Joker50502">50:50 Joker</label>
                        <?php echo form_dropdown('Joker50502', [
                                null=>'',
                                '1'  => 'Antwort 1',
                                '2'    => 'Antwort 2',
                                '3'  => 'Antwort 3',
                                '4' => 'Antwort 4',]
                            ,$frage['Joker50502'],'class="form-select"');?>
                    </div>
                        </div>
                </div>
    </div>
                <div class="">

            </div
        </form>
    <br>
                </div>
<?php endif;?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>
<script src="/js/editValidation.js"></script>