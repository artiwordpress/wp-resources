<div class="resource_filter_section">
	<form class="resource_filters" id="resource_filters" method="post">
			<select id="resourcetype" name="resourcetype">
			<option value="">-- Select Resource Type --</option>
			<?php
			         $res_types = get_terms( array(
			             'taxonomy' => 'resource_type',
			             'hide_empty' => false,
			         ) );
			         foreach ( $res_types as $res_type ) {
			             echo '<option value="' . $res_type->term_id . '">' . $res_type->name . '</option>';
			         }
			         ?>
			</select>
			<select id="resourcetopic" name="resourcetopic">
			<option value="">-- Select Resource Topic --</option>
			<?php
			         $res_topics = get_terms( array(
			             'taxonomy' => 'resource_topic',
			             'hide_empty' => false,
			         ) );
			         foreach ( $res_topics as $res_topic ) {
			             echo '<option value="' . $res_topic->term_id . '">' . $res_topic->name . '</option>';
			         }
			         ?>
			</select>
			<input type="text" name="keywords" id="keywords" placeholder="Keywords">
			<button id="filterbtn" name="filterbtn">Filter</button>
	</form>

	<?php 
		$args = array(
			'post_type' => 'resource',
			'posts_per_page' => 9
		);
		$all_res = new WP_Query($args);
		
	?>
	<div id="resource_list" class="resource_list">
			<?php if($all_res->have_posts()): ?>
			<div class="res_inner">
				<?php while($all_res->have_posts()): $all_res->the_post(); ?>
					<div class="res_box">
					<div class="res-title"><h3><?php the_title(); ?></h3></div>
		            <div class="res-type"><?php echo get_the_term_list( get_the_ID(), 'resource_type', '', ', ', '' ); ?></div>
		            <div class="res-topic"><?php echo get_the_term_list( get_the_ID(), 'resource_topic', '', ', ', '' ); ?></div>
		        </div>
					<?php endwhile; ?>
			</div>
			<?php endif; ?>
		</div>
	</div>