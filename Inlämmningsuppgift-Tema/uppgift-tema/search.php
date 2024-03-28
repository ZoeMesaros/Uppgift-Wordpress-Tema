<?php get_header(); ?>

<div class="container">
    <br>
    <h4>Sökresultat för "
        <?php echo get_search_query(); ?>
        "
    </h4>
    <h3>
        <?php echo single_cat_title(); ?>
    </h3>
    <?php get_template_part('includes/section', 'archive'); ?>
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
</div>
</section>
</main>
<?php get_footer(); ?>