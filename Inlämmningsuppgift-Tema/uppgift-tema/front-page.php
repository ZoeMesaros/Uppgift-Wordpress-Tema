<?php get_header(); ?>


<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="hero">
                        <img src="<?php echo get_field('hero_image'); ?>" alt="">

                        <div class="text">
                            <h1>
                                <?php echo get_field('welcome_heading'); ?>
                            </h1>
                            <p>
                                <?php echo get_field('welcome_subheading'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<?php get_footer(); ?>