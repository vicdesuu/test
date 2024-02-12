<?= $this->extend('layouts/Menu_Layout_Dozent') ?>

<?= $this->section('content') ?>
<section class="py-4">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="mb-0">Ihre Prüfungen</h2>
            <a href="<?= base_url('create_prüfung') ?>" class="btn btn-dark btn-sm">
                <i class="fas fa-plus"></i>
            </a>
        </div>

        <div class="table-responsive">
            <table id="prüfung-table" class="table table-hover white-border">
                <thead class="thead-dark white-border">
                <tr>
                    <th class="white-border">Name</th>
                    <th class="white-border">Prüfungsform</th>
                    <th class="white-border">Prüfungsdatum</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($prüfungen as $prüfung): ?>
                    <tr>
                        <td><?= $prüfung['kurs_name'] ?></td>
                        <td><?= $prüfung['prüfungsform'] ?></td>
                        <td><?= $prüfung['prüfungsdatum'] ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<style>
    .white-border th, .white-border td {
        border: 1px solid #4d4545; /* Weiße Umrandung für alle Zellen */
    }
    .white-border th {
        border-bottom: 2px solid #524e4e; /* Weiße Unterrand für die Kopfzeile */
    }
</style>

<?= $this->endSection() ?>
