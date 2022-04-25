<html>
<head>

    <title>Login</title>
    


</head>
<body>

<?php if(isset($title))?>
<h1><?= $title ?></h1>
<div class="container mt-5">
    <div class="row justify-content-md-center">
        <div class="col-5">
            <h2>Login</h2>
            <?php if(session()->getFlashdata('msg')):?>
                <div class="alert alert-warning">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php endif;?>
            <form action="<?php echo base_url(); ?>/Login/login" method="post">
                <?= csrf_field() ?>
                <div class="form-group mb-3">
                    <input type="text" name="name" placeholder="name" value="" class="form-control" />
                </div>
                <div class="form-group mb-3">
                    <input type="password" name="password" placeholder="Password" class="form-control" >
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-dark">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>