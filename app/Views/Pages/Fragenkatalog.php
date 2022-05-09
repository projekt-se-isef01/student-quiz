<div class="container">
<?php if (! empty($fragenkatalog)):?>




<h2><?= esc($fragenkatalog['fragenkatalogbezeichnung']) ?></h2>
<?php endif ?>
    <?php if (! empty($frage) && is_array($frage) ): ?>

        <?php foreach ($frage as $frage_item): ?>

            <?= esc($frage_item['frage']) ?>"

        <?php endforeach ?>

    <?php endif ?>
            <div class="container">

                <div class="row g-2">
                    <div class="col-6">
                        <div class="form-floating">

                            <textarea  class="form-control"  style="height: 100px" value="">
                                <?php if (! empty($frage) ): ?>

                                <?php foreach ($frage as $frage_item): ?>

                                <?= esc($frage_item['frage']) ?>"

                                    <?php endforeach ?>

                                <?php endif ?>
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
            </div>

</div>