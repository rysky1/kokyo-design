<?php get_header(); ?>

<main class="single">
    <?php if ( have_posts() ) : ?>
    <?php while( have_posts() ) : the_post(); ?>
    <div class="container-fluid">
        <div class="ttl__container">
            <div class="detail__box">
                <p class="category"><?php the_category(' '); ?></p>
                <time class="time" datetime="<?php echo get_the_date('Y-m-d'); ?>" itemprop="datepublished"><?php echo get_the_date('Y-m-d'); ?></time>
            </div>
            <h1><?php the_title(); ?></h1>
            <?php
            // アイキャッチ（不要な場合は削除でOK）
            if( has_post_thumbnail() ){
                the_post_thumbnail(array(1000,1000));
            }
            ?>
        </div>
        <div class="wysiwyg-editor">
            <?php the_content(); ?>
        </div>
    </div><!--/.container-fluid-->
    <?php endwhile;?>
    <?php endif; ?>
</main>
<!-- -----------------breadcrum------------------- -->
<main class="breadcrumb__container">
    <div class="container-fluid">
        <!--パンくず--><?php echo breadcrumb_func(); ?>
    </div>
</main>
<?php get_footer(); ?>