
<div class="container d-flex align-items-center justify-content-center" style="height:80vh">
    <?php if (isset($erg) ):?>







    <div class="p-5 mb-4 bg-light  rounded-3">
        <div class="container-fluid py-5 ">
            <h1 class="display-5 fw-bold text-center">
                <?php if(session()->getFlashdata('score')):?>
                <?= session()->getFlashdata('score') ?>

                <?php endif;?><br>
                <?php echo $erg['studentscore'] ?> Punkte
            </h1>

        </div>
    </div>
</div>
<?php endif;?>
<div class="container d-flex align-items-center justify-content-center" style="height:80vh">
    <?php if (isset($erggeg) ):?>







    <div class="p-5 mb-4 bg-light  rounded-3">
        <div class="container-fluid py-5 ">
            <h1 class="display-5 fw-bold text-center">
                <?php if(session()->getFlashdata('score')):?>
                    <?= session()->getFlashdata('score') ?>

                <?php endif;?><br>
                <?php echo $erggeg['gegnerscore'] ?> Punkte
            </h1>

        </div>
    </div>
</div>
<?php endif;?>
