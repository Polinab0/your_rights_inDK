<?php get_header(); ?>


<?php
     if ($wp_query->found_posts == 1) {
     wp_redirect(get_permalink($wp_query->posts[0]->ID));
     exit;
     }
?>


<main class="search-page">

    <section class="container search-results">

        <h1>
            Search results for:
            <span><?php echo esc_html(get_search_query()); ?></span>
        </h1>

        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

                <article class="search-item">

                    <h2>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>

                    <p>
                        <?php echo esc_html(wp_trim_words(get_the_excerpt(), 28)); ?>
                    </p>

                    <a class="search-link" href="<?php the_permalink(); ?>">
                        Read more
                    </a>

                </article>

            <?php endwhile; ?>

        <?php else : ?>

            <div class="no-results">

                <h2>No results found</h2>

                <p>Try searching for another word.</p>

            </div>

        <?php endif; ?>

    </section>

</main>

<?php get_footer(); ?>