<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https:\\ivivelabs.com
 * @since      1.0.0
 *
 * @package    Iv_team_portfolio
 * @subpackage Iv_team_portfolio/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Iv_team_portfolio
 * @subpackage Iv_team_portfolio/admin
 * @author     ivivelabs <ivivelabs@ivivelabs.com>
 */
class Iv_team_portfolio_Admin {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {
		$this->plugin_name = $plugin_name;
		$this->version = $version;	
		$this->options1 = get_option('iv_team_portfolio_setting_options'); //add options of settings.php
	}


	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in iv_team_portfolio_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The iv_team_portfolio_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/iv_team_portfolio-admin.css', array(), $this->version, 'all' );

		//adding bootstrap
		wp_enqueue_style( $this->plugin_name."bs-css", plugin_dir_url( __FILE__ ) . 'includes/bootstrap/css/iv_bs_total_team.css', array(), $this->version, 'all' );

		//adding font awesome
		wp_enqueue_style( $this->plugin_name."fa-css", plugin_dir_url( __FILE__ ) . 'includes/font-awesome-4.5.0/css/font-awesome.min.css', array(), $this->version, 'all' );

		//adding bootstrap slider
		wp_enqueue_style( $this->plugin_name."bs-sldr-css", plugin_dir_url( __FILE__ ) . 'includes/bootstrap-slider/bootstrap-slider.css', array(), $this->version, 'all' );

		//adding pretty photo
		wp_enqueue_style( $this->plugin_name."prtPhoto-css", plugin_dir_url( __FILE__ ) . 'includes/prettyPhoto/prettyPhoto_compressed_3.1.6/css/prettyPhoto.css', array(), $this->version, 'all' );

		//adding owl
		wp_enqueue_style( $this->plugin_name."owl-css", plugin_dir_url( __FILE__ ) . 'includes/owl-carousel/owl.carousel.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in iv_team_portfolio_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The iv_team_portfolio_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/iv_team_portfolio-admin.js', array( 'jquery' ), $this->version, false );

		//adding bootstrap
		wp_enqueue_script( $this->plugin_name."bs-js", plugin_dir_url( __FILE__ ) . 'includes/bootstrap/js/bootstrap.min.js', array( 'jquery' ), $this->version, false );

		//adding bootstrap slider
		wp_enqueue_script( $this->plugin_name."bs-sldr-js", plugin_dir_url( __FILE__ ) . 'includes/bootstrap-slider/bootstrap-slider.js', array( 'jquery' ), $this->version, false );

		//adding lodash
		wp_enqueue_script( $this->plugin_name."lodash-js", plugin_dir_url( __FILE__ ) . 'includes/lodash.min.js', array( 'jquery' ), $this->version, false );

		//adding pretty photo
		wp_enqueue_script( $this->plugin_name."prtPhoto-js", plugin_dir_url( __FILE__ ) . 'includes/prettyPhoto/prettyPhoto_compressed_3.1.6/js/jquery-prettyPhoto.js', array( 'jquery' ), $this->version, false );

		//adding jscolor
		wp_enqueue_script( $this->plugin_name."jscolor-js", plugin_dir_url( __FILE__ ) . 'includes/jscolor-2.0.4/jscolor.js', array( 'jquery' ), $this->version, false );

		//adding owl
		wp_enqueue_script( $this->plugin_name."owl-js", plugin_dir_url( __FILE__ ) . 'includes/owl-carousel/owl.carousel.min.js', array( 'jquery' ), $this->version, false );

		//adding uploading image.js
		wp_enqueue_script( $this->plugin_name."upload_image-js", plugin_dir_url( __FILE__ ) . 'js/iv_team_portfolio_admin_upload_image.js', array( 'jquery' ), $this->version, false );

		//adding slider-insert row-add.js
		wp_enqueue_script( $this->plugin_name."sld-row-js", plugin_dir_url( __FILE__ ) . 'js/iv_team_portfolio-admin_slider_row.js', array( 'jquery' ), $this->version, false );

		//adding save options.js for settings page
		wp_enqueue_script( $this->plugin_name."save-settings-js", plugin_dir_url( __FILE__ ) . 'js/iv_team_portfolio_admin_save_settings.js', array( 'jquery' ), $this->version, false );

