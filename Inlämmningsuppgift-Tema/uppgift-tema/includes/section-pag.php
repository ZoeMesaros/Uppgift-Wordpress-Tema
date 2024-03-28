<?php
global $paged;

if (get_previous_posts_link()) { ?>
    <a class="prev page-numbers" href="<?php echo get_pagenum_link($paged - 1); ?>">Föregående</a>
    <a class="page-numbers current" href="<?php echo get_pagenum_link($paged - 1); ?>">
        <?php echo $paged - 1 ?>
    </a>
    <span class="page-numbers">
        <?php echo $paged ?>
    </span>

    <?php
}
if (get_next_posts_link()) { ?>
    <span class="page-numbers">
        <?php echo $paged ?>
    </span>
    <a class="page-numbers current" href="<?php echo get_pagenum_link($paged + 1); ?>">
        <?php echo $paged + 1 ?>
    </a>
    <a class="next page-numbers" href="<?php echo get_pagenum_link($paged + 1); ?>">Nästa</a>
    <?php
}
?>