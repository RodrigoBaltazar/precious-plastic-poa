<?php get_header(); ?>

<main class="container mt-5">
    <!-- Hero Section -->
    <section class="hero jumbotron text-center bg-primary text-white">
        <h1 class="display-4"><?php bloginfo('name'); ?></h1>
        <p class="lead"><?php bloginfo('description'); ?></p>
    </section>

    <!-- Últimos Posts -->
<section class="ultimos-posts">
    <h2 class="mb-4">Últimos Posts</h2>
    <div class="grid-posts">
        <?php
        $query = new WP_Query([
            'posts_per_page' => 6
        ]);
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>
                <div class="card">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="card-img-top">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium'); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        else : ?>
            <p>Nenhum post encontrado.</p>
        <?php endif; ?>
    </div>
</section>

</main>

<?php get_footer(); ?>

