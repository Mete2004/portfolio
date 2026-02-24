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
    <header>
        <div class="logo">METE</div>

        <button class="hamburger" id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav class="mobile-nav" id="mobileNav">
            <a href="index.html">Home</a>
            <a href="projecten.html">Projecten</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <main>

        <!-- HERO / PROJECT HEADER -->
        <section class="section-hero-detail">
            <a href="projects.html" class="back-link">← Terug naar projecten</a>

            <div class="hero-content">
                <h1 class="hero-name">Portfolio Website</h1>
                <p class="hero-role">UI/UX & Frontend</p>

                <ul class="project-tags-detail">
                    <li>UI/UX</li>
                    <li>Frontend</li>
                    <li>Responsive</li>
                </ul>
            </div>
        </section>

        <!-- PROJECT VISUAL -->
        <section class="section-projects">
            <article class="project">
            <figure class="project-media">
                <img src="assets/project-afbeelding1.png" alt="Project visual">
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
                Korte omschrijving hier.
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

    <footer class="site-footer">
        <p>mete.sariguney@hva.nl</p>
    </footer>

    <script src="js/main.js"></script>
</body>
</html>