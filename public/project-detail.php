<?php
require_once '../data/projects.php';

$id = $_GET['id'] ?? null;
$project = $projects[$id] ?? null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project-detail</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    
    <!-- Header -->
    <?php require_once '../includes/header.php'; ?>
    <!-- /Header -->

    <main>

        <!-- HERO / PROJECT HEADER -->
        <section class="section-hero-detail">
            <a href="projects.php" class="back-link">← Terug naar projecten</a>

            <div class="hero-content">
                <h1 class="hero-name">
                    <?= $project['title'] ?? 'Project niet gevonden' ?>
                </h1>

                <p class="hero-role">UI/UX & Frontend</p>
                
                <ul class="project-tags-detail">
                <?php foreach ($project['tags'] as $tag): ?>
                <li><?= $tag ?></li>
                <?php endforeach; ?>
                </ul>
            </div>
        </section>

        <!-- PROJECT VISUAL -->
        <section class="section-projects">
            <article class="project">
            <figure class="project-media">
                <img src="<?= $project['image'] ?? '' ?>" alt="Project visual">
            </figure>

            <div class="project-content-detail">
                <a href="#" class="btn primary">Bekijk Live Website ↗</a>
            </div>
            </article>
        </section>

        <!-- CONTENT -->
        <section class="section-about">
            <h2>Over dit project</h2>
            <p class="about-text">
                <?= $project['description'] ?? '' ?>
            </p>

            <h2>Mijn rol</h2>
            <p class="about-text">
                Analyse, UI/UX design en front-end development.
            </p>

            <h2>Aanpak</h2>
            <ul class="project-tags-aanpak">
                <li>1 Analyse</li>
                <li class="active">2 Design</li>
                <li>3 Development</li>
            </ul>

            <h2>Resultaat</h2>
            <p class="about-text">
                Wat is er bereikt / wat heb je geleerd.
            </p>
        </section>

        <!-- CTA -->
        <section class="section-cta">
            <h2>Interesse in zo’n project?</h2>
            <a href="#contact" class="btn tertiary">Neem contact op</a>
        </section>

    </main>

    <!-- Footer -->
    <?php require_once '../includes/footer.php'; ?>
    <!-- /Footer -->    

    <script src="js/main.js"></script>
</body>
</html>