		//changing shortcode in shortcode generator page and preview
		wp_enqueue_script( $this->plugin_name."shortcode-generator-prev-js", plugin_dir_url( __FILE__ ) . 'js/iv_team_portfolio_admin_shortcode-generators_preview.js', array( 'jquery' ), $this->version, false );

	}

	//add post type
	public function iv_team_portfolio_register_my_post_types() {
		$exclude_from_search = (($this->options1['exclude_from_search'] == "yes") ? true : false);
		$single_page_activation = (($this->options1['single_page_activation'] == "yes") ? true : false);
		
		$labels = array(
        	'name' => _x($this->options1['plu_name'], 'post type general name', 'iv_team_portfolio'),
        	'add_new_item' => __( 'Add New '. $this->options1['sin_name'] , 'iv_team_portfolio'),
        	'view_item' => __( 'View '. $this->options1['sin_name'] , 'iv_team_portfolio'),
        );

		$args = array(
			'labels' => $labels,
			'hierarchical' => false,
			'public' => $single_page_activation,  //will be false when single member view inactive
			'show_in_nav_menus' => true,
			'show_in_admin_bar' => true,
			'show_ui' => true, 
			'has_archive' => true,
	        'query_var' => true,
	        'can_export' => true,
	        'exclude_from_search' => $exclude_from_search,
			'publicly_queryable' => true,
			'can_export' => true,
	        'rewrite' => true,
	        'capability_type' => 'post',
			//'supports' => array('title', 'editor', 'custom-fields', 'thumbnail'),
			'menu_icon' => 'dashicons-groups'
		);
		register_post_type( 'ivteamportfolio', $args);
	}	

	//add columns in ivteamportfolio post type
	public function iv_team_portfolio_add_column($columns){
		$new_columns = array(
			'email' => 'Email',
			'position' => 'Position',
			'id' => 'ID',
			'images' => 'Image',
			
		);
    	return array_merge($columns, $new_columns);
	}

	//Function to send data for custom columns when displaying items
	public function iv_team_portfolio_populate_column( $column) {
		if ( 'email' == $column ) {
			$email = esc_html( get_post_meta( get_the_ID(), 'meta-email', true ) );
			echo $email;
		} elseif ( 'position' == $column ) {
			$position = get_post_meta( get_the_ID(), 'meta-position', true );
			echo $position;
		} elseif ( 'images' == $column ) {
			$image = get_post_meta( get_the_ID(), 'meta-image-url', true );
			echo '<img src="' .$image. '" width= "40" height="30">';
		} elseif ( 'id' == $column ) {
			$id = get_the_ID();
			echo $id;
		}

	}

	//build single member page
	public function iv_team_portfolio_single_member_page($content){
		if(is_singular('ivteamportfolio') && $this->options1['single_page_activation']="yes") {
			include_once( 'partials/iv_team_portfolio-single_member_page.php' );
		}else{	
			return $content;
		}
	}

	//add submenu Shortcode Generator page in post type
	public function iv_team_portfolio_shortcode_menu(){
		add_submenu_page( 
	   		'edit.php?post_type=ivteamportfolio', 
	   		__('Shortcode Generator', 'iv_team_portfolio' ), 
	   		'Shortcode Generator', 
	   		'administrator',
	   		'iv_team_portfolio_shortcode_generator',  
	   		array( $this, 'iv_team_portfolio_plugin_shortcode_generator_page' ) 
	   	);
	}

	//add submenu Settings page in post type
	public function iv_team_portfolio_setting_menu(){		
		add_submenu_page( 
	   		'edit.php?post_type=ivteamportfolio', 
	   		__('Settings', 'iv_team_portfolio' ), 
	   		'Settings', 
	   		'administrator',
	   		'iv_team_portfolio_settings',  
	   		array( $this, 'iv_team_portfolio_plugin_setting_page' ) 
	   	);
	}

	//remove custom fields meta box
	/*public function iv_team_portfolio_remove_custom_fields() {
		remove_meta_box( 'postcustom', 'ivteamportfolio', 'normal' );
	}*/

	//add meta box
	public function iv_team_portfolio_info_box() {
        add_meta_box(
            'iv_team_portfolio_info_box', 
            __( 'Additional Information', 'iv_team_portfolio' ), 
            array( $this, 'iv_team_portfolio_info_box_content' ), 
            'ivteamportfolio', 
            'normal', 
            'high'
        );
    }

	//add submenu page function for Short code generator
	public function iv_team_portfolio_plugin_shortcode_generator_page(){
		include_once( 'partials/iv_team_portfolio-admin-shortcode-generator-page.php' );		
	}	

	//add submenu page function for Settings
	public function iv_team_portfolio_plugin_setting_page(){
		include_once( 'partials/iv_team_portfolio-admin-settings-page.php' );		
	}

	//save & update options for settings page by ajax
    public function saveUpdate(){  
    	//var_dump($_POST[ 'form_data' ]);
    	$form_data = array_column( $_POST[ 'form_data' ],  'value', 'name');
    		
        update_option( 'iv_team_portfolio_setting_options', $form_data );
        echo json_encode(array('code'=>'success'));
    	exit;		
	}

	//add ajax for preview team settings
    public function add_preview(){
    	$shortCode = $_POST["shortCode"];
    	
    	if(post_exists( 'Demo preview')){
			$page = get_page_by_title( 'Demo preview' ,OBJECT, 'post');
			
			$page->ID;

			$my_post = array(
		      'ID'           => $page->ID,
		      'post_title'   => 'Demo preview',
		      'post_content' => $shortCode,
		  	);

			// Update the post into the database
		  	wp_update_post( $my_post );
		}else{
			wp_insert_post(
				array(
					'post_title'    => 'Demo preview',
					'post_content'  => $shortCode
				)
			);
		}

		$page = get_page_by_title( 'Demo preview' ,OBJECT, 'post');

		$url= get_permalink($page->ID).'?preview=true?iframe=true&width=100%&height=100%';
	
    	echo json_encode(array('code'=>'success','url'=> $url));
		die();	
    }

    //add meta box function
    public function iv_team_portfolio_info_box_content( $post ) {
    	wp_nonce_field( basename( __FILE__ ), 'iv_team_portfolio_nonce' );
		$iv_team_portfolio_stored_meta = get_post_meta( $post->ID );

		//include form file
    	include_once( 'partials/iv_team_portfolio-admin-meta-box.php' );    	
    }

    //saving meta data
    public function iv_team_portfolio_info_box_save( $post_id ) {
    	// Checks save status
    	$is_autosave = wp_is_post_autosave( $post_id );
		$is_revision = wp_is_post_revision( $post_id );
		$is_valid_nonce = ( isset( $_POST[ 'iv_team_portfolio_nonce' ] ) && wp_verify_nonce( $_POST[ 'iv_team_portfolio_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
		
		// var_dump($_POST);

		// Exits script depending on save status
		if ( $is_autosave || $is_revision || !$is_valid_nonce ) {return;}
 
		// Checks for input and sanitizes/saves if needed		
		if( isset( $_POST[ 'name' ] ) ) {
			update_post_meta( $post_id, 'meta-name', sanitize_text_field( $_POST[ 'name' ] ) );
			sanitize_meta('meta-name', $_POST[ 'name' ], 'post');
		}
		if( isset( $_POST[ 'joined' ] ) ) {
			update_post_meta( $post_id, 'meta-joined', sanitize_text_field( $_POST[ 'joined' ] ) );
			sanitize_meta('meta-joined', $_POST[ 'joined' ], 'post');
		}
		if( isset( $_POST[ 'position' ] ) ) {
			update_post_meta( $post_id, 'meta-position', sanitize_text_field( $_POST[ 'position' ] ) );
			sanitize_meta('meta-position', $_POST[ 'position' ], 'post');
		}
		if( isset($_POST['email'])) {
			update_post_meta( $post_id, 'meta-email', sanitize_email( $_POST[ 'email' ] ) );
			sanitize_meta('meta-email', sanitize_email($_POST[ 'email' ]), 'post');
		}
		if( isset( $_POST[ 'web-url' ] ) ) {
			update_post_meta( $post_id, 'meta-web-url', sanitize_text_field( $_POST[ 'web-url' ] ) );
			sanitize_meta('meta-web-url', $_POST[ 'web-url' ], 'post');
		}
		if( isset( $_POST[ 'phone-no' ] ) ) {
			update_post_meta( $post_id, 'meta-phone-no',  sanitize_text_field($_POST[ 'phone-no' ]));
			sanitize_meta('meta-phone-no', $_POST[ 'phone-no' ], 'post');
		}
		if( isset( $_POST[ 'location' ] ) ) {
			update_post_meta( $post_id, 'meta-location',  sanitize_text_field($_POST[ 'location' ]));
			sanitize_meta('meta-location', $_POST[ 'location' ], 'post');
		}
		if( isset( $_POST[ 'image-url' ] ) ) {
			validate_file($_POST[ 'image-url' ]);
			update_post_meta( $post_id, 'meta-image-url', $_POST[ 'image-url' ] );
			sanitize_meta('meta-image-url', $_POST[ 'image-url' ], 'post');
		} 
		if( isset( $_POST[ 'fb-url' ] ) ) {
			update_post_meta( $post_id, 'meta-fb-url',  $_POST[ 'fb-url' ]  );
			sanitize_meta('meta-fb-url', $_POST[ 'fb-url' ], 'post');
		}
		if( isset( $_POST[ 'twitter-url' ] ) ) {
			update_post_meta( $post_id, 'meta-twitter-url', sanitize_text_field( $_POST[ 'twitter-url' ] ) );
			sanitize_meta('meta-twitter-url', $_POST[ 'twitter-url' ], 'post');
		}
		if( isset( $_POST[ 'linkedin-url' ] ) ) {
			update_post_meta( $post_id, 'meta-linkedin-url', sanitize_text_field( $_POST[ 'linkedin-url' ] ) );
			sanitize_meta('meta-linkedin-url', $_POST[ 'linkedin-url' ], 'post');
		}
		if( isset( $_POST[ 'gplus-url' ] ) ) {
			update_post_meta( $post_id, 'meta-gplus-url', sanitize_text_field( $_POST[ 'gplus-url' ] ) );
			sanitize_meta('meta-gplus-url', $_POST[ 'gplus-url' ], 'post');
		}		
		if( isset( $_POST[ 'inst-url' ] ) ) {
			update_post_meta( $post_id, 'meta-inst-url', sanitize_text_field( $_POST[ 'inst-url' ] ) );
			sanitize_meta('meta-inst-url', $_POST[ 'inst-url' ], 'post');
		}
		if( isset( $_POST[ 'pin-url' ] ) ) {
			update_post_meta( $post_id, 'meta-pin-url', sanitize_text_field( $_POST[ 'pin-url' ] ) );
			sanitize_meta('meta-pin-url', $_POST[ 'pin-url' ], 'post');
		}
		if( isset( $_POST[ 'vimeo-url' ] ) ) {
			update_post_meta( $post_id, 'meta-vimeo-url', sanitize_text_field( $_POST[ 'vimeo-url' ] ) );
			sanitize_meta('meta-vimeo-url', $_POST[ 'vimeo-url' ], 'post');
		}
		if( isset( $_POST[ 'youtube-url' ] ) ) {
			update_post_meta( $post_id, 'meta-youtube-url', sanitize_text_field( $_POST[ 'youtube-url' ] ) );
			sanitize_meta('meta-youtube-url', $_POST[ 'pin-url' ], 'post');
		}
		if( isset( $_POST[ 'skill-title' ] ) ) {
			update_post_meta( $post_id, 'meta-skill-title', sanitize_text_field( $_POST[ 'skill-title' ] ) );
			sanitize_meta('meta-skill-title', $_POST[ 'skill-title' ], 'post');
		}
		if( isset( $_POST[ 'skills' ] ) ) {
			update_post_meta( $post_id, 'meta-skills',  $_POST['skills']  );
			sanitize_meta('meta-skills', $_POST[ 'skills' ], 'post');
		}
		if( isset( $_POST[ 'skill-rates' ] ) ) {
			update_post_meta( $post_id, 'meta-skill-rates',  $_POST[ 'skill-rates' ]  );
			sanitize_meta('meta-skill-rates', $_POST[ 'skill-rates' ], 'post');
		}
		if( isset( $_POST[ 'image-urls' ] ) ) {
			update_post_meta( $post_id, 'meta-image-urls',  $_POST[ 'image-urls' ]  );
			sanitize_meta('meta-image-urls', $_POST[ 'image-urls' ], 'post');
		}		
    }

    //add taxonomy Groups
    public function iv_team_portfolio_group_positions() {
        $labels = array(
            'name' => _x( $this->options1['category'], 'taxonomy general name' ),
            'singular_name' => _x( 'Group', 'taxonomy singular name' ),
            'search_items' => __( 'Search '.$this->options1['category'] ,'iv_team_portfolio'),
            'all_items' => __( 'All '.$this->options1['category'] ,'iv_team_portfolio'),
            'parent_item' => __( 'Parent '.$this->options1['category'] ,'iv_team_portfolio'),
            'parent_item_colon' => __( 'Parent '.$this->options1['category'] ,'iv_team_portfolio'),
            'edit_item' => __( 'Edit '.$this->options1['category'] ,'iv_team_portfolio'),
            'update_item' => __( 'Update '.$this->options1['category'] ,'iv_team_portfolio'),
            'add_new_item' => __( 'Add New '.$this->options1['category'] ,'iv_team_portfolio'),
            'new_item_name' => __( 'New '.$this->options1['category'] ,'iv_team_portfolio'),
            'menu_name' => __( $this->options1['category'] ,'iv_team_portfolio'),
        );
        
        $args = array(
            'labels' => $labels,
            'hierarchical' => true,
            'query_var' => true,
        );
        
        register_taxonomy( 'iv_team_portfolio_group_position', 'ivteamportfolio', $args );
    }
}

/////////////////////////////////
/*MAKING TEAM PORTFOLIO WIDGET*/
////////////////////////////////

// use widgets_init action hook to execute custom function
add_action( 'widgets_init', 'iv_team_portfolio_register_widgets' );

function iv_team_portfolio_register_widgets() {
	register_widget( 'iv_team_portfolio_widget' );
}

//iv_team_portfolio_widget class
class iv_team_portfolio_widget extends WP_Widget {

	//process the new widget
	public function __construct() {
		$widget_ops = array(
			'classname' => 'iv_team_portfolio_widget_class',
			'description' => 'Display team members in a single member carousel'
		);
		parent::__construct( 'iv_team_portfolio_widget', 'Team Portfolio Widget', $widget_ops );
	}

	//build the widget settings form
	public function form($instance) {
		$defaults = array(
			'title' => 'My team',
		);

		$instance = wp_parse_args( (array) $instance, $defaults );

		$title = $instance['title'];
		$view_as = $instance['view_as'];

?>

	<p>Title: <input class="widefat" name="<?php echo $this->get_field_name( 'title' ); ?>"
	type="text" value="<?php echo esc_attr( $title ); ?>" > </p>
	
	<p>Display Group Members As: 
	<select class="form-control" name="<?php echo $this->get_field_name( 'view_as' ); ?>">
	<option value="list" <?php selected( $view_as, "list" ); ?>>List</option>
	<option value="image" <?php selected( $view_as, "image" ); ?>>Image</option>
	</select>
	</p>

<?php

	}

	//save the widget settings
	public function update($new_instance, $old_instance) {
		$instance = $old_instance;
		
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['view_as'] = strip_tags( $new_instance['view_as'] );

		return $instance;
	}

	//display the widget
	public function widget($args, $instance) {
		extract($args);
		echo $before_widget;
		
		//load the widget settings
		$title = apply_filters( 'widget_title', $instance['title'] );
		$view_as = empty( $instance['view_as'] ) ? '' : $instance['view_as'];
		
		if ( !empty( $title ) ) { echo $before_title . $title . $after_title; };
		if ($view_as) {
			include_once( 'partials/iv_team_portfolio-admin-widget.php' );
		}
		
		echo $after_widget;
	}
}
