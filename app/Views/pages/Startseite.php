<?= $this->extend('layouts/Default_Layout') ?>

<?= $this->section('content') ?>

<!-- Content Bereich -->
<section>
    <h2>Willkommen an der Space University!</h2>

    <div class="container custom-container">
        <form class="custom-form" action="<?php echo base_url();?>login" method="post">
            <h3 class="text-center">Anmeldung</h3>
            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="E-Mail" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Passwort" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Anmelden</button>
        </form>
    </div>
    <p> </p>
    <h3>Neu hier?</h3>
    <p> Gelange zur <a href="#"> Registrierung </a> </p>
</section>


<?= $this->endSection() ?>
