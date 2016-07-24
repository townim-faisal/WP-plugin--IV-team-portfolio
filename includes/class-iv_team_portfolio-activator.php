<?php

/**
 * Fired during plugin activation
 *
 * @link       https:\\ivivelabs.com
 * @since      1.0.0
 *
 * @package    Iv_team_portfolio
 * @subpackage Iv_team_portfolio/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Iv_team_portfolio
 * @subpackage Iv_team_portfolio/includes
 * @author     ivivelabs <ivivelabs@ivivelabs.com>
 */
class Iv_team_portfolio_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		$options1 = array(
                  'template'              => 'template-1',        //Team Settings
                  'display_content'       => 'yes',
                  'display_social_icon'   => 'yes',
                  'display_skills'        => 'yes',
                  'icons_style'           => '',
                  'main_color'            => '1F7DCF',  
                  'name_font_size'        => 16,
                  'content_font_size'     => 15,
                  'image_width'           => 480,
                  'image_height'          => 360,
                  'single_page_activation'=> yes,
                  'exclude_from_search'   => yes,
                  'mail_to'               => yes,
                  'tel_to'                => yes,
                  'custom_css'            => '',
                  'custom_js'             => '',
                  'sin_name'              => 'Member',            //Feature Names
                  'plu_name'              => 'Team Portfolio',
                  'category'              => 'Groups' ,
                  'template2'		      => 'standard', //Single Member View Settings                  
                  'multiple_images'       => 'yes',
                  'joined_date'           => 'yes',
                  'address'               => 'yes',
                  'social_icon2'          => 'yes',
                  'display_skills2'       => 'yes',        
            );
            
            add_option( 'iv_team_portfolio_setting_options', $options1 );          
            flush_rewrite_rules();      
	}

}
