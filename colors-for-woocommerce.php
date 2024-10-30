<?php
/*
Plugin Name: Colors For WooCommerce
Plugin URI: http://seosthemes.com/colors-for-woocommerce
Description: Simple WordPress Plugin - Colors For WooCommerce.
Version: 1.0
Contributors: seosbg
Author: seosbg
Author URI: http://seosthemes.com/
Text Domain: colors-for-woocommerce
*/


// ************* User Section **************

add_action('admin_menu', 'colors_for_woocommerce_menu');

function colors_for_woocommerce_menu() {
	add_menu_page('Colors For WooCommerce', 'Colors For WooCommerce', 'administrator', 'colors-for-woocommerce-settings', 'colors_for_woocommerce_settings_page', plugins_url( 'images/icon.png' , __FILE__  ));
}

add_action( 'admin_init', 'colors_for_woocommerce_settings' );

function colors_for_woocommerce_settings() { 
	for ($i=1; $i<=5; $i++){
		register_setting( 'colors-for-woocommerce-settings-group', 'color'.$i );
	}
 }
	
/*********************** Admin Scripts and Styles **************************/

function colors_for_woocommerce_admin_scripts() {
    wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script( 'wp-color-picker-script', plugins_url('js/script.js', __FILE__ ), array( 'wp-color-picker' ), false, true );	
	wp_enqueue_style( 'colors-for-woocommerce-admin-css', plugin_dir_url(__FILE__) . '/css/admin.css' );
}
 
add_action( 'admin_enqueue_scripts', 'colors_for_woocommerce_admin_scripts' );	


function colors_for_woocommerce_settings_page() {
?>

<form action="options.php" method="post" role="form" name="colors-for-woocommerce">

	<?php settings_fields( 'colors-for-woocommerce-settings-group' ); ?>
	<?php do_settings_sections( 'colors-for-woocommerce-settings-group' ); ?>
			
	<div class="colors-for-woocommerce">

		<div class="colors-for-woocommerce-seos">
			<div>
				<a target="_blank" href="https://seosthemes.com/">
					<div class="btn s-red">
						 <?php _e('SEOS ', 'colors-for-woocommerce'); echo ' <img class="ss-logo" src="' . plugins_url( 'images/logo.png' , __FILE__ ) . '" alt="logo" />';  _e(' THEMES', 'colors-for-woocommerce'); ?>
					</div>
				</a>
			</div>
		</div>	
		<div>
		<h2>Colors For WooCommerce</h2>
		<table>
			<tr>
				<td><label><?php _e('Button Background Color','colors-for-woocommerce'); ?></label></td>
				<td><input type="text" value="<?php echo get_option('color1'); ?>" name="color1" class="wp-color-picker-field" data-default-color="" /></td>
			</tr>
			<tr>
				<td><label><?php _e('Button Background Hover Color','colors-for-woocommerce'); ?></label></td>
				<td><input type="text" value="<?php echo get_option('color2'); ?>" name="color2" class="wp-color-picker-field" data-default-color="" /></td>
			</tr>			
			<tr>
				<td><label><?php _e('Button Color','colors-for-woocommerce'); ?></label></td>
				<td><input type="text" value="<?php echo get_option('color3'); ?>" name="color3" class="wp-color-picker-field" data-default-color="" /></td>
			</tr>
			<tr>
				<td><label><?php _e('Button Hover Color','colors-for-woocommerce'); ?></label></td>
				<td><input type="text" value="<?php echo get_option('color4'); ?>" name="color4" class="wp-color-picker-field" data-default-color="" /></td>
			</tr>
			<tr>
				<td><label><?php _e('Price Color','colors-for-woocommerce'); ?></label></td>
				<td><input type="text" value="<?php echo get_option('color5'); ?>" name="color5" class="wp-color-picker-field" data-default-color="" /></td>
			</tr>			
		</table>

		</div>
	</div>
	<?php submit_button(); ?>
</form>
<?php }

	function colors_for_woocommerce_language_load() {
		load_plugin_textdomain('colors_for_woocommerce_language_load', FALSE, basename(dirname(__FILE__)) . '/languages');
	}
	add_action('init', 'colors_for_woocommerce_language_load');
	
		function colors_for_woocommerce_css() { ?>
			
			<style> 
			.woocommerce ul.products li.product .buttonр.woocommerce a.button.alt,
			.woocommerce button.button.alt, .woocommerce input.button.alt,
			.woocommerce #respond input#submit.altр
			.woocommerce a.button, .woocommerce button.button, .woocommerce input.button,
			.woocommerce #respond input#submit, .woocommerce a.button.alt, .woocommerce button.button.alt,
			.woocommerce input.button.alt,.woocommerce ul.products li.product .button, 
			.woocommerce #respond input#submit.alt{ background: <?php echo get_option('color1'); ?> !important; }
					
			.woocommerce ul.products li.product .buttonр.woocommerce a.button.alt:hover,
			.woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,
			.woocommerce #respond input#submit.alt:hover,.woocommerce ul.products li.product .button:hover, 
			.woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,
			.woocommerce #respond input#submit:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover,
			.woocommerce input.button.alt:hover,
			.woocommerce #respond input#submit.alt:hover { background: <?php echo get_option('color2'); ?> !important; }
					
			.woocommerce ul.products li.product .buttonр.woocommerce a.button.alt,
			.woocommerce button.button.alt, .woocommerce input.button.alt,
			.woocommerce #respond input#submit.altр
			.woocommerce a.button, .woocommerce button.button, .woocommerce input.button,
			.woocommerce #respond input#submit, .woocommerce a.button.alt, .woocommerce button.button.alt,
			.woocommerce input.button.alt,.woocommerce ul.products li.product .button, 
			.woocommerce #respond input#submit.alt { color: <?php echo get_option('color3'); ?> !important; }
					
			.woocommerce ul.products li.product .buttonр.woocommerce a.button.alt:hover,
			.woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,
			.woocommerce #respond input#submit.alt:hover,.woocommerce ul.products li.product .button:hover, 
			.woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,
			.woocommerce #respond input#submit:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover,
			.woocommerce input.button.alt:hover,
			.woocommerce #respond input#submit.alt:hover	{ color: <?php echo get_option('color4'); ?> !important; }

			.woocommerce div.product span.price, .woocommerce div.product p.price,
			.woocommerce ul.products li.product .price { color: <?php echo get_option('color5'); ?> !important; }	
			</style>
			
		<?php } 
		
		add_action('wp_head','colors_for_woocommerce_css');
	