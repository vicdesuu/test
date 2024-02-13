<?= $this->extend('layouts/Menu_Layout_Dozent') ?>

<?= $this->section('content') ?>
<section class="py-4">
    <p><?= session('success') ?></p>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="mb-0">Ihre Kurse</h2>
            <a href="<?= base_url('create_kurs') ?>" class="btn btn-dark btn-sm">
                <i class="fas fa-plus"></i>
            </a>
        </div>

        <div class="table-responsive">
            <table id="course-table" class="table table-hover white-border">
                <thead class="thead-dark white-border">
                <tr>
                    <th class="white-border">Name</th>
                    <th class="white-border">Beschreibung</th>
                    <th class="white-border">Kreditpunkte</th>
                    <th class="white-border">Studiengänge</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($kurse as $kurs): ?>
                    <tr>
                        <td><?= $kurs['name'] ?></td>
                        <td><?= $kurs['description'] ?></td>
                        <td><?= $kurs['credit_points'] ?></td>
                        <td>
                            <?php
                            $studiengänge = explode(",", $kurs['studiengang']);
                            echo implode(", ", $studiengänge);
                            ?>
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
</style>

<?= $this->endSection() ?>
