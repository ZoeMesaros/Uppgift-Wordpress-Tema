<?php get_header(); ?>

<div class="container">
    <?php get_template_part('includes/section', 'blog'); ?>
    <nav class="navigation pagination">
        <h2 class="screen-reader-text">Inläggsnavigering</h2>
        <?php get_template_part('includes/section', 'pag'); ?>
    </nav>
</div>
<aside id="secondary" class="col-xs-12 col-md-3">
    <?php get_sidebar(); ?>
</aside>
</div>
</div>
</section>
</main>
</div>

<?php get_footer(); ?>