<?php get_header(); ?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <?php if (have_rows('content')): ?>
                    <?php while (have_rows('content')):
                        the_row(); ?>
                        <?php if (get_row_layout() == 'text_with_menu'): ?>
                            <?php get_template_part('includes/content', 'menu'); ?>
                        <?php elseif (get_row_layout() == 'text_with_image'): ?>
                            <?php get_template_part('includes/content', 'img'); ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>