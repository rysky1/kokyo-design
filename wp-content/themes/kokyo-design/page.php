<?php get_header(); ?>

<main class="single">
    <div class="container-fluid">
    <?php if ( have_posts() ) : ?>
    <?php while( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <div class="wysiwyg-editor">
            <?php the_content(); ?>
        </div>
    <?php endwhile;?>
    <?php endif; ?>
    </div>
</main>
<main class="breadcrumb__container">
    <div class="container-fluid">
        <!--パンくず--><?php echo breadcrumb_func(); ?>
    </div>
</main>
<?php get_footer(); ?>