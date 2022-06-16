
<div class="container w-50 mb-lg-3">
    <br>
    <h3 class="text-center "> Wähle Spiel oder <a href="<?= site_url("/VS/addGame")?>">erstelle neues </a> </h3>
    <?php if (! empty($spiel) && is_array($spiel)): ?>
<br>
<table id="Multispiel" class="table mt-xl-5 table-striped">
    <thead>
    <tr>
        <th ></th>
    </tr>
    </thead>

    <tbody>
        <?php foreach ($spiel as $spiel_item): ?>

    <tr>
            <th>
                <a href="<?= site_url("/VS/".$spiel_item['gameId'])?>">
                        <?= esc($spiel_item['gameName']) ?>
                    </a>

            </th>

        </tr>

        <?php endforeach ?>
        </tbody>
        </table>

    <?php endif ?>
    <?php if(session()->getFlashdata('msg1')):?>
    <div class="alert alert-warning">
        <?= session()->getFlashdata('msg1') ?>
    </div>
    <?php endif ?>

</div>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css"/>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript"  src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>

<script>

    $(document).ready( function () {
        $('#Multispiel').DataTable();


    } );</script>>