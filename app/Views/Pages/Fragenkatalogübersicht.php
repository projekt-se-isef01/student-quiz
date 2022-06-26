<br>
<div class="container d-flex align-items-center justify-content-center">

    <svg height="100" width="90" viewBox="0 0 110 120">

        <polygon points="50 3,100 28,100 75, 50 100,3 75,3 25" fill="#677cb1" /> <text x=50 y=65 font-size="45" fill="white" text-anchor="middle">?</text>
    </svg>
</div>
<div class="container ">

<a href="Fragenkatalogerstellung"  class="mb-xl-5 btn btn btn-info my-4">Erstelle Fragenkatalog</a>



<table id="Fragenkatalog" class="display ">

    <thead>
    <tr>

        <th>Fragenkatalog</th>
        <th></th>
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
</td><td>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#<?= esc($katalog_item['fragenkatalogbezeichnung']) ?>">
                Löschen
            </button>

            <!-- Modal -->
            <div class="modal fade" id="<?= esc($katalog_item['fragenkatalogbezeichnung']) ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title " id="exampleModalLabel">Fragenkatalog</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            Möchtest du den Fragenkatalog wirklich löschen?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <a class="btn btn-danger" href="<?= site_url('/FragenkatalogUebersicht/del/'.$katalog_item['fragenkatalogbezeichnung']) ?>">Löschen</a>
                        </div>
                    </div>
                </div>
            </div>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script>

    $(document).ready( function () {
        $('#Fragenkatalog').DataTable();


    } );</script>>