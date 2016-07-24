<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       https:\\ivivelabs.com
 * @since      1.0.0
 *
 * @package    Iv_team_portfolio
 * @subpackage Iv_team_portfolio/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Iv_team_portfolio
 * @subpackage Iv_team_portfolio/includes
 * @author     ivivelabs <ivivelabs@ivivelabs.com>
 */
class Iv_team_portfolio {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Iv_team_portfolio_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */

	protected $options1;

	public function __construct() {

		$this->plugin_name = 'iv_team_portfolio';
		$this->version = '1.0.0';
		$this->options1 = get_option('iv_team_portfolio_setting_options'); //add options of settings.php

		$this->load_dependencies();
		$this->set_locale();
		$this->define_admin_hooks();
		$this->define_public_hooks();

		$this->add_shortcodes(); //add shortcodes

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Iv_team_portfolio_Loader. Orchestrates the hooks of the plugin.
	 * - Iv_team_portfolio_i18n. Defines internationalization functionality.
	 * - Iv_team_portfolio_Admin. Defines all hooks for the admin area.
	 * - Iv_team_portfolio_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {

		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-iv_team_portfolio-loader.php';

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-iv_team_portfolio-i18n.php';

		/**
		 * The class responsible for defining all actions that occur in the admin area.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-iv_team_portfolio-admin.php';

		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-iv_team_portfolio-public.php';

		$this->loader = new Iv_team_portfolio_Loader();

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Iv_team_portfolio_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale() {

		$plugin_i18n = new Iv_team_portfolio_i18n();

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_admin_hooks() {

		$plugin_admin = new Iv_team_portfolio_Admin( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );

		//showing post types
		$this->loader->add_action( 'init', $plugin_admin, 'iv_team_portfolio_register_my_post_types' );

		//adding coloums in ivteamportfolio post type
		$this->loader->add_filter( 'manage_ivteamportfolio_posts_columns', $plugin_admin, 'iv_team_portfolio_add_column' );

		//Remove custom fields meta box
		//$this->loader->add_action('do_meta_boxes', $plugin_admin, 'iv_team_portfolio_remove_custom_fields');

		//Send data for custom columns when displaying items
		$this->loader->add_action('manage_posts_custom_column', $plugin_admin, 'iv_team_portfolio_populate_column', 10, 2);

		//build single member page
		$this->loader->add_filter( 'the_content', $plugin_admin, 'iv_team_portfolio_single_member_page' );

		//showing sub menu Shortcode Generator pages in admin panel
		$this->loader->add_action('admin_menu', $plugin_admin, 'iv_team_portfolio_shortcode_menu'); 

		//showing sub menu Settings pages in admin panel
		$this->loader->add_action('admin_menu', $plugin_admin, 'iv_team_portfolio_setting_menu'); 

		//adding meta box in post type
		$this->loader->add_action('add_meta_boxes', $plugin_admin, 'iv_team_portfolio_info_box');

		//saving meta data
		$this->loader->add_action('save_post', $plugin_admin, 'iv_team_portfolio_info_box_save');

		//adding taxonomy Group
		$this->loader->add_action( 'init', $plugin_admin, 'iv_team_portfolio_group_positions' );

		//adding ajax for preview
		$this->loader->add_action( 'wp_ajax_add_preview', $plugin_admin, 'add_preview' );

		//adding ajax for saving & updating options in setting page
		$this->loader->add_action( 'wp_ajax_saveUpdate', $plugin_admin, 'saveUpdate' );

	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_public_hooks() {

		$plugin_public = new Iv_team_portfolio_Public( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );

	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run() {
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_plugin_name() {
		return $this->plugin_name;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     1.0.0
	 * @return    Iv_team_portfolio_Loader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}

	//Shortcodes
	public function add_shortcodes(){
		add_shortcode('new-me', array($this,'iv_team_portfolio_shortcodes'));
	}


	public function iv_team_portfolio_shortcodes($atts){
		
		extract( shortcode_atts( 
			array(
	            'group'       		=> '',
	            'template'    		=> '',
	            'order_by'			=> '', 
	            'order'				=> '',
	            'no_entries_display'=> '',
	            'pagination'		=> '',
	            'post_id'			=> '',
	            'post_id_exclude'	=> '',
	            'display'			=> '',
	            'sin_page_link'		=> '',
	            'coloumn'			=> '',
	            'image_style'		=> '',
	            'animateOut'		=> '',
	            'animateIn'			=> ''
	        ), $atts ) 
		);

		//arguments for query
		function returnlimit() {
			return 'LIMIT '.$no_entries_display;
		}

		add_filter('post_limits', 'returnlimit');
		
		$args = array(
		            'post_type' 	 => 'ivteamportfolio',
		            'post_status'    => 'publish',		            	
		            'order'			 => $order,
		            'orderby'		 => $order_by,
		            'posts_per_page' => $no_entries_display,
		            'nopaging'		 => true,   
		            //'ignore_sticky_posts'=>true       
		        );

		remove_filter('post_limits', 'returnlimit');

		//for filtering groups by shortcode
		if(!empty($group)){
			if(strpos($group, "all")!==false) {
				$args;
			}else{
				$args['tax_query'] = array(
									array(
										'taxonomy' => 'iv_team_portfolio_group_position',
										'field'    => 'name',
										'terms'    => explode(", ",$group),
									)
								);
			}
		}

		//for showing post id by shortcode
		if(!empty($post_id)){
			$args['post__in'] = explode(",",$post_id);
		}

		//for not showing post id by shortcode
		if(!empty($post_id_exclude)){
			$args['post__not_in'] = explode(",", $post_id_exclude);
		}

		//for showing display options by shoortcode
        if(!empty($display)){
			$display_arr = explode(", " , $display);
		}

        global $content;

        ob_start();

        //var_dump($template);

        if( $template == '' ) {
            if($this->options1['template']=='template-1'||$this->options1['template']=='template-2'||$this->options1['template']=='template-3'):
				include( plugin_dir_path( dirname( __FILE__ ) ) . 'includes/template/grid.php');
			endif;

			if($this->options1['template']=='filter_button'||$this->options1['template']=='filter_text'):
				include( plugin_dir_path( dirname( __FILE__ ) ) . 'includes/template/filtering.php');
			endif;

			if($this->options1['template']=='carousel_dot'||$this->options1['template']=='carousel_button'):
				include( plugin_dir_path( dirname( __FILE__ ) ) . 'includes/template/carousel.php');
			endif;
        }elseif($template=='template-1'||$template=='template-2'||$template=='template-3'){
			include( plugin_dir_path( dirname( __FILE__ ) ) . 'includes/template/grid.php');
		}elseif($template=='filter_button'||$template=='filter_option'||$template=='filter_text'){
			include( plugin_dir_path( dirname( __FILE__ ) ) . 'includes/template/filtering.php');
		}elseif($template=='carousel_dot'||$template=='carousel_button'){
			include( plugin_dir_path( dirname( __FILE__ ) ) . 'includes/template/carousel.php');
        }    
        
        $output = ob_get_clean();
        
        return $output;    
	}

	//Email Obfuscate by PHP
	public function getObfuscatedEmailAddress($email){
	    $alwaysEncode = array('.', ':', '@');

	    $result = '';

	    // Encode string using oct and hex character codes
	    for ($i = 0; $i < strlen($email); $i++){
	        // Encode 25% of characters including several that always should be encoded
	        if (in_array($email[$i], $alwaysEncode) || mt_rand(1, 100) < 25){
	            if (mt_rand(0, 1)){
	                $result .= '&#' . ord($email[$i]) . ';';
	            }
	            else{
	                $result .= '&#x' . dechex(ord($email[$i])) . ';';
	            }
	        }
	        else{
	            $result .= $email[$i];
	        }
	    }

	    return $result;
	}

	public function hide_email($email, $params = array()){ 			
	    if (!is_array($params)){
	        $params = array();
	    }

	    // Tell search engines to ignore obfuscated uri
	    if (!isset($params['rel'])){
	        $params['rel'] = 'nofollow';
	    }

	    $neverEncode = array('.', '@', '+'); // Don't encode those as not fully supported by IE & Chrome

	    $urlEncodedEmail = '';
	    for ($i = 0; $i < strlen($email); $i++){
	        // Encode 25% of characters
	        if (!in_array($email[$i], $neverEncode) && mt_rand(1, 100) < 25){
	            $charCode = ord($email[$i]);
	            $urlEncodedEmail .= '%';
	            $urlEncodedEmail .= dechex(($charCode >> 4) & 0xF);
	            $urlEncodedEmail .= dechex($charCode & 0xF);
	        }
	        else{
	            $urlEncodedEmail .= $email[$i];
	        }
	    }

	    $obfuscatedEmail = $this->getObfuscatedEmailAddress($email);
	    $obfuscatedEmailUrl = $this->getObfuscatedEmailAddress('mailto:' . $urlEncodedEmail);

	    foreach ($params as $param => $value){
	        $obfuscatedEmailUrl .= '" ' . $param . '="' . htmlspecialchars($value) ;
	    }
	    
	    return $obfuscatedEmailUrl;
	}

}
