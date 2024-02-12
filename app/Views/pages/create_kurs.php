<?= $this->extend('layouts/Default_Layout') ?>

<?= $this->section('content') ?>
<section>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" style="background-color: #2e1940;">
                        <h4 class="mb-0" style="color: #ffffff;">Neuen Kurs erstellen</h4>
                    </div>
                    <div class="card-body" style="background-color: #343a40; color: #ffffff;">
                        <form action="<?= base_url('kurse/save') ?>" method="post">
                            <div class="form-group">
                                <label for="name" style="color: #d1a3ff;">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="description" style="color: #d1a3ff;">Beschreibung:</label>
                                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="credit_points">Kreditpunkte:</label>
                                <select class="form-control" id="credit_points" name="credit_points" required>
                                    <?php for ($i = 5; $i <= 20; $i += 5): ?>
                                        <option value="<?= $i ?>"><?= $i ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="studiengang" style="color: #d1a3ff;">Studiengang:</label>
                                <input type="text" class="form-control" id="studiengang" name="studiengang" value="BWL, Informatik" >
                            </div>
                            <input type="hidden" name="person_id" value="2">
                            <button type="submit" class="btn btn-primary" style="background-color: #2e1940;">Kurs erstellen</button>
                            <a href="<?= base_url('Kurse_Dozent') ?>" class="btn btn-secondary">Abbrechen</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
