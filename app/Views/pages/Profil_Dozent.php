<?= $this->extend('layouts/Menu_Layout_Dozent') ?>

<?= $this->section('content') ?>
<section class="py-4">
    <div class="container">
        <div class="card custom-profile-card">
            <div class="card-header bg-dark text-white">
                <h2>Profil - Prof. Dr. Andreas Becker</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div>

                    </div>
                    <div class="col-md-8">
                        <h3>Persönliche Informationen</h3>
                        <p><strong>Name:</strong> Prof. Dr. Andreas Becker</p>
                        <p><strong>E-Mail:</strong> Becker@space-uni.de</p>
                        <p><strong>Fächer:</strong> Informatik, BWL </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .custom-profile-card {
        background-color: #343a40;
        color: #ffffff;
    }

    .custom-profile-card .card-header {
        border-bottom: 2px solid #ffffff;
    }

    .custom-profile-card h2 {
        margin-bottom: 0;
    }

    .custom-profile-card .card-body {
        padding: 30px;
    }

    .custom-profile-card img {
        width: 150px;
        height: 150px;
    }

    .custom-profile-card h3 {
        margin-top: 20px;
        margin-bottom: 10px;
    }

    .custom-profile-card p {
        margin-bottom: 5px;
    }
</style>

<?= $this->endSection() ?>
