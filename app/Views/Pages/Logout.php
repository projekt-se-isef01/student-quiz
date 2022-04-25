<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Logout</title>
    <script src="/js/menu.js"></script>



<script>
    history.pushState(null, null, document.title);
    window.addEventListener('popstate', function () {
    history.pushState(null, null, document.title);
    });
</script>

</head>
<body>

Logout erfolgreich. Sie können dieses Fenster jetzt schließen.

</body>
</html>