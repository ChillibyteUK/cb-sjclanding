<?php
/* Template Name: Landing Page */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

the_post();
?>
<header>
    <div class="logo"><img
            src="<?=get_stylesheet_directory_uri()?>/img/sjc-logo--wo.svg"
            width="100" height="100"></div>
    <?php
if (get_field('linkedin_url', 'options')) {
    ?>
    <div class="social"><a
            href="<?=get_field('linkedin_url', 'options')?>"
            target="_blank" rel="nofollow"><i class="fa-brands fa-linkedin-in"></i></a></div>
    <?php
}
?>
</header>
<main>
    <div class="text">
        <div class="text__inner">
            <div class="pre-title">Coming Soon</div>
            <h1>Our new website is on its way.</h1>
            <p class="mb-3">Boutique Real Estate Capital advisory team based London. We deliver tailored solutions for
                our clients unique requirements across:
            <ul class="mt-2">
                <li>Bridging</li>
                <li>Development</li>
                <li>Investment</li>
                <li>Mezzanine</li>
                <li>Joint Venture</li>
            </ul>
            </p>
            <p class="mb-2 has-small-font-size">Sign up to be the first to know when we launch.</p>
            <?=do_shortcode('[contact-form-7 id="d92ac04"]')?>
        </div>
    </div>
    <div class="image">
        <div class="image__inner" style="background-image:url(/wp-content/uploads/2023/09/holding.jpg)"></div>
    </div>
</main>
<footer>
    <?php
if (get_field('contact_email', 'options')) {
    ?>
    <div class="email"><a
            href="mailto:<?=get_field('contact_email', 'options')?>"><i
                class="fa-solid fa-envelope"></i>
            <?=get_field('contact_email', 'options')?></a>
    </div>
    <?php
}
if (get_field('contact_phone', 'options')) {
    ?>
    <div class="phone"><a
            href="tel:<?=parse_phone(get_field('contact_phone', 'options'))?>"><i
                class="fa-solid fa-phone"></i>
            <?=get_field('contact_phone', 'options')?></a>
    </div>
    <?php
}
?>
</footer>
<?php

get_footer();
?>