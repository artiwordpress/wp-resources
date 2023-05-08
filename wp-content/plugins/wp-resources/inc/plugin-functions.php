<?php

//Enqueue scripts
function resoures_scripts(){
	wp_enqueue_style('styel-css', plugin_dir_url(__DIR__).'assets/css/style.css');
	wp_enqueue_script('resource-scripts',plugin_dir_url(__DIR__).'assets/js/resource-scripts.js', array('jquery'),'1.0.0', true);
	wp_localize_script('resource-scripts', 'myajax', array('ajax_url' => admin_url('admin-ajax.php')));

}
add_action('wp_enqueue_scripts','resoures_scripts');

function resource_ajax(){
	$keywordqry = $_POST['query'];

	$args = array(
		'post_type' => 'resource',
		'posts_per_page' => 9,
		's' => $keywordqry
	);

	if(isset($_POST['resourcetype']) && !empty($_POST['resourcetype'])){
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'resource_type',
				'field' => 'term_id',
				'terms' => intval( $_POST['resourcetype'] ),
				'compare' => '='
			),
		);
	}
	if ( isset( $_POST['resourcetopic'] ) && ! empty( $_POST['resourcetopic'] ) ) {
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'resource_topic',
				'field' => 'term_id',
				'terms' => intval( $_POST['resourcetopic']),
				'compare' => '=',
			),
		);
	}
	$result = '';
	$res_result = new WP_Query($args);

	if($res_result->have_posts()): ?> 
		<div class="res_inner">
			<?php while($res_result->have_posts()): $res_result->the_post(); ?>
				<div class="res_box">
				<div class="res-title"><h3><?php the_title(); ?></h3></div>
	            <div class="res-type"><?php echo get_the_term_list( get_the_ID(), 'resource_type', '', ', ', '' ); ?></div>
	            <div class="res-topic"><?php echo get_the_term_list( get_the_ID(), 'resource_topic', '', ', ', '' ); ?></div>
	        </div>
				<?php endwhile; 
					else:
				$result = 'No Resource Found';
				?>
		</div>
	<?php endif; 
		wp_reset_postdata();
		echo $result;
		wp_die();
	

}
add_action('wp_ajax_resource_filter', 'resource_ajax');
add_action('wp_ajax_nopriv_resource_filter', 'resource_ajax');