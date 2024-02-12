<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Space University</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #1a1a1a;
            color: #ffffff;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #2e1940;
            padding: 25px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            animation: fadeInDown 1s ease-out; /* Animations-Effekt */
        }

        footer {
            background-color: #2e1940;
            padding: 10px;
            text-align: center;
            animation: fadeInUp 1s ease-out; /* Animations-Effekt */
        }

        @keyframes fadeInDown {
            0% {
                opacity: 0;
                transform: translateY(-50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .navbar {
            background-color: #2e1940; /* Farbe des Headers */
            padding: 10px 0;
            width: 100%;
            display: flex;
            justify-content: center; /* Elemente in der Mitte zentrieren */
        }

        .navbar ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        .navbar ul li {
            margin-right: 20px;
        }

        .navbar ul li a {
            color: rgba(209, 163, 255, 0.6);; /* Standardmäßig etwas ausgegraut */
            text-decoration: none;
            font-size: 18px;
        }

        .navbar ul li:hover a {
            color: #d1a3ff; /* Farbe der Headerschrift beim Hover */
        }

        section {
            padding: 20px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        footer p {
            color: rgba(209, 163, 255, 0.6);; /* Standardmäßig etwas ausgegraut */
        }

        footer p:hover {
            color: #d1a3ff; /* Farbe der Schrift beim Hover */
        }

        h1, h2, h3 {
            color: #d1a3ff; /* Farbe der Headerschrift */
        }

        banner {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .custom-container {
            max-width: 400px;
            margin: 0 auto;
        }

        .custom-form {
            background-color: #343a40;
            color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }

        .news-feed {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .news-item {
            margin-bottom: 20px; /* Füge einen Abstand von 20px nach unten hinzu */
            background-color: #343a40;
            color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            flex-grow: 1;
            width: 300px;
        }
        .navbar ul li a:hover,
        .navbar ul li a.active {
            color: #d1a3ff; /* Farbe des Links beim Hover und für den aktiven Link */
        }

        .navbar ul li a:hover i,
        .navbar ul li a.active i {
            color: #d1a3ff;

    </style>
</head>
<body>

<header>
    <div>
        <i class="fa-solid fa-user-astronaut" style="font-size: 48px; color: #d1a3ff; margin-right: 10px;"></i>
        <h1>Space University</h1>
    </div>
    <nav class="navbar">
        <ul>
            <li><a href="<?php echo base_url();?>Dozent" class="<?php echo $active == 'home' ? 'active' : '' ?>"><i class="fa-solid fa-home"></i> Home</a></li>
            <li><a href="<?php echo base_url();?>Kurse_Dozent" class="<?php echo $active == 'courses' ? 'active' : '' ?>"><i class="fa-solid fa-book-open"></i> Kurse</a></li>
            <li><a href="<?php echo base_url();?>Prüfungen_Dozent" class="<?php echo $active == 'exams' ? 'active' : '' ?>"><i class="fa-solid fa-clipboard-check"></i> Prüfungen</a></li>
            <li><a href="<?php echo base_url();?>Profil_Dozent" class="<?php echo $active == 'profile' ? 'active' : '' ?>"><i class="fa-solid fa-user-circle"></i> Profil</a></li>
            <li><a href="<?php echo base_url();?>Startseite" "><i class="fa-solid fa-sign-out"></i> Logout</a></li>
        </ul>
    </nav>
</header>

<?= $this->renderSection('content') ?>

<footer>
    <p>Kontakt: info@spaceuniversity.com | Telefon: +123 456 7890</p>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
