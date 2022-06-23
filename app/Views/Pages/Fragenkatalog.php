<br>
<div class="container d-flex align-items-center justify-content-center">

    <svg height="110" width="90" viewBox="0 0 110 120">

        <polygon points="50 3,100 28,100 75, 50 100,3 75,3 25" fill="#677cb1" /> <text x=50 y=65 font-size="45" fill="white" text-anchor="middle">?</text>
    </svg>
</div>
    <?php if(session()->getFlashdata('fk')):?>

    <div class="container  d-flex align-items-center justify-content-center" style="height:80vh">
        <div class="container-fluid py-5 p alert alert-warning ">
            <div class="text-center display-5 " >
                <?= session()->getFlashdata('fk') ?>
            </div>
        </div>
    </div>

<?php endif;?>
        <div class="container mt-4 table-responsive">

        <div class="d-flex ">
        <?php if (isset($fragenkatalog) & !empty($fragenkatalog)):?>
        <a class="btn btn-sm btn-info" href="<?= site_url('Fragenkatalog/addFrage/'.$fragenkatalog['fragenkatalogbezeichnung']) ?>">Add</a>

        <?php endif;?>
    </div>
<br>

    <table id="Fragen" class="display " style="width: 100%">

        <thead>
        <tr>

            <th>Aktion</th>
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
        <?php if (! empty($frage)&& is_array($frage)):?>

        <tbody>
        <?php foreach($frage as $frage): ?>

        <tr>
            <td>
                <a class="btn btn-sm btn-success " href="<?= site_url('Fragenkatalog/edit/' .$frage['frageId']) ?>">Bearbeiten</a>

                <a class="btn btn-sm btn-danger" href="<?= site_url('Fragenkatalog/loeschen/'.$frage['frageId']) ?>">Löschen</a>

            </td>
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
                <?=esc($frage['Joker50501'])?>
            </td>

    <td>

        <?=esc($frage['Joker50502'])?>

    </td>

        </tr>

<?php endforeach; ?>
    <?php endif; ?>

               </tbody>
    </table>
            </div>


    <?php if(session()->getFlashdata('del')):?>
    <div class="container  d-flex align-items-center justify-content-center" style="height:80vh">
        <div class="container-fluid py-5 p alert alert-warning ">

            <div class="text-center display-5 ">
                <?= session()->getFlashdata('del') ?>
            </div></div>
        <?php endif;?>
    </div>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css"/>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript"  src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>

<script>

    $(document).ready( function () {
        $('#Fragen').DataTable();


} );</script>>