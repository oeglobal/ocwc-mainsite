<?php
	$members = get_country_members();
?>
<?php get_header(); ?>
	<div class="row">
		<div class="large-9 columns">
			<table>
			<?php foreach ($members as $member) : ?>
				<tr>
					<td class="tableblue"><?php echo $member->name; ?></td>
					<td><?php echo $member->membership_type; ?></td>
					<td><?php echo $member->associate_consortium; ?></td>
				</tr>
			<?php endforeach; ?>
			</table>
		</div>
	</div>
<?php get_footer(); ?>