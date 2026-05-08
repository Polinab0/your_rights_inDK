<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container header-inner">

        <nav class="main-nav">
            <ul class="menu-list">

                <?php if (!is_front_page()) : ?>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                <?php endif; ?>

                <?php if (!is_page('salary-contract')) : ?>
                    <li><a href="<?php echo esc_url(home_url('/salary-contract/')); ?>">Salary & Contract</a></li>
                <?php endif; ?>

                <?php if (!is_page('working-hours-safety')) : ?>
                    <li><a href="<?php echo esc_url(home_url('/working-hours-safety/')); ?>">Working Hours & Safety</a></li>
                <?php endif; ?>

                <?php if (!is_page('holiday-pension')) : ?>
                    <li><a href="<?php echo esc_url(home_url('/holiday-pension/')); ?>">Holiday & Pension</a></li>
                <?php endif; ?>

                <?php if (!is_page('faq')) : ?>
                    <li><a href="<?php echo esc_url(home_url('/faq/')); ?>">FAQ</a></li>
                <?php endif; ?>

            </ul>
        </nav>

        <div class="search-box">

            <button class="search-toggle" type="button">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>

            <form class="search-form" action="<?php echo esc_url(home_url('/')); ?>" method="get">
                <input type="search" name="s" placeholder="Search">
            </form>

        </div>

    </div>

    <script>
        const searchButton = document.querySelector('.search-toggle');
        const searchForm = document.querySelector('.search-form');

        searchButton.addEventListener('click', function () {
            searchForm.classList.toggle('is-open');
        });
    </script>

</header>