<?= $this->extend('layouts/Menu_Layout') ?>

<?= $this->section('content') ?>
<!-- Content Bereich -->
<section>
    <div class="welcome-message">
        <p><?= session('success') ?></p>
    </div>
    <h2>Deine Mitteilungen</h2>
    <div class="news-feed">
        <?php foreach ($news as $item): ?>
            <div class="news-item">
                <h2><?= esc($item['title']) ?></h2>
                <p class="date"><?= date('d. F Y', strtotime($item['date_published'])) ?></p>
                <p><?= esc($item['content']) ?></p>
                <p class="creator">Verfasser: <?= esc($item['creator']) ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?= $this->endSection() ?>