<?= $this->extend('layouts/Menu_Layout_Dozent') ?>

<?= $this->section('content') ?>

<!-- Content Bereich -->
<section>
    <div class="welcome-message">
        <p><?= session('success') ?></p>
    </div>
    <h2> Ihre Mitteilungen</h2>
    <div class="news-feed">
        <!-- Andere Mitteilungen hier -->
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
        <div class="news-item">
            <form action="<?= base_url('Dozent/addNews') ?>" method="post">
                <h2>Neue Mitteilung</h2>
                <label for="title">Titel:</label><br>
                <input type="text" id="title" name="title"><br>
                <label for="content">Inhalt:</label><br>
                <textarea id="content" name="content"></textarea><br>
                <input type="submit" value="Nachricht erstellen">
            </form>
        </div>
</section>


<?= $this->endSection() ?>
