<?php get_header(); ?>

<main class="home-page">

    <section class="home-intro">

        <div class="container hero-section">

            <div class="hero-top">

                <img 
                    src="<?php echo esc_url(get_field('hero_small_icon')); ?>" 
                    alt="Icon"
                >

                <p>
                    <?php echo esc_html(get_field('hero_small_text')); ?>
                </p>

            </div>

            <h1>
                <?php echo nl2br(esc_html(get_field('hero_title'))); ?>
            </h1>

            <div class="hero-content">

                <p>
                    <?php echo esc_html(get_field('hero_description')); ?>
                </p>

                <p>
                    <?php echo esc_html(get_field('hero_second_text')); ?>
                </p>

            </div>

            <div class="hero-buttons">

                <a class="hero-button light-button" href="#rights-cards">

                    <?php echo esc_html(get_field('hero_button_one_text')); ?>

                </a>

                <a 
                    class="hero-button yellow-button" 
                    href="<?php echo esc_url(get_field('hero_button_two_link')); ?>"
                >

                    <?php echo esc_html(get_field('hero_button_two_text')); ?>

                </a>

            </div>

        </div>

        <div class="hero-divider"></div>

        <section class="guide-section">

    <div class="container guide-inner">

        <h2>
            <?php echo esc_html(get_field('guide_title')); ?>
        </h2>

        <p class="guide-intro">
            <span><?php echo esc_html(get_field('guide_intro_yellow')); ?></span>
            <?php echo esc_html(get_field('guide_intro_text')); ?>
        </p>

        <div class="guide-content">

            <div class="guide-list">
                <?php echo wp_kses_post(wpautop(get_field('guide_list'))); ?>
            </div>

            <a 
                class="guide-button" 
                href="<?php echo esc_url(get_field('guide_file')); ?>" 
                download
            >
                <?php echo esc_html(get_field('guide_button_text')); ?>
            </a>

        </div>

    </div>

</section>

<section 
    class="rights-image-section" 
    style="background-image: url('<?php echo esc_url(get_field('rights_background_image')); ?>');"
>

    <div class="rights-overlay">

        <div class="container rights-inner">

            <div class="rights-text">

                <h2>
                    <?php echo esc_html(get_field('rights_title')); ?>
                </h2>

                <p>
                    <?php echo esc_html(get_field('rights_text')); ?>
                </p>

            </div>

            <div class="rights-list-box">

                <p>
                    <?php echo esc_html(get_field('rights_list_title')); ?>
                </p>

            <div class="rights-list-content">

                <?php echo wpautop(get_field('rights_list')); ?>

             </div>

            </div>

        </div>

    </div>

</section>



<section class="before-section">

    <div class="before-inner">

        <h2>
            <?php echo esc_html(get_field('before_title')); ?>
        </h2>

        <p>
            <?php echo esc_html(get_field('before_text')); ?>
        </p>

        <div class="before-list">

            <?php echo wp_kses_post(wpautop(get_field('before_list'))); ?>

        </div>

    </div>

</section>



<section id="rights-cards" class="cards-section rights-steps-section">

    <div class="container cards-inner">

        <h2 class="cards-section-title">
           <?php echo esc_html(get_field('cards_section_title')); ?>
        </h2>

        <div class="cards-grid">

            <?php
            $cards = new WP_Query(array(
                'post_type' => 'rights_card',
                'posts_per_page' => 4,
                'orderby' => 'menu_order',
                'order' => 'ASC'
            ));

            $step = 1;

            if ($cards->have_posts()) :
                while ($cards->have_posts()) : $cards->the_post();
            ?>

                <div class="step-card-wrap">

                    <div class="step-label">
                          <?php echo esc_html(get_field('card_step')); ?>
                    </div>

                    <article class="rights-card">

                        <h3>
                            <?php echo esc_html(get_field('card_text')); ?>
                        </h3>

                        <img
                            class="card-icon"
                            src="<?php echo esc_url(get_field('card_icon')); ?>"
                            alt="<?php echo esc_attr(get_field('card_text')); ?>"
                        >

                        <p>
                            <?php echo esc_html(get_field('card_description')); ?>
                        </p>

                        <a class="card-link" href="<?php echo esc_url(get_field('card_button_link')); ?>">

                            <?php echo esc_html(get_field('card_button_text')); ?>

                            <img
                                class="card-arrow"
                                src="<?php echo esc_url(get_field('card_arrow_icon')); ?>"
                                alt=""
                            >

                        </a>

                    </article>

                </div>

            <?php
                $step++;
                endwhile;
                wp_reset_postdata();
            endif;
            ?>

        </div>

    </div>

</section>




<section class="equal-section">

    <div class="equal-icon">
        <img src="<?php echo esc_url(get_field('equal_section_icon')); ?>" alt="">
    </div>

    <div class="equal-content">

        <h2>
            <?php echo esc_html(get_field('equal_section_title')); ?>
        </h2>

        <p>
            <?php echo nl2br(esc_html(get_field('equal_section_description'))); ?>
        </p>

    </div>

</section>




    </section>

</main>


<?php get_footer(); ?>