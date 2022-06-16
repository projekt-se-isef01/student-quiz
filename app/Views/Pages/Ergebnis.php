
<div class="container d-flex align-items-center justify-content-center" style="height:80vh">
    <?php if(session()->getFlashdata('score')):?>

    <div class="p-5 mb-4 bg-light  rounded-3">
        <div class="container-fluid py-5 ">
            <h1 class="display-5 fw-bold text-center">
                <?= session()->getFlashdata('score') ?>
            </h1>

        </div>
    </div>
</div>
                <?php endif;?>
    <div class="container d-flex align-items-center justify-content-center" style="height:80vh">

                <?php if(session()->getFlashdata('message')):?>


    <div class="p-5 mb-4 bg-light  rounded-3">
        <div class="container-fluid py-5 ">
            <h1 class="display-5 fw-bold text-center">
                <?= session()->getFlashdata('message') ?>
            </h1>

        </div>
    </div>


    <?php endif;?>

</div>