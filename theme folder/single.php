 /* TO BE ADDED AFTER THE_CONTENT();  */

<h3>Players</h3>
			 
			 <?php $terms = get_the_terms( $post->ID , 'goalkeeper' );
			 if($terms) {
			     foreach( $terms as $term_name ) { ?>
			     <dl class="players">
			    		<dt class="players_name">
			     		<?php echo $term_name->name.""; ?>
			     	</dt>
			     	<dd class="players_stars">
			     		<div id="rate_<?php echo $term_name->term_id.""; ?><?php the_ID('');?>" class="stars"></div>
			     	</dd>
			     </dl>
			  <?php } } ?>
			  
			  <?php $terms = get_the_terms( $post->ID , 'defender' );
			  if($terms) {
			      foreach( $terms as $term_name ) { ?>
			      <dl class="players">
			     		<dt class="players_name">
			      		<?php echo $term_name->name.""; ?>
			      	</dt>
			      	<dd class="players_stars">
			      		<div id="rate_<?php echo $term_name->term_id.""; ?><?php the_ID('');?>" class="stars"></div>
			      	</dd>
			      </dl>
			  <?php } } ?>
			  
			  <?php $terms = get_the_terms( $post->ID , 'midfielder' );
			  if($terms) {
			      foreach( $terms as $term_name ) { ?>
			      <dl class="players">
			     		<dt class="players_name">
			      		<?php echo $term_name->name.""; ?>
			      	</dt>
			      	<dd class="players_stars">
			      		<div id="rate_<?php echo $term_name->term_id.""; ?><?php the_ID('');?>" class="stars"></div>
			      	</dd>
			      </dl>
			<?php } } ?>
			
			<?php $terms = get_the_terms( $post->ID , 'forward' );
			if($terms) {
			    foreach( $terms as $term_name ) { ?>
			    <dl class="players">
			   		<dt class="players_name">
			    		<?php echo $term_name->name.""; ?>
			    	</dt>
			    	<dd class="players_stars">
			    		<div id="rate_<?php echo $term_name->term_id.""; ?><?php the_ID('');?>" class="stars"></div>
			    	</dd>
			    </dl>
			 <?php } } ?>
			 
			 <h3>Substitutes</h3>
			
			<?php $terms = get_the_terms( $post->ID , 'subs' );
			if($terms) {
			    foreach( $terms as $term_name ) { ?>
			    <dl class="players">
			   		<dt class="players_name">
			    		<?php echo $term_name->name.""; ?>
			    	</dt>
			    	<dd class="players_stars">
			    		<div id="rate_<?php echo $term_name->term_id.""; ?><?php the_ID('');?>" class="stars"></div>
			    	</dd>
			    </dl>
			 <?php } } ?>

			  <?php endwhile; ?>
