<?php
$header = get_sub_field('text_header');
$content = get_sub_field('text_content');
$img = get_sub_field('image');
$imgSide = get_sub_field('image_side');
?>
<?php if ($imgSide == 'right'): ?>
    <div class="col-xs-12 col-sm-8 col-md-6">
        <h1>
            <?php echo $header ?>
        </h1>
        <p>
            <?php echo $content ?>
        </p>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-6">
        <img src="<?php echo $img ?>" alt="">
    </div>
<?php elseif ($imgSide == 'left'): ?>
    <div class="col-xs-12 col-sm-4 col-md-6">
        <img src="<?php echo $img ?>" alt="">
    </div>
    <div class="col-xs-12 col-sm-8 col-md-6">
        <h1>
            <?php echo $header ?>
        </h1>
        <p>
            <?php echo $content ?>
        </p>
    </div>

<?php endif ?>