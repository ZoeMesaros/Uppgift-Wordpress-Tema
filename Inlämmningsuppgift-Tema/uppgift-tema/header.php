<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Labb 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>" type="text/css" />
    <script src="https://kit.fontawesome.com/b3674b136c.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>

<body>
    <div id="wrap">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-8 col-sm-6">
                        <a class="logo" href=<?php the_permalink(); ?>>
                            <?php echo get_field('header_text', 'option'); ?>
                        </a>
                    </div>
                    <div class="col-sm-6 hidden-xs">
                        <form id="searchform" class="searchform">
                            <div>
                                <?php get_search_form(); ?>
                            </div>
                        </form>
                    </div>
                    <div class="col-xs-4 text-right visible-xs">
                        <div class="mobile-menu-wrap">
                            <i class="fa fa-search"></i>
                            <i class="fa fa-bars menu-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="mobile-search">
            <form id="searchform" class="searchform">
                <form id="searchform" class="searchform">
                    <div>
                        <?php get_search_form(); ?>
                    </div>
                </form>
            </form>
        </div>

        <nav id="nav">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <?php wp_nav_menu(
                            array(
                                'theme_location' => 'top-menu'
                            )
                        ) ?>
                    </div>
                </div>
            </div>
        </nav>