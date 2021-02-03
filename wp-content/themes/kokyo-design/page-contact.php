<?php get_header(); ?>
<main class="contactform">
    <div class="container-fluid">
    <h1 class="section__ttl">
        <span class="main__ttl">CONTACT</span>
        <span class="sub__ttl">お問い合わせ</span>
    </h1>
    <p class="contactform__txt01">お客さまからのご相談をお問合せフォームにて受付けております。<br>以下フォームから必要事項をご記入のうえ、お問合せください。</p>
    <?php echo do_shortcode( '[contact-form-7 id="48" title="contact"]' ); ?>
    </div><!--/.container-fluid-->
</main>
<!-- -----------------breadcrum------------------- -->
<main class="breadcrumb__container">
    <div class="container-fluid">
        <!--パンくず--><?php echo breadcrumb_func(); ?>
    </div>
</main>
<?php get_footer(); ?>
