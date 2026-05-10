<section class="guide-section">

    <div class="container guide-inner">

        <h2>
            <?php echo esc_html(get_field('guide_title', get_option('page_on_front'))); ?>
        </h2>

        <p class="guide-intro">
            <span><?php echo esc_html(get_field('guide_intro_yellow', get_option('page_on_front'))); ?></span>
            <?php echo esc_html(get_field('guide_intro_text', get_option('page_on_front'))); ?>
        </p>

        <div class="guide-content">

            <div class="guide-list">
                <?php echo wp_kses_post(wpautop(get_field('guide_list', get_option('page_on_front')))); ?>
            </div>

            <a 
                class="guide-button" 
                href="<?php echo esc_url(get_field('guide_file', get_option('page_on_front'))); ?>" 
                download
            >
                <?php echo esc_html(get_field('guide_button_text', get_option('page_on_front'))); ?>
            </a>

        </div>

    </div>

</section>