
<div class="container w-50 mb-lg-3"">
<br>
    <h3 class="text-center"> Wähle Fragenkatalog</h3>
<br>
    <?php if (! empty($katalog) && is_array($katalog)): ?>
    <table id="SP" class="table  mt-xl-5 table-striped">
        <thead>
        <tr>
            <th ></th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($katalog as $katalog_item): ?>
        <tr>
            <th>

                <a href="/Singleplayer/<?= esc($katalog_item['fragenkatalogbezeichnung']) ?>">
                    <?= esc($katalog_item['fragenkatalogbezeichnung']) ?>
                </a>
            </th>

        </tr>



        <?php endforeach ?>
        </tbody>
    </table>
    <?php endif ?>

</div>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css"/>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript"  src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>

<script>

    $(document).ready( function () {
        $('#SP').DataTable();


    } );</script>>