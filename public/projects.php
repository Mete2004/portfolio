<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
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

    <?php
    require_once '../data/projects.php';
    ?>

    <section class="section-projects">
    <?php
    foreach ($projects as $key => $project) {
        require '../includes/project-card.php';
    }
    ?>
    </section>
        
    </main>

    <!-- Footer -->
    <?php require_once '../includes/footer.php'; ?>
    <!-- /Footer -->    

    <script src="js/main.js"></script>
</body>
</html>