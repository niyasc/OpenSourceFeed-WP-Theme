<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>
        <?php wp_title('|',1,'right'); ?>
            <?php bloginfo('name'); ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <?php wp_enqueue_script("jquery"); ?>
        <?php wp_head(); ?>
            <?php
    	ini_set("display_errors", true);
    	ini_set("display_warnings",true);
    	error_reporting(E_ALL);
    ?>
</head>

<body>
    <header>
        <a href="<?=site_url()?>">
            <h1><?=get_bloginfo('name')?></h1>
        </a>
        <p>
            <?=get_bloginfo('description')?>
        </p>

    </header>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Review</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Tutorials</a></li>
            <li><a href="#">About</a></li>
        </ul>
    </nav>


    <div class="container">