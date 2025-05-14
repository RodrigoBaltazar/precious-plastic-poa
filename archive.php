<?php get_header(); ?>

<main>
    <h1>
        <?php
        if (is_category()) {
            single_cat_title();
        } elseif (is_tag()) {
            single_tag_title();
        } elseif (is_author()) {
            the_author();
        } elseif (is_date()) {
            the_time('F Y');
        } else {
            _e('Arquivos', 'meu-tema');
        }
        ?>
    </h1>

    <?php get_header(); ?>

<main class="layout-grid">
    <section class="conteudo-principal">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('template-parts/content'); ?>
            <?php endwhile; ?>
        <?php else : ?>
            <p>Nenhum post encontrado.</p>
        <?php endif; ?>
    </section>

    <aside class="sidebar">
        <h2>Sidebar</h2>
        <p>Aqui pode ter widgets, categorias, posts recentes etc.</p>
    </aside>
</main>

<?php get_footer(); ?>


    <?php endif; ?>


</main>

<?php get_footer(); ?>

