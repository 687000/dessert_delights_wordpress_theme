<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="custom theme template for ixd618">
    <meta name="author" content="https://github.com/687000">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Rosario:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <?
    wp_head();
    ?>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg pl-5 pr-5">
        <a class="navbar-brand" href="<?= home_url(); ?>">Dessert Delights</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <?
            wp_nav_menu(
                array(
                    'menu' => 'primary',
                    'container' => '',
                    'theme_location' => 'primary',
                    'items_wrap' => '<ul class="navbar-nav ml-auto">%3$s</ul>'
                )
            );
            ?>
            <?
            dynamic_sidebar('sidebar-1');
            ?>
            <!-- <ul class="navbar-nav ml-auto">
                <li class=" nav-item active">
                    <a class="nav-link text-uppercase pl-4 pr-4" href="<?= home_url(); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase pl-4 pr-4" href="archive.html">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase pl-4 pr-4" href="page.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase pl-4 pr-4" href="contact.html">Contact</a>
                </li>
            </ul> -->
        </div>
    </nav>
    <container>