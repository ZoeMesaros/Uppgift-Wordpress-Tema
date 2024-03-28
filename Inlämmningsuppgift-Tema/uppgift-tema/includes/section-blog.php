<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <h1>Blogg</h1>
                    <?php if (have_posts()):
                        while (have_posts()):
                            the_post(); ?>
                            <?php static $count = 0;
                            if ($count == "3") {
                                break;
                            } else { ?>
                                <article>
                                    <?php if (has_post_thumbnail()): ?>
                                        <?php set_post_thumbnail_size(150, 150, true); ?>
                                        <?php echo '<img src="' . get_the_post_thumbnail_url(get_the_ID(), "full") . '">'; ?>
                                    <?php endif; ?>


                                    <h2 class="title">
                                        <a href=<?php the_permalink(); ?>><?php the_title(); ?></a>
                                    </h2>
                                    <ul class="meta">
                                        <li>
                                            <i class="fa fa-calendar"></i>
                                            <?php echo get_the_date('j F, Y') ?>
                                        </li>
                                        <li>
                                            <i class="fa fa-user"></i> <a href="forfattare.html">
                                                <?php
                                                $fname = get_the_author_meta('first_name');
                                                $lname = get_the_author_meta('last_name');
                                                echo $fname . ' ' . $lname . '</i>'
                                                    ?>
                                            </a>
                                            <p>
                                            </p>
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
                                        <?php the_excerpt(); ?>
                                    </p>
                                    <a href=<?php the_permalink(); ?>>Läs mer</a>
                                </article>
                                <?php $count++;
                            } ?>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <p>Inga inlägg hittade</p>
                    <?php endif; ?>