<?= $this->extend('layouts/Default_Layout') ?>

<?= $this->section('content') ?>
<section>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" style="background-color: #2e1940;">
                        <h4 class="mb-0" style="color: #ffffff;">Neue Prüfung erstellen</h4>
                    </div>
                    <div class="card-body" style="background-color: #343a40; color: #ffffff;">
                        <form action="<?= base_url('prüfungen/save') ?>" method="post">
                            <div class="form-group">
                                <label for="kurs_id" style="color: #d1a3ff;">Kurs:</label>
                                <select class="form-control" id="kurs_id" name="kurs_id" required>
                                    <?php foreach ($kurse as $kurs): ?>
                                        <option value="<?= $kurs['kurs_id'] ?>"><?= $kurs['name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="prüfungsdatum" style="color: #d1a3ff;">Prüfungsdatum:</label>
                                <input type="date" class="form-control" id="prüfungsdatum" name="prüfungsdatum" required>
                            </div>
                            <div class="form-group">
                                <label for="prüfungsform" style="color: #d1a3ff;">Prüfungsform:</label>
                                <select class="form-control" id="prüfungsform" name="prüfungsform" required>
                                    <option value="Klausur">Klausur</option>
                                    <option value="E-Klausur">E-Klausur</option>
                                    <option value="Mündliche Prüfung">Mündliche Prüfung</option>
                                    <option value="Portfolio">Portfolio</option>
                                    <option value="Hausarbeit">Hausarbeit</option>
                                </select>
                            </div>
                            <!-- Verstecktes Eingabefeld für die Personen ID mit dem Wert 2 -->
                            <input type="hidden" name="person_id" value="2">
                            <button type="submit" class="btn btn-primary" style="background-color: #2e1940;">Prüfung erstellen</button>
                            <a href="<?= base_url('Prüfungen_Dozent') ?>" class="btn btn-secondary">Abbrechen</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
