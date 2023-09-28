<?php
function hj_return_saved_kundali(){
    $currentUser = get_current_user_id();
    $args = array(  
        'post_type' => 'birth-chart',
        'author' => $currentUser,
        'post_status' => 'publish',
        'posts_per_page' => 4, 
        'orderby' => 'date', 
        'order' => 'DESC', 
    );

    $loop = new WP_Query( $args );

    if($loop->have_posts()){
        
    while ( $loop->have_posts() ) : $loop->the_post();
    ?>
        <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
    <?php
        endwhile;
    } else{
        echo '<p>No kundali found. Click <a href="/kundali">here</a> to generate kundali.</p>';
    }

    wp_reset_postdata(); 
}
?>