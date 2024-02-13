<?php $this->extend('layouts/Menu_Layout') ?>

<?= $this->section('content') ?>
<section class="py-4">
    <p><?= session('success') ?></p>
    <div class="container">
        <div class="d-flex justify-content-between mb-4">
            <h2>Prüfungsauswahl</h2>
            <div>
                <div class="dropdown d-inline-block mr-2">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Studiengang wählen
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Informatik</a>
                        <a class="dropdown-item" href="#">BWL</a>
                        <a class="dropdown-item" href="#">Japanologie</a>
                    </div>
                </div>
                <a href="<?= base_url('Meine_Prüfungen') ?>" class="btn btn-dark">Meine Prüfungen</a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover white-border">
                <thead class="thead-dark white-border">
                <tr>
                    <th>Name</th>
                    <th>Prüfungsform</th>
                    <th>Datum</th>
                    <th>Anmeldung</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($prüfungen as $prüfung): ?>
                    <tr>
                        <td><?= $prüfung['kurs_name'] ?></td>
                        <td><?= $prüfung['prüfungsform'] ?></td>
                        <td><?= $prüfung['prüfungsdatum'] ?></td>
                        <td>
                            <!-- Button für die Anmeldung -->
                            <button type="button" class="btn btn-purple" data-toggle="modal" data-target="#anmeldungModal<?= $prüfung['prüfung_id'] ?>">
                                Anmelden
                            </button>

                            <!-- Anmelde-Modal -->
                            <div class="modal fade" id="anmeldungModal<?= $prüfung['prüfung_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="anmeldungModalLabel<?= $prüfung['prüfung_id'] ?>" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content bg-dark text-white">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="anmeldungModalLabel<?= $prüfung['prüfung_id'] ?>">Bestätigen</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Möchten Sie sich für die Prüfung "Möchten Sie sich für die Prüfung "<?= $prüfung['kurs_name'] ?>" anmelden?"
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Abbrechen</button>
                                            <form action="<?= base_url('anmeldenPrüfung/' . $prüfung['prüfung_id']) ?>" method="post">
                                                <button type="submit" class="btn btn-success">Anmelden</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<style>
    .white-border th, .white-border td {
        border: 1px solid #4d4545;
    }
    .white-border th {
        border-bottom: 2px solid #524e4e;
    }
    .modal-content {
        background-color: #343a40;
        color: white;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var hoverColumns = document.querySelectorAll('.hoverable-column');

        hoverColumns.forEach(function(column) {
            column.addEventListener('click', function() {
                window.location.href = column.getAttribute('data-url');
            });
        });
</script>

<?= $this->endSection() ?>
