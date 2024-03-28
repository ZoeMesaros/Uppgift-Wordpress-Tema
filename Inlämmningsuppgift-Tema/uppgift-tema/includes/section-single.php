<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>
        <?php if (has_post_thumbnail()): ?>
            <?php set_post_thumbnail_size(250, 250, true); ?>
            <?php echo '<img src="' . get_the_post_thumbnail_url(get_the_ID(), "full") . '">'; ?>
        <?php endif; ?>
        <h1 class="title">
            <?php the_title(); ?>
        </h1>
        <ul class="meta">
            <li>
                <i class="fa fa-calendar"></i>
                <?php echo get_the_date('j F, Y') ?>
            </li>
            <li>
                <i class="fa fa-user"></i>
                <a href="forfattare.html">
                    <?php
                    $fname = get_the_author_meta('first_name');
                    $lname = get_the_author_meta('last_name');
                    echo $fname . ' ' . $lname
                        ?>
                </a>
            </li>
            <li>
                <i class="fa fa-tag"></i>
                <?php $tags = get_the_category();
                foreach ($tags as $tag): ?>
                    <a href=<?php echo get_tag_link($tag->term_id); ?>><?php echo $tag->name ?></a>


                    </a>
                <?php endforeach; ?>
            </li>
        </ul>
        <p>
            <?php the_content(); ?>
        </p>
    <?php endwhile; else: endif; ?>