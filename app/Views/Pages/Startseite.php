<html>
<head>
    <link rel="stylesheet" href="css/style2.css">
</head>

<body>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="<?=base_url('/Startseite.php');?>">Home</a>
    <a href="<?=base_url('/Registrierung.php');?>">Register</a>
    <a href="<?=base_url('/Login.php');?>">Login</a>
</div>

<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
    }
</script>
</body>
</html>