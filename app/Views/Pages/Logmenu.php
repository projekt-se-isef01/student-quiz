<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Log-Menu</title>
    <script src="/js/menu.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/style2.css">
</head>
<body>

<script>
    history.pushState(null, null, document.title);
    window.addEventListener('popstate', function () {
        history.pushState(null, null, document.title);
    });
</script>

<table>
        <tr>
            <td><a href="registrierung?page=Registrierung">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                    <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                </svg> Registrierung
            </a></td>
        </tr>
        <tr>
            <td><a href="login?page=Login">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                </svg> Login
            </a></td>
        </tr>
    </table>


</body>
</html>