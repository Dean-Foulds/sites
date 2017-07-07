<div class="page-title-row">
	<div class="row">
		<div class="small-12 columns">
			<h1 class="page-title">
				<?php
				if(get_field('spana_custom_page_title'))
				{
					the_field('spana_custom_page_title');
				} else {
					the_title("");
				}
				?>
<!--				--><?php //the_title(""); ?>
			</h1>
			<?php if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb('<p id="breadcrumbs">','</p>');
			} ?>
		</div>
	</div>
</div>