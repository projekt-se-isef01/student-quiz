<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <script src="/js/menu.js"></script>

<body>



<table>
    <tr>

        <td class="t0">

        </td>
        <td class="t2">
            <?php if(isset($title))?>
            <?= $title ?>
        </td>
        <td class="t1">
            <form method="POST" action="logmenu">

                <input type="submit" name="button10"
                       class="button" value="zurück" />
            </form>


        </td>

    </tr>
</table>