<?php
get_header();
?>

<section class=" py-5 px-sm-5">
    <div class="container">

<?php
    if( have_posts() ){
        while( have_posts() ){
            the_post();
            get_template_part('template-parts/content', 'entertainers');
        }
    }
?>

</section>

<?php
get_footer();
?>