<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https:\\ivivelabs.com
 * @since      1.0.0
 *
 * @package    Iv_team_portfolio
 * @subpackage Iv_team_portfolio/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Iv_team_portfolio
 * @subpackage Iv_team_portfolio/public
 * @author     ivivelabs <ivivelabs@ivivelabs.com>
 */
class Iv_team_portfolio_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Iv_team_portfolio_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Iv_team_portfolio_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/iv_team_portfolio-public.css', array(), $this->version, 'all' );

		//adding bootstrap
		wp_enqueue_style( $this->plugin_name."bs-css", plugin_dir_url( __FILE__ ) . 'includes/bootstrap/css/iv_bs_total_team.css', array(), $this->version, 'all' );

		//adding set1 hover effect
		wp_enqueue_style( $this->plugin_name."hover1-css", plugin_dir_url( __FILE__ ) . 'includes/HoverEffectIdeas/HoverEffectIdeas/css/set1.css', array(), $this->version, 'all' );

		//adding set2 hover effect
		wp_enqueue_style( $this->plugin_name."hover2-css", plugin_dir_url( __FILE__ ) . 'includes/HoverEffectIdeas/HoverEffectIdeas/css/set2.css', array(), $this->version, 'all' );

		//adding ihover
		wp_enqueue_style( $this->plugin_name."ihover-css", plugin_dir_url( __FILE__ ) . 'includes/ihover.min.css', array(), $this->version, 'all' );

		//adding font awesome
		wp_enqueue_style( $this->plugin_name."fa-css", plugin_dir_url( __FILE__ ) . 'includes/font-awesome-4.5.0/css/font-awesome.min.css', array(), $this->version, 'all' );

		//adding owl
		wp_enqueue_style( $this->plugin_name."owl-css", plugin_dir_url( __FILE__ ) . 'includes/owl-carousel/owl.carousel.css', array(), $this->version, 'all' );

		//adding owl
		wp_enqueue_style( $this->plugin_name."owl-theme-css", plugin_dir_url( __FILE__ ) . 'includes/owl-carousel/owl.theme.default.min.css', array(), $this->version, 'all' );

		//adding animate for owl carousel
		wp_enqueue_style( $this->plugin_name."animate-owl-css", plugin_dir_url( __FILE__ ) . 'includes/owl-carousel/animate.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Iv_team_portfolio_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Iv_team_portfolio_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/iv_team_portfolio-public.js', array( 'jquery' ), $this->version, false );

		//adding bootstrap
		wp_enqueue_script( $this->plugin_name."bs-js", plugin_dir_url( __FILE__ ) . 'includes/bootstrap/js/bootstrap.min.js', array( 'jquery' ), $this->version, false );

		//adding lodash
		wp_enqueue_script( $this->plugin_name."lodash-js", plugin_dir_url( __FILE__ ) . 'includes/lodash.min.js', array( 'jquery' ), $this->version, false );

		//adding isotope
		wp_enqueue_script( $this->plugin_name."isotope-js", plugin_dir_url( __FILE__ ) . 'includes/isotope-pkgd-min.js', array( 'jquery' ), $this->version, false );

		//adding owl
		wp_enqueue_script( $this->plugin_name."owl-js", plugin_dir_url( __FILE__ ) . 'includes/owl-carousel/owl.carousel.min.js', array( 'jquery' ), $this->version, false );


	}

}
