<?php
get_header();

if (have_posts()) {
    the_post();

    $allCategories = get_the_category();
?>

<main class="right">
        <!-- emmet: h2+article*6>a+h3+div(img+strong+time)+p+a -->
    <h2 class="right__title"><?php the_title(); ?></h2>
    <div class="posts">
        <article class="post post--solo">
            <?php
                foreach ($allCategories as $category) {
            ?>

            <a href="" class="post__category post__category--color-<?= $category->slug; ?>"><?= $category->name; ?></a>

            <?php
                };
            ?>
            <div class="post__meta">
                <img class="post__author-icon" src="<?= get_template_directory_uri(); ?>/images/icon-<?= get_the_author_meta('nickname'); ?>.png" alt="">
                <strong class="post__author"><?php the_author(); ?></strong>
                <time datetime="<?= get_the_date('Y-m-d'); ?>">
                    <?php echo get_the_date(); ?>
                </time>
            </div>
            <p><?php the_content(); ?></p>
            <a href="<?= home_url(); ?>" class="post__link">Back to home</a>
        </article>
    </div>
</main>

<?php
};

get_footer();
?>