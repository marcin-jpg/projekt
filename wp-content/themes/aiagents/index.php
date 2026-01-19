<?php
get_header();
?>
<main class="ai-section">
    <h1 class="ai-section__title">Aktualności AiAgents</h1>
    <div class="ai-grid">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article class="ai-card">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php the_excerpt(); ?></p>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p>Brak wpisów do wyświetlenia.</p>
        <?php endif; ?>
    </div>
</main>
<?php
get_footer();
