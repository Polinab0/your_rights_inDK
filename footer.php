<?php
$footer_page = get_page_by_path('footer-settings');
$footer_id = $footer_page ? $footer_page->ID : null;
?>

<footer class="site-footer">

    <div class="container footer-inner">

        <div class="footer-info">

            <p><?php echo esc_html(get_field('footer_text', $footer_id)); ?></p>

            <p><?php echo esc_html(get_field('footer_second_text', $footer_id)); ?></p>

        </div>

        <div class="footer-menu-area">

            <?php
            wp_nav_menu(array(
              'menu' => 'Footer Menu',
              'container' => false,
              'menu_class' => 'footer-menu-list'
            ));
            ?>

        </div>

        <div class="footer-contact">

            <h3><?php echo esc_html(get_field('footer_contact_title', $footer_id)); ?></h3>

            <p>
                <img src="<?php echo esc_url(get_field('footer_email_icon', $footer_id)); ?>" alt="Email icon">

                <a href="mailto:<?php echo esc_attr(get_field('footer_email', $footer_id)); ?>">
                    <?php echo esc_html(get_field('footer_email', $footer_id)); ?>
                </a>
            </p>

            <div class="footer-socials">

                <a href="<?php echo esc_url(get_field('footer_linkedin_url', $footer_id)); ?>">
                    <img src="<?php echo esc_url(get_field('footer_linkedin_icon', $footer_id)); ?>" alt="LinkedIn">
                </a>

                <a href="<?php echo esc_url(get_field('footer_facebook_url', $footer_id)); ?>">
                    <img src="<?php echo esc_url(get_field('footer_facebook_icon', $footer_id)); ?>" alt="Facebook">
                </a>

            </div>

        </div>

    </div>

</footer>


<script>
    const accordionItems = document.querySelectorAll('.accordion-item');

    accordionItems.forEach(function(item) {
        const button = item.querySelector('.accordion-header');

        button.addEventListener('click', function() {
            item.classList.toggle('is-open');
        });
    });
</script>



<?php wp_footer(); ?>
</body>
</html>