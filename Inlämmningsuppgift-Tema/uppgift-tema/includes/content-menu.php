<?php $header = get_sub_field('text_header');
$content = get_sub_field('text_content');
$side = get_sub_field('menu_side'); ?>
<?php if ($side == 'right'): ?>
    <div id="primary" class="col-xs-12 col-md-9">
    <?php elseif ($side == 'left'): ?>
        <div id="primary" class="col-xs-12 col-md-9 col-md-push-3">
        <?php elseif ($side == 'none'): ?>
            <div id="primary" class="col-xs-12">
            <?php endif ?>
            <h1>
                <?php echo $header ?>
            </h1>
            <p>
                <?php echo $content ?><br><br>
            </p>
        </div>
        <?php if ($side == 'right'): ?>
            <aside id="secondary" class="col-xs-12 col-md-3">
                <ul class="side-menu">
                    <?php dynamic_sidebar('sidebar-2') ?>
                </ul>
            </aside>
        <?php elseif ($side == 'left'): ?>
            <aside id="secondary" class="col-xs-12 col-md-3 col-md-pull-9">
                <ul class="side-menu">
                    <?php dynamic_sidebar('sidebar-2') ?>
                </ul>
            </aside>
        <?php endif; ?>