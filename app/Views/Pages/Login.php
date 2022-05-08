    <section class="intro">
    <div class="mask d-flex align-items-center h-100">
        <div class="container " >
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card" style="border-radius: 1rem;margin-top: 2rem; height: 750px;border-width:  0.5rem; border-style: double;border-color: black">
                        <div class="card-body p-5 text-center">

                            <div class="my-md-5 pb-5">



                                <svg height="110" width="90" viewBox="0 0 110 120">
                                    <polygon points="50 3,100 28,100 75, 50 100,3 75,3 25" fill="#677cb1" /> <text x=50 y=65 font-size="45" fill="white" text-anchor="middle">?</text>
                                </svg>
                                <h1 class="fw-bold mb-0 my-5">Login</h1>
                                <br>
                                <?php if(session()->getFlashdata('msg')):?>
                                    <div class="alert alert-warning">
                                        <?= session()->getFlashdata('msg') ?>
                                    </div>
                                <?php endif;?>
                                <form  action="<?php echo base_url(); ?>/Login/login" method="post">
                                    <?= csrf_field() ?>
                                    <div class="form-outline mb-4">
                                        <input type="text" name="name" placeholder="Name" value=""  class="form-control form-control-lg"  style="width: 100%" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" name="password" placeholder="Passwort" value="" class="form-control form-control-lg" style="width: 100%" />
                                    </div>
                                    <div class="d-grid">


                                        <button class="btn btn-secondary" type="submit"style="height: auto">Login</button>
                                    </div>
                                </form>
                            </div>

                            <div>
                                <p class="mb-0">Noch nicht registriert? <a href="registrierung" class="text-body fw-bold"><br>Zur Registrierung</a></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
    <nav class="navbar navbar-light navbar-expand bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://www.svgrepo.com/show/13664/placeholder.svg" class="gslogo" alt="">
            </a>
            <!-- -->

            <!-- -->
            <span>
            <a href="https://twitter.com/" rel="nofollow noopener noreferrer"><i class="fab fa-twitter mx-2 gstwitterblue"></i></a>
            <a href="https://www.linkedin.com/" rel="nofollow noopener noreferrer"><i class="fab fa-linkedin mx-2 gslinkedinblue"></i></a>
        </span>
        </div>
    </nav>
</body>
</html>