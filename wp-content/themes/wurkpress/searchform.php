<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<div class="row collapse">
		<div class="small-9 columns">
			<label>
				<!--		<span class="screen-reader-text">--><?php //echo _x( 'Search SPANA...', 'label', 'jointswp' ) ?><!--</span>-->
				<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search...', 'jointswp' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'jointswp' ) ?>" />
			</label>
		</div>
		<div class="small-3 columns">
			<input type="submit" class="search-submit button hide-for-small-only" value="<?php echo esc_attr_x( 'Search', 'jointswp' ) ?>" />
			<input type="submit" class="search-submit button show-for-small-only" value='Go' />
			</div>
	</div>
</form>
