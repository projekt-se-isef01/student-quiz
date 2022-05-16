<div class="container mt-4 table-responsive">
    <div class="d-flex justify-content-end">
<a class="btn btn-sm btn-info" href="<?= site_url('Fragenkatalog/add') ?>">Add</a>
    </div>

            <div class="mt3">

    <table id="Fragen" class="display table table-striped" style="width: 100%">

        <thead>
        <tr>

            <th>Frage</th>

            <th>Antwort1</th>
            <th>Antwort2</th>

            <th>Antwort3</th>
            <th>Antwort4</th>
            <th>Lösung</th>
            <th>Hinweis</th>

            <th>50:50 Joker</th>
            <th>50:50 Joker</th>

        </tr>
        </thead>
        <tbody>
        <?php if (! empty($frage)&& is_array($frage)):?>
        <?php foreach($frage as $frage): ?>
        <tr>

            <td>

                <?=esc($frage['frage'])?>

            </td>

            <td>
                <?=esc($frage['antwort1'])?>
            </td>

            <td>
                <?=esc($frage['antwort2'])?>
            </td>

            <td>
                <?=esc($frage['antwort3'])?>
            </td>

            <td>
                <?=esc($frage['antwort4'])?>
            </td>

             <td>
            <?=esc($frage['antwortLoesung'])?>
             </td>

            <td>
             <?=esc($frage['hinweis'])?>
            </td>

            <td>
                <?=esc($frage['5050Joker1'])?>
            </td>

    <td>

        <?=esc($frage['5050Joker2'])?>"

    </td>

        </tr>

<?php endforeach; ?>
    <?php endif; ?>

               </tbody>
    </table>
            </div>


</div><link rel="stylesheet"type="text/css" href="//cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css"/>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type="javascript"  src="//cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
<script>

    $(document).ready( function () {
        $.noConflict();
        var table = $('#Fragen').DataTable();{
}
} );</script>