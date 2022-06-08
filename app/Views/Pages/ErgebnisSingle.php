<div class="container d-flex align-items-center justify-content-center" style="height:80vh">
    <?php if (!empty($score) ):?>

        <div class="p-5 mb-4 bg-light  rounded-3">
            <div class="container-fluid py-5 ">
                <h1 class="display-5 fw-bold text-center">
                    <?php if (esc($score)>1 ):?>

                    <?= esc($score) ?> Fragen richtig beantwortet
                    <?php endif;?>
                </h1>
                <h1 class="display-5 fw-bold text-center">
                    <?php if (esc($score)<=1 ):?>

                        <?= esc($score) ?> Frage richtig beantwortet
                    <?php endif;?>
                </h1>

            </div>
        </div>


    <?php endif;?>

</div>