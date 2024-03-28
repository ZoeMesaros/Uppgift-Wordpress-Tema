<?php wp_footer(); ?>
<footer id="footer">
    <div class="container">
        <div class="row top">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <h4>Kort om oss</h4>
                <p>
                    <?php echo get_field('about_us', 'option'); ?>
                </p>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                <h4>Kontaktuppgifter</h4>
                <?php if (have_rows('company_contact', 'option')): ?>
                    <?php while (have_rows('company_contact', 'option')):
                        the_row();

                        // Get sub field values.
                        $name = get_sub_field('company_name');
                        $address = get_sub_field('company_address');
                        $postal = get_sub_field('company_postal');
                        $phone = get_sub_field('company_phone');
                        $email = get_sub_field('company_email');

                        ?>
                        <p>
                            <?php echo $name ?><br>
                            <?php echo $address ?><br>
                            <?php echo $postal ?>
                        </p>
                        <p>
                            <?php echo $phone ?><br />
                            E-post: <a href="mailto:<?php $email ?>">
                                <?php echo $email ?>
                            </a>
                        </p>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                <h4>Social media</h4>
                <ul class="social">
                    <?php if (have_rows('social_media', 'option')): ?>
                        <?php while (have_rows('social_media', 'option')):
                            the_row();

                            // Get sub field values.
                            $fb = get_sub_field('facebook');
                            $tw = get_sub_field('twitter');
                            $in = get_sub_field('instagram');
                            $li = get_sub_field('linkedin');
                            ?>
                            <li>
                                <i class="fa fa-facebook"></i> <a href="<?php echo $fb ?>" target="_blank">Facebook</a>
                            </li>
                            <li>
                                <i class="fa fa-twitter"></i> <a href="<?php echo $tw ?>" target="_blank">Twitter</a>
                            </li>
                            <li>
                                <i class="fa fa-instagram"></i> <a href=" <?php echo $in ?>" target="_blank">Instagram</a>
                            </li>
                            <li>
                                <i class="fa fa-linkedin"></i> <a href="<?php echo $li ?>" target="_blank">LinkedIn</a>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <div class="row bottom">
            <div class="col-xs-12">
                <p>
                    <?php echo get_field('copyright', 'option'); ?>
                </p>
            </div>
        </div>
    </div>
</footer>
</div>
</body>

</html>