<link rel="stylesheet" type="text/css" href="/css/load2.css">

<body id="ergebnis">

<div class="container d-flex align-items-center justify-content-center" style="height:50vh">
   <div class="row">
    <?php if(!session()->get('score')):?>
    <div class="p-5 mb-4 bg-light  rounded-3">
        <div class="container-fluid py-5 ">
            <h1 class="display-5 fw-bold text-center">
0 Punkte erreicht            </h1>

        </div>
    </div>
    <?php endif;?>


    <?php if(session()->get('score')):?>

    <div class="p-5 mb-4 bg-light  rounded-3">
        <div class="container-fluid py-5 ">
            <h1 class="display-5 fw-bold text-center">
                <?= session()->get('score') ?>
                <?php if(session()->get('score') ==1): ?>
                Punkt erreicht
                <?php endif;?>
                <?php if( session()->get('score') >1 or session()->get('score') ==0) : ?>
                Punkt erreicht
                <?php endif;?>
            </h1>

        </div>
    </div>

</div>
<?php endif;?>

</body><div class="row"
<div class="" id="load">
    <div class="loader-circle-9">Warte auf Mitspieler
        <span></span>
    </div>
</div>
</div><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="/js/ergebnis.js" >


</script>
