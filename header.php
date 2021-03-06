<!DOCTYPE html>
<html lang="en-gb">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="initial-scale = 1.0" name="viewport">
    <title>
        <?php wp_title('|', true, 'right'); ?>
    </title>
    <?php wp_head(); ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body <?php body_class(); ?>>
    <header id="head" class="head">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="<?php echo home_url(); ?>/" title="<?php bloginfo('name'); ?>">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" class="brand img-responsive" alt="<?php bloginfo('name'); ?>">
                    </a>
                </div> 
                <div class="col-md-12">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <?php wp_nav_menu(array('menu' => 'primary', 'items_wrap' => '<ul class="nav navbar-nav navbar-right" role="menu">%3$s</ul>', 'container' => false)); ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

