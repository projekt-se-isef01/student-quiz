<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css" rel="stylesheet" />
<style>

</style>


    <title>Registrierung</title>
    </head>
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-5">
                <h2>Account registrieren</h2>

                <form action=<?php base_url()?>"/Registrierung/registrieren"  method="post">
                    <?= csrf_field() ?>
                    <div class="form-group mb-3">
                        <input type="text" name="name"required id="name"  placeholder="name" value="" class="form-control" />

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
