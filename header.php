<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wynajem busów</title>
    <link href="https://fonts.googleapis.com/css?family=Pragati+Narrow" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <menu>
            <ul>
                <li><a href="#"><img src="" alt="logo"></a></li>
                <li><a href="#">Start</a></li>
                <li><a href="#">Cennik</a></li>
                <li><a href="#">O nas</a></li>
                <li><a href="#">Kontakt</a></li>
            </ul>
        </menu>
    </header>



