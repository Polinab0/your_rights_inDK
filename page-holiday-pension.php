<?php get_header(); ?>

<main class="inner-page">

    <div class="inner-page-dark">

        <section class="salary-top">
            <div class="salary-top__container">

                <h1 class="salary-top__title">
                    <?php echo esc_html(get_field('top_title')); ?>
                </h1>

                <p class="salary-top__text">
                    <?php echo esc_html(get_field('top_text')); ?>
                </p>

                <div class="salary-top__small-text">
                    <?php echo nl2br(esc_html(get_field('top_small_text'))); ?>
                </div>

            </div>
        </section>

        <?php get_template_part('template-parts/guide-section'); ?>

        <section class="page-accordion">
            <div class="container accordion-inner">

                <?php
                $sections = new WP_Query(array(
                    'post_type' => 'page_section',
                    'posts_per_page' => -1,
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                    'meta_query' => array(
                        array(
                            'key' => 'section_page',
                            'value' => get_the_ID(),
                            'compare' => '='
                        )
                    )
                ));

                if ($sections->have_posts()) :
                    while ($sections->have_posts()) : $sections->the_post();

                        $is_open = get_field('section_opened') ? 'is-open' : '';
                        $arrow = get_field('section_arrow');
                ?>

                    <div class="accordion-item <?php echo esc_attr($is_open); ?>">

                        <button class="accordion-header" type="button">

                            <span class="accordion-number">
                                <?php echo esc_html(get_field('section_number')); ?>
                            </span>

                            <span class="accordion-title">
                                <?php echo esc_html(get_field('section_title')); ?>
                            </span>

                            <?php $arrow = get_field('section_arrow'); ?>

                    <?php if ($arrow) : ?>
                        <img 
                             class="accordion-arrow" 
                             src="<?php echo esc_url($arrow); ?>" 
                              alt="" 
                               >
                    <?php endif; ?>

                        </button>

                        <div class="accordion-content">
                            <?php echo wp_kses_post(get_field('section_content')); ?>
                        </div>

                    </div>

                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>

            </div>
        </section>

    </div>

    <section class="tip-section tip-section--center">

    <div class="tip-box">

        <div class="tip-box__header">

            <?php if (get_field('tip_icon')) : ?>
                <img src="<?php echo esc_url(get_field('tip_icon')); ?>" alt="">
            <?php endif; ?>

            <h2>
                <?php echo esc_html(get_field('tip_title')); ?>
            </h2>

        </div>

        <div class="tip-box__content">

            <div class="tip-box__left tip-box__left--center">

                <h3>
                    <?php echo esc_html(get_field('tip_left_title')); ?>
                </h3>

                <?php echo wp_kses_post(get_field('tip_left_list')); ?>

            </div>

            <div class="tip-box__right">

                <?php echo wp_kses_post(get_field('tip_right_text')); ?>

            </div>

        </div>

    </div>

</section>

</main>

<?php get_footer(); ?>