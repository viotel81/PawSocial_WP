<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php
    wp_head();
    ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light p-2 fixed-top">
        <div class="container">
            <a href="index.php"><?php
            if(function_exists('the_custom_logo')){
                the_custom_logo();
            }
            ?>
            </a>            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>            
            <div class="collapse navbar-collapse" id="navmenu">
            <?php
            wp_nav_menu(
                array(
                    'menu' => 'primary',
                    'container' => '',
                    'theme_location' => 'primary',
                    'items_wrap' => '<ul id="" class="navbar-nav ms-auto">%3$s</ul>'
                )
            );
            ?>                
            </div>
        </div>
    </nav>