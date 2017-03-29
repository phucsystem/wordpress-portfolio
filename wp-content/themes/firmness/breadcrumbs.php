<?php 
/**
 * @package Firmness
 *
 */
global $post; 
if (!is_front_page()) {
	echo '<ul>';
    echo '<li><a href="';
    echo esc_url(home_url());
    echo '">';
    _e('Home','firmness');
    echo '</a></li><li class="separator"> / </li>';
    if (is_category() || is_single()) {
        echo '<li>';
        the_category(' </li><li class="separator"> / </li><li> ');
        if (is_single()) {
            echo '</li><li class="separator"> / </li><li>';
            the_title();
            echo '</li>';
        }
    } elseif (is_page()) {
        if($post->post_parent){
            $anc = get_post_ancestors( $post->ID );
                 
            foreach ( $anc as $ancestor ) {
                $output = '<li><a href="'.esc_url(get_permalink($ancestor)).'" title="'.esc_attr(get_the_title($ancestor)).'">'.esc_attr(get_the_title($ancestor)).'</a></li> <li class="separator">/</li>';
            }
			echo $output;
            echo '<li title="'.esc_attr(get_the_title()).'"> '.esc_attr(get_the_title()).'</li>';
        } else {
            echo '<li> ';
            echo the_title();
            echo '</li>';
        }
    }  
elseif (is_tag()) {
	_e('Tag: ','firmness');esc_attr(single_tag_title());
}
elseif (is_day()) {echo"<li> " . __('Archive for ','firmness'); esc_attr(the_archive_title()); echo'</li>';}
elseif (is_month()) {echo"<li> " . __('Archive for ','firmness'); esc_attr(the_archive_title()); echo'</li>';}
elseif (is_year()) {echo"<li> " . __('Archive for ','firmness'); esc_attr(the_archive_title()); echo'</li>';}
elseif (is_author()) {echo"<li> " . __('Author: ','firmness'); esc_url(the_author_posts_link()); echo'</li>';}
elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li> " . __('Blog Archives ','firmness'); echo'</li>';}
elseif (is_search()) {echo"<li> " . __('Search Results ','firmness'); echo'</li>';} 
else  {echo"<li> " . __('Blog Posts ','firmness'); echo'</li>';}
echo '</ul>';
} 