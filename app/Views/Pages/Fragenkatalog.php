<div class="container" xmlns="http://www.w3.org/1999/html">
<?php if (! empty($frage)&& is_array($frage)):?>
    <?php foreach($frage as $frage): ?>
    <table id="Fragen" class="display" style="width:100%">
        <h2 class="text-center"><?= esc($frage['fragenkatalogbezeichnung']) ?></h2>
            <div class="container">
                    <input type="text" hidden="hidden" name="frageId">
                    <div class="row g-2">
                        <div class="col-8 mx-auto">
                            <div class="form-floating">

                                <input type="text" name="frage1" class="form-control text-center" readonly style="height:100px " value="<?php echo set_value('frage',$frage['frage'])?>"/>
                                <label for="floatingInputGrid" class="text-center">Frage</label>

                            </div>
                        </div>
                <div class="row g-2">
                    <div class="col-6">
                        <div class="form-floating">

                            <input type="text" name="antwort1" class="form-control" style="height: 100px" readonly value="<?php echo set_value('antwort1',$frage['antwort1'])?>"/>
                            <label for="floatingInputGrid">Antwort 1</label>

                        </div>
                        </div>

                    <div class="col-6">
                        <div class="form-floating">

                        <input type="text" name="antwort2" class="form-control"  readonly style="height: 100px" value="<?php echo set_value('antwort2',$frage['antwort2'])?>"

                        />
                            <label for="floatingInputGrid">Antwort 2</label>

                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating">

                            <input type="text" name="antwort3" class="form-control" readonly  style="height: 100px" value="<?php echo set_value('antwort3',$frage['antwort3'])?>"/>
                            <label for="floatingInputGrid">Antwort 3</label>

                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating">

                            <input type="text" name="antwort4" class="form-control" style="height: 100px"readonly value="<?php echo set_value('antwort4',$frage['antwort4'])?>"/>
                            <label for="floatingInputGrid">Antwort 4</label>

                        </div>
                    </div>

                </div>
                        <div class="row g-2">
                            <div class="col-6 mx-auto">
                                <div class="form-floating">

                                    <input type="text" name="antwortLoesung" class="form-control" style="height: 100px" readonly  value="<?php echo set_value('antwortLoesung',$frage['antwortLoesung'])?>"/>
                                    <label for="floatingInputGrid">Lösung</label>

                                </div>
                            </div>
                        <div class="row g-2">
                            <div class="col-6 mx-auto">
                                <div class="form-floating">

                                    <input type="text" name="hinweis" class="form-control text-center" readonly style="height: 100px" value="<?php echo set_value('hinweis',$frage['hinweis'])?>"/>
                                    <label for="floatingInputGrid" class="text-center">Hinweis</label>

                                </div>
                            </div>
                        </div>


                            <div class="row g-2 justify-content-center ">
                            <div class="col-3">
                                <div class="form-floating">

                                    <input type="text" name="5050Joker1" class="form-control" style="height: 100px" readonly  value="<?php echo set_value('5050Joker1',$frage['5050Joker1'])?>"/>
                                    <label for="floatingInputGrid">50:50 Joker</label>

                                </div>
                            </div>

                            <div class="col-3">
                                <div class="form-floating">

                                    <input type="text" name="5050Joker2" class="form-control" placeholder="name@example.com" readonly style="height: 100px" value="<?php echo set_value('5050Joker2',$frage['5050Joker2'])?>"

                                    />
                                    <label for="floatingInputGrid">50:50 Joker</label>

                                </div>
                                <a class="btn btn-sm btn-info" href="<?= site_url('Fragenkatalog/edit/'.$frage['frageId']) ?>">Edit</a>
                                <a class="btn btn-sm btn-info" href="<?= site_url('Fragenkatalog/add') ?>">Add</a>

                            </div>
                                </table>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>



</div>
</div>
            </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>$(document).ready( function () {
$('#Fragen').DataTable();
} );</script>