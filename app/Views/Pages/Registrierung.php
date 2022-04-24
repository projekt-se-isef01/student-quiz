<html>
<head>
    <link rel="stylesheet" href="css/style2.css">
    <title>Registrierung</title>
    <script src="/js/menu.js"></script>

</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-5">
              <?php
              var_dump($db = \Config\Database::connect())?>;

                <?php if(isset($validation)):?>
                <div class="alert alert-warning">
                   <?= $validation->listErrors() ?>
                </div>
                <?php endif;?>
                <form action="<?php echo base_url(); ?>/SignupController/store" method="post">
                    <div class="form-group mb-3">
                        <input type="text" name="benutzername" placeholder="Benutzername" value="" class="form-control" />
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="password" placeholder="Password" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-control" >
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark">Registrieren</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



</body>
</html>