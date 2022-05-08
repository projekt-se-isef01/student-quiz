<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/style2.css">
    <?php if(isset($title))?>
    <title>
    <?= $title ?>

    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/input.css">    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <script src="/js/menu.js"></script>

<body>
<?php if(!isset($_SESSION['isLoggedIn'])): ?>

    <nav class="head navbar navbar-light bg-dark">
    <div class=" container-fluid  my-md-2">
        <svg  onclick="openNav()" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-box" viewBox="0 0 16 16">
            <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5 8.186 1.113zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
        </svg>
        <div class="ml-lg-5">
            <?php if(isset($title))?>
             <?= $title ?>
        </div>

        <div class="mr-auto">

          <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
         </svg>
        </div>
    </div>
    </nav>
<?php endif;?>

<?php if(isset($_SESSION['isLoggedIn'])): ?>
<nav class="head navbar navbar-light bg-dark">
    <div class=" container-fluid  my-md-2">

        <svg  onclick="openNav()" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-box" viewBox="0 0 16 16">
            <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5 8.186 1.113zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
        </svg>
        <div class="navbar-nav">
            <?php if(isset($title))?>
            <?= $title ?>
        </div>
<span>


            <input  type="submit" name="button1"
                    class="btn btn bg-light" value=" Logout"
            />

            <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="white" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg>
</span>


</nav>
<?php endif;?>





<div id="left"></div>
<div id="right"></div>
<div id="top"></div>
<div id="bottom"></div>