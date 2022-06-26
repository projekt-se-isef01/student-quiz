<?php if (!empty($student)):?>
<br>
<div class="container d-flex align-items-center justify-content-center">

<svg height="110" width="90" viewBox="0 0 110 120">

    <polygon points="50 3,100 28,100 75, 50 100,3 75,3 25" fill="#677cb1" /> <text x=50 y=65 font-size="45" fill="white" text-anchor="middle">?</text>
</svg>
</div>
<div class="container d-flex align-items-center justify-content-center">

    <table class="table w-50 mt-xl-5 table-striped">
        <thead>
        <tr>
            <th class="w-50" ></th>
            <th class="w-50"></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th >Benutzername</th>
            <th> <?= esc($student['name'])?> </th>

        </tr>
        <tr>
            <th >gespielte Spiele gesamt</th>
            <th>  <?=  esc($student['vsGamesGesamt'])+esc($student['singleGamesGesamt'])?></th>

        </tr>
        <tr>
        <tr>
            <th >Gesamte Spielpunktzahl</th>
            <th> <?= esc($student['score'])?></th>

        </tr>
        <tr>
            <th >gespielte Einzelspieler Spiele</th>
            <th> <?= esc($student['singleGamesGesamt'])?></th>

        </tr>
        <tr>
            <th >gespielte Mehrspieler Spiele - konkurrierend</th>
            <th> <?= esc($student['vsGamesGesamt'])?></th>

        </tr>
        <tr>
            <th >gewonnene Mehrspieler Spiele - konkurrierend</th>
            <th>  <?= esc($student['vsGamesWin'])?></th>

        </tr>
        <tr>
            <th >verlorene Mehrspieler Spiele - konkurrierend</th>
            <th>  <?= esc($student['vsGamesLose'])?></th>

        </tr>
        <tr>
            <th >uneentschiedene Mehrspieler Spiele - konkurrierend</th>
            <th>  <?=  esc($student['vsGamesGesamt'])-esc($student['vsGamesLose'])-esc($student['vsGamesWin'])?></th>

        </tr>
        <tr>
            <th >Account erstellt am</th>
            <th>    <?= esc($student['date'])?></th>

        </tr>
        <tr>
            <th></th>
            <th >
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Account löschen
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title " id="exampleModalLabel">Account</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                Möchtest du deinen Account wirklich löschen?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <a class="btn btn-danger" href="<?= site_url('Account/loeschen')?>">Löschen</a>
                            </div>
                        </div>
                    </div>
                </div>
            </th>

        </tr>
        </tbody>
    </table>




<?php endif;?>
</div>
<br>
<div class="row g-2 w-25">
    <!-- Button trigger modal -->

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>