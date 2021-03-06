<?php
/**
 * Property Features Checkboxes
 */

/* all property features terms */
$all_features = get_terms( 'property-feature' );
$theme_search_fields = inspiry_get_search_fields();
/* features in search query */
$required_features_slugs = array();
if ( isset( $_GET['features'] ) ) {
	$required_features_slugs = $_GET['features'];
}

$features_count = count ( $all_features );
if ( true/*$features_count > 0 */) {
	?>
	<div class="clearfix"></div>

	<div class="more-option-trigger">
		<a href="#">
			<i class="fa <?php echo ( count( $required_features_slugs ) > 0 )? 'fa-minus-square-o': 'fa-plus-square-o'; ?>"></i>
			<?php
			$inspiry_search_features_title = get_option( 'inspiry_search_features_title' );
			if ( $inspiry_search_features_title ) {
				echo $inspiry_search_features_title;
			} else {
				_e( 'Looking for certain features', 'framework' );
			}
			?>
		</a>
	</div>

	<div class="more-options-wrapper clearfix <?php echo ( count( $required_features_slugs ) > 0 )? '': 'collapsed'; ?>">
		<?php
			if ( in_array ( 'min-max-area', $theme_search_fields ) && (strpos($_SERVER['REQUEST_URI'], 'prodazha') == false) ) {
	                get_template_part( 'template-parts/search-fields/min-max-area' );
	        } 

	        if ( in_array ( 'property-id', $theme_search_fields ) ) {
	                get_template_part( 'template-parts/search-fields/property-id' );
	        } 
        ?>
		<!--<?php
		foreach ($all_features as $feature ) {
			?>
			<div class="option-bar">
				<input type="checkbox"
				       id="feature-<?php echo esc_attr( $feature->slug ); ?>"
				       name="features[]"
				       value="<?php echo esc_attr( $feature->slug ); ?>"
					<?php if ( in_array( $feature->slug, $required_features_slugs ) ) { echo 'checked'; } ?> />
				<label for="feature-<?php echo esc_attr( $feature->slug ); ?>"><?php echo ucwords( $feature->name ); ?> <small>(<?php echo esc_html( $feature->count ); ?>)</small></label>
			</div>
			<?php
		}
		?>-->
	</div>
	<?php
}