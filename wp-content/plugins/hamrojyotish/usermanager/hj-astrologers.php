<?php
function hj_return_astrologers(){
    $args = array(  
        'post_type' => 'astrologers',
        'post_status' => 'publish',
        'posts_per_page' => -1, 
        'orderby' => 'title', 
        'order' => 'ASC', 
    );

    $loop = new WP_Query( $args );

    if($loop->have_posts()){    
		while ( $loop->have_posts() ) : $loop->the_post(); 
			$contact_num = get_post_meta(get_the_ID(), '_contact_number', true);
			$bio = get_post_meta(get_the_ID(), '_bio', true);
			?>
			<div class="card">
				<img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" style="width:100%" />

				<div class="container">
					<h4><?php the_title(); ?></h4>
					<a href="tel:<?php echo $contact_num; ?>"><?php echo $contact_num ?></a>
					<p><?php echo $bio; ?></p>
				</div>
			</div>
		<?php
		endwhile;
    } else{
    ?>
        <p>अहिले कुनै ज्योतिष आबद्ध छैनन्।</p>
    <?php
    }

    wp_reset_postdata(); 
}
?>