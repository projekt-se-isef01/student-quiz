
<div class="container">

<a href="Fragenkatalogerstellung"  class="btn btn btn-info my-4">Erstelle Fragenkatalog</a>



<table id="Fragenkatalog" class="display ">

    <thead>
    <tr>

        <th>Fragenkatalog</th>
        <th></th>

    </tr>


    <tbody>
    <?php if (! empty($katalog) && is_array($katalog)): ?>

    <?php foreach ($katalog as $katalog_item): ?>
    <tr>
        <td class="fs-2">
            <?= esc($katalog_item['fragenkatalogbezeichnung']) ?>
        </td>
        <td>
            <a class="btn btn btn-success" href="/Fragenkatalog/<?= esc($katalog_item['fragenkatalogbezeichnung']) ?>">Zum Katalog</a></p>

            <p><a class="btn btn btn-danger" href="<?= site_url('/FragenkatalogÜbersicht/del/'.$katalog_item['fragenkatalogbezeichnung']) ?>">Löschen</a></p>
        </td>
    </tr>
        <?php endforeach ?>
    <?php endif ?>
    </tbody>
</table>
</div>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css"/>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript"  src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>

<script>

    $(document).ready( function () {
        $('#Fragenkatalog').DataTable();


    } );</script>>