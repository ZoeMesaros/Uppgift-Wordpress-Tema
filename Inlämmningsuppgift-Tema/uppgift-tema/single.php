<?php get_header(); ?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <article>
                        <?php get_template_part('includes/section', 'single'); ?>
                    </article>
                </div>
                <aside id="secondary" class="col-xs-12 col-md-3">
                    <?php get_sidebar(); ?>
                </aside>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>