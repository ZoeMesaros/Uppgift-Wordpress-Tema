<?php
/* Template Name: Contact Page */
?>

<?php get_header(); ?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <h1>
                        <?php the_title(); ?>
                    </h1>
                    <?php the_field('contact_form'); ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>