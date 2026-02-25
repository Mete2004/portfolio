<a href="<?= $project['link'] ?>" class="project-link">
    <article class="project">
        <figure class="project-media">
            <img src="<?= $project['image'] ?>" alt="">
        </figure>

        <div class="project-content">
            <h3><?= $project['title'] ?></h3>
            <p><?= $project['description'] ?></p>
        </div>

        <ul class="project-tags">
            <?php foreach ($project['tags'] as $tag): ?>
                <li><?= $tag ?></li>
            <?php endforeach; ?>
        </ul>
    </article>
</a>