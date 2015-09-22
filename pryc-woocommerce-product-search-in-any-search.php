<?php
/*
 * Plugin Name: PRyC WooCommerce: Product search in any search
 * Plugin URI: http://PRyC.pl
 * Description: Search WooCommerce product at default theme search field or any other...
 * Author: PRyC
 * Author URI: http://PRyC.pl
 * Version: 1.0.5
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

 
/* Copyright PRyC (email: kontakt@PRyC.pl)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
*/
 
 
/* CODE: */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( !function_exists("pryc_woocommerce_product_search_in_any_search") ) {
	function pryc_woocommerce_product_search_in_any_search() {
			if ( is_search() && !empty($_GET['s']) && empty($_GET['post_type'])) {
					wp_safe_redirect("/?s=" . urlencode(get_query_var('s')) . "&post_type=product");
					exit();
			}
	}
}
add_action('template_redirect', 'pryc_woocommerce_product_search_in_any_search');

/* END */



?>
