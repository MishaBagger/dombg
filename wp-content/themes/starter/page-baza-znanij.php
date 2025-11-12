<?php
/**
 * Template Name: База знаний
 */

get_header();
?>

    <section class="provide section" id="provide">
    <div class="container provide-container">
        <h2 class="provide-title title"><? the_field('title_knowledge'); ?></h2>
        <? if (have_rows('court_list')) { ?>
            <h3 class="subtitle"><?php the_field('title_court'); ?></h3>
            <div class="provide-list">
                <? while (have_rows('court_list')) : the_row(); ?>
                    <div class="baza-list__item">
                        <div class="provide-list__item-text">
                            <h3 class="provide-list__item-title"><? the_sub_field('title'); ?></h3>
                            <p class="provide-list__item-list"><? the_sub_field('text'); ?></p>
                            <a href="<? the_sub_field('file'); ?>" class="provide-list__item-list"  target="_blank"><? echo  the_sub_field('filename'); ?></a>
                        </div>
                    </div>
                <? endwhile; ?>
            </div>
        <? } ?>

        <? if (have_rows('news_list')) { ?>
            <h3 class="subtitle"><?php the_field('title_news'); ?></h3>
            <div class="provide-list">
                <? while (have_rows('news_list')) : the_row(); ?>
                    <div class="baza-list__item">
                        <div class="provide-list__item-text">
                            <h3 class="provide-list__item-title"><? the_sub_field('title'); ?></h3>
                            <p class="provide-list__item-list"><? the_sub_field('text'); ?></p>
                             <a href="<? the_sub_field('file'); ?>" class="provide-list__item-list"  target="_blank"><? echo  the_sub_field('filename'); ?></a>
                        </div>
                    </div>
                <? endwhile; ?>
            </div>
        <? } ?>
    </div>
</section>

<?php get_footer(); ?>