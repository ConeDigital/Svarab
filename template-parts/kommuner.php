<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package Skeleton
 */
?>

<?php $kommuner = new WP_Query(array(
    'posts_per_page'        => -1,
    'post_type'             => 'kommun',
    'meta_key'			    => 'kommun-name',
    'orderby'			    => 'meta_value',
    'order'                 => 'asc'
));
if($kommuner->have_posts())
{
    $letter = '';
    while($kommuner->have_posts())
    {
        $kommuner->the_post();

        // Check the current letter is the same that the first of the title
        if($letter != mb_substr(get_field('kommun-name'), 0, 1))
        {
            echo ($letter != '') ? '</div>' : '';
            $letter = mb_substr(get_field('kommun-name'), 0, 1);
            echo '<div class="kommun-grid-section"><h4 class="kommun-alphabetic">'.mb_substr(get_field('kommun-name'), 0, 1).'</h4>';
        }

        $text = '<div class="kommun-grid "><a href="'. get_permalink() .'"></a><div class="background-img kommun-grid-img" style="background-image: url('.  get_the_post_thumbnail_url() .')">';
        if(!get_the_post_thumbnail_url()) $text .= '<i class="material-icons">photo</i>';
        $text .= '</div><h4>'. get_field('kommun-name') .'</h4></div>';
        echo $text;
    }
} ; ?>

</div>