<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <?php require_once '../php/header.php'; ?>

    

    <main>

        <section class="section-hero">
        <h1 class="hero-name">Mete</h1>
        <p class="hero-role">Frontend & UI/UX Designer</p>
        <p class="hero-intro">Korte introductietekst hier.</p>

        <div class="hero-actions">
            <a href="#projects" class="btn primary">Bekijk projecten</a>
            <a href="#contact" class="btn secondary">Contact</a>
        </div>
        </section>

        <section class="section-projects">
            <h2>Projecten</h2>

            <a href="project-detail.html" class="project-link"> 
            <article class="project">
                <figure class="project-media">
                    <img
                    src="assets/project-afbeelding1.png"
                    alt=""
                    >
                </figure>

                <div class="project-content">
                    <h3>Restaurant Website</h3>
                    <p>Korte omschrijving</p>
                </div>

                <ul class="project-tags">
                    <li>UI/UX</li>
                    <li>Frontend</li>
                    <li>Responsive</li>
                </ul>
            </article>
            </a>

            <a href="project-detail.html" class="project-link">
            <article class="project">
                <figure class="project-media">
                    <img
                    src="assets/project-afbeelding1.png"
                    alt=""
                    >
                </figure>

                <div class="project-content">
                    <h3>Restaurant Website</h3>
                    <p>Korte omschrijving</p>
                </div>

                <ul class="project-tags">
                    <li>UI/UX</li>
                    <li>Frontend</li>
                    <li>Responsive</li>
                </ul>
            </article>
            </a>

            <a href="project-detail.html" class="project-link">
            <article class="project">
                <figure class="project-media">
                    <img
                    src="assets/project-afbeelding1.png"
                    alt=""
                    >
                </figure>

                <div class="project-content">
                    <h3>Restaurant Website</h3>
                    <p>Korte omschrijving</p>
                </div>

                <ul class="project-tags">
                    <li>UI/UX</li>
                    <li>Frontend</li>
                    <li>Responsive</li>
                </ul>
            </article>
            </a>

        </section>

        <section class="section-about">
            <h2>Over mij</h2>

            <p class="about-text">
                Ik ben een frontend developer met een sterke focus op design en gebruiksvriendelijkheid.
                Na het behalen van mijn Software Developer niveau 4 diploma studeer ik nu
                Front-End Design & Development aan de Hogeschool van Amsterdam.
            </p>

            <div class="about-actions">
                
            </div>
        </section>

        <section class="section-cta">
            <h2>Klaar voor een website?</h2>

            <a href="contact.html" class="btn tertiary">
                Neem contact op
            </a>
        </section>

    </main>

    <footer class="site-footer">
        <p>mete.sariguney@hva.nl</p>
    </footer>    

    <script src="js/main.js"></script>
</body>
</html>