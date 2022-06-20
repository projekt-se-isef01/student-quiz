
<section class="intro">
    <div class="mask d-flex align-items-center h-100">
        <div class="container " >
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">

                <div class="card" style="border-radius: 1rem;margin-top: 2rem; height: 800px;border-width:  0.5rem; border-style: double;border-color: black">
                    <div class="card-body px-5 py-0 text-center">

                        <div class="my-md-5 pb-5">



                            <svg height="110" width="90" viewBox="0 0 110 120">
                                <polygon points="50 3,100 28,100 75, 50 100,3 75,3 25" fill="#677cb1" /> <text x=50 y=65 font-size="45" fill="white" text-anchor="middle">?</text>
                            </svg>
                            <h1 class="fw-bold mb-0 my-5">Registriere dich</h1>
                            <br>
                            <?php if(isset($validation)):?>
                                <div class="alert alert-warning">
                                    <?= $validation->listErrors() ?>
                                </div>
                            <?php endif;?>
                            <form id=formreg" name="formreg" action="<?php echo base_url(); ?>/Registrierung/registrieren" method="post">
                                <?= csrf_field() ?>
                                <div class="form-outline mb-4">
                                    <input type="text" name="name" placeholder="Name" value="" class="form-control  form-control-lg" style="width: 100%" />
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="password" name="password" placeholder="Passwort" class="form-control form-control-lg" style="width: 100%" />
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="password" name="confirmpassword" placeholder="Passwort bestätigen" class="form-control form-control-lg" style="width: 100%" />
                                </div>
                                <br>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-secondary" style="width: 100%; height: auto">Registrieren</button>
                                </div>
                            </form>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>