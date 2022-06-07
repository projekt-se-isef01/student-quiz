<div class="container d-flex align-items-center justify-content-center" style="height:80vh">
    <?php if(isset($score)):?>
    <div class="p-5 mb-4 bg-light  rounded-3">
        <div class="container-fluid py-5 ">
            <h1 class="display-5 fw-bold text-center"><?=esc($score)?> Fragen richtig beantwortet</h1>


        </div>
    </div>


<?php endif;?>
</div>