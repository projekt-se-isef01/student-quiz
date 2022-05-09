<div class="container">
<?php if (! empty($fragenkatalog)):?>




<h2><?= esc($fragenkatalog['fragenkatalogbezeichnung']) ?></h2>

<?php endif;?>
    <?php if(!empty($frage)): ?>
        <?php foreach($frage as $frage): ?>




            <div class="container">
                <form>
                <div class="row g-2">
                    <div class="col-6">
                        <div class="form-floating">

                            <textarea  class="form-control"  style="height: 100px" value="<?= esc($frage['frage'])?>" ;
">





                            </textarea>
                            <label for="floatingInputGrid">Antwort 1</label>

                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating">

                            <textarea type="email"   class="form-control" placeholder="name@example.com"  style="height: 100px" value=""></textarea>
                            <label for="floatingInputGrid">Antwort 2</label>

                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating">

                            <textarea type="email"   class="form-control" placeholder="name@example.com"  style="height: 100px" value=""></textarea>
                            <label for="floatingInputGrid">Antwort 3</label>

                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating">

                            <textarea type="email"   class="form-control" placeholder="name@example.com"  style="height: 100px" value=""></textarea>
                            <label for="floatingInputGrid">Antwort 4</label>

                        </div>
                    </div>

                </div>
    </form>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>


    <!-- Pagination -->
    <div class="d-flex justify-content-end">
        <?php if (!empty($pager)):?>

        <?= $pager->links() ?>
        <?php endif ?>

</div>
</div>