<?php $audience = get_field('audience'); ?>

<header class="entry-header audience-<?php the_field('audience_color', $audience); ?>">
	<h2 class="audienceHeader audience-color">
		<span class="infomap-card-icon audience-background"><i class="fa <?php the_field('audience_icon', $audience); ?>"></i></span>
		<?php echo $audience->post_title; ?>
	</h2>

	<h1 class="entry-title audience-color"><?php the_title(); ?></h1>
</header>
<div class="entry-content audience-<?php the_field('audience_color', $audience); ?>">
	<?php if ( get_field('audience_image', $audience ) ) : ?>
		<div class="row">
			<div class="col-sm-9">
				<?php the_content(); ?>
			</div>
			<div class="col-sm-3">
				<img class="img-responsive img-circle" src="<?php echo get_field('audience_image', $audience )['sizes']['medium-square']; ?>" />
			</div>
		</div>
	<?php else: ?>
		<div class="row">
			<div class="col-md-10">
				<?php the_content(); ?>
			</div>
		</div>
	<?php endif; ?>

	<?php if ( get_field('topic_questions') ) : ?>
		<?php foreach (get_field('topic_questions') as $post) : ?>
			<?php setup_postdata($post); ?>

			<div class="row">
				<div class="col-md-10">
					<h2 class="audience-color"><?php the_title(); ?></h2>
					<?php the_content(); ?>
				</div>
			</div>		

			<?php if ( get_field('question_resources') ) : ?>
				<div class="row">
				<?php global $resource; ?>
				<?php foreach (get_field('question_resources') as $resource) : ?>
					<?php get_template_part('partials/_resource_item'); ?>
				<?php endforeach; ?>
				</div>
			<?php endif; ?>

		<?php endforeach; ?>
		<?php wp_reset_postdata(); ?>
	<?php endif; ?>

	<?php if ( get_field('topic_related_resources') ) : ?>
		<div class="row">
			<div class="col-sm-12">
				<h2>Related resources</h2>
			</div>
			<?php global $resource; ?>
			<?php foreach (get_field('topic_related_resources') as $resource) : ?>
				<?php get_template_part('partials/_resource_item'); ?>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>
</div>