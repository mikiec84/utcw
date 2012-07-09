<?php

class UTCW_Test_Config extends WP_UnitTestCase {

	function test_config_defaults()
	{

		$reflection = new ReflectionClass( 'UTCW_Config' );
		$properties = $reflection->getDefaultProperties();
		$options    = $properties[ 'options' ];

		$config   = new UTCW_Config( array() );
		$instance = $config->get_instance();

		$this->assertEquals( $options, $instance );
	}

	function test_title_ok()
	{
		$this->helper_string_ok( 'title' );
	}

	function test_title_fail()
	{
		$this->helper_string_fail( 'title' );
	}

	function test_order_ok()
	{
		$this->helper_string_ok( 'order', 'count' );
	}

	function test_order_fail()
	{
		$this->helper_string_fail( 'order', 'invalid order' );
	}

	function test_size_from_ok()
	{
		$this->helper_int_ok( 'size_from' );
	}

	function test_size_from_fail()
	{
		$this->helper_int_fail( 'size_from' );
	}

	function test_size_from_zero_fail()
	{
		$this->helper_int_fail( 'size_from', 0 );
	}

	function test_size_to_ok()
	{
		$this->helper_int_ok( 'size_to' );
	}

	function test_size_to_fail()
	{
		$this->helper_int_fail( 'size_to' );
	}

	function test_size_to_zero_fail()
	{
		$this->helper_int_fail( 'size_to', 0 );
	}

	function test_max_ok()
	{
		$this->helper_int_ok( 'max' );
	}

	function test_max_fail()
	{
		$this->helper_int_fail( 'max' );
	}

	function test_max_zero_fail()
	{
		$this->helper_int_fail( 'max', 0 );
	}

	function test_reverse_ok()
	{
		$this->helper_bool_ok( 'reverse' );
	}

	function test_reverse_fail()
	{
		$this->helper_bool_fail( 'reverse' );
	}

	function test_taxonomy_ok()
	{
		$this->helper_string_ok( 'taxonomy', 'post_tag' );
	}

	function test_taxonomy_fail()
	{
		$this->helper_string_fail( 'taxonomy', 'invalid taxonomy' );
	}

	function test_color_ok()
	{
		$this->helper_string_ok( 'color', 'random' );
	}

	function test_color_fail()
	{
		$this->helper_string_fail( 'color', 'invalid color' );
	}

	function test_letter_spacing_ok()
	{
		$this->helper_int_ok( 'letter_spacing' );
	}

	function test_letter_spacing_fail()
	{
		$this->helper_int_fail( 'letter_spacing' );
	}

	function test_word_spacing_ok()
	{
		$this->helper_int_ok( 'word_spacing' );
	}

	function test_word_spacing_fail()
	{
		$this->helper_int_fail( 'word_spacing' );
	}

	function test_case_ok()
	{
		$this->helper_string_ok( 'case', 'capitalize' );
	}

	function test_case_fail()
	{
		$this->helper_string_fail( 'case', 'invalid case' );
	}

	function test_case_sensitive_ok()
	{
		$this->helper_bool_ok( 'case_sensitive' );
	}

	function test_case_sensitive_fail()
	{
		$this->helper_bool_fail( 'case_sensitive' );
	}

	function test_minimum_ok()
	{
		$this->helper_int_ok( 'minimum' );
	}

	function test_minimum_fail()
	{
		$this->helper_int_fail( 'minimum' );
	}

	function test_minimum_zero_fail()
	{
		$this->helper_int_fail( 'minimum', 0 );
	}

	function test_tags_list_type_ok()
	{
		$this->helper_string_ok( 'tags_list_type', 'include' );
	}

	function test_tags_list_type_fail()
	{
		$this->helper_string_fail( 'tags_list_type', 'invalid type' );
	}

	function test_show_title_ok()
	{
		$this->helper_bool_ok( 'show_title' );
	}

	function test_show_title_fail()
	{
		$this->helper_bool_fail( 'show_title' );
	}

	function test_link_underline_ok()
	{
		$this->helper_optional_bool_ok( 'link_underline' );
	}

	function test_link_underline_fail()
	{
		$this->helper_optional_bool_fail( 'link_underline' );
	}

	function test_link_bold_ok()
	{
		$this->helper_optional_bool_ok( 'link_bold' );
	}

	function test_link_bold_fail()
	{
		$this->helper_optional_bool_fail( 'link_bold' );
	}

	function test_link_italic_ok()
	{
		$this->helper_optional_bool_ok( 'link_italic' );
	}

	function test_link_italic_fail()
	{
		$this->helper_optional_bool_fail( 'link_italic' );
	}

	function test_link_bg_color_ok()
	{
		$this->helper_color_ok( 'link_bg_color' );
	}

	function test_link_bg_color_fail()
	{
		$this->helper_color_fail( 'link_bg_color' );
	}

	function test_link_border_style_ok()
	{
		$this->helper_string_ok( 'link_border_style', 'dashed' );
	}

	function test_link_border_style_fail()
	{
		$this->helper_string_fail( 'link_border_style', 'invalid border style' );
	}

	function test_link_border_width_ok()
	{
		$this->helper_int_ok( 'link_border_width' );
	}

	function test_link_border_width_fail()
	{
		$this->helper_int_fail( 'link_border_width' );
	}

	function test_link_border_width_zero_ok()
	{
		$this->helper_int_ok( 'link_border_width', 0 );
	}

	function test_link_border_color_ok()
	{
		$this->helper_color_ok( 'link_border_color' );
	}

	function test_link_border_color_fail()
	{
		$this->helper_color_fail( 'link_border_color' );
	}

	function test_hover_underline_ok()
	{
		$this->helper_optional_bool_ok( 'hover_underline' );
	}

	function test_hover_underline_fail()
	{
		$this->helper_optional_bool_fail( 'hover_underline' );
	}

	function test_hover_bold_ok()
	{
		$this->helper_optional_bool_ok( 'hover_bold' );
	}

	function test_hover_bold_fail()
	{
		$this->helper_optional_bool_fail( 'hover_bold' );
	}

	function test_hover_italic_ok()
	{
		$this->helper_optional_bool_ok( 'hover_italic' );
	}

	function test_hover_italic_fail()
	{
		$this->helper_optional_bool_fail( 'hover_italic' );
	}

	function test_hover_bg_color_ok()
	{
		$this->helper_color_ok( 'hover_bg_color' );
	}

	function test_hover_bg_color_fail()
	{
		$this->helper_color_fail( 'hover_bg_color' );
	}

	function test_hover_color_ok()
	{
		$this->helper_color_ok( 'hover_color' );
	}

	function test_hover_color_fail()
	{
		$this->helper_color_fail( 'hover_color' );
	}

	function test_hover_border_style_ok()
	{
		$this->helper_string_ok( 'hover_border_style', 'groove' );
	}

	function test_hover_border_style_fail()
	{
		$this->helper_string_fail( 'hover_border_style', 'invalid border style' );
	}

	function test_hover_border_width_ok()
	{
		$this->helper_int_ok( 'hover_border_width' );
	}

	function test_hover_border_width_fail()
	{
		$this->helper_int_fail( 'hover_border_width' );
	}

	function test_hover_border_width_zero_ok()
	{
		$this->helper_int_ok( 'hover_border_width', 0 );
	}

	function test_hover_border_color_ok()
	{
		$this->helper_color_ok( 'hover_border_color' );
	}

	function test_hover_border_color_fail()
	{
		$this->helper_color_fail( 'hover_border_color' );
	}

	function test_tag_spacing_ok()
	{
		$this->helper_int_ok( 'tag_spacing' );
	}

	function test_tag_spacing_fail()
	{
		$this->helper_int_fail( 'tag_spacing' );
	}

	function test_debug_ok()
	{
		$this->helper_bool_ok( 'debug' );
	}

	function test_debug_fail()
	{
		$this->helper_bool_fail( 'debug' );
	}

	function test_days_old_ok()
	{
		$this->helper_int_ok( 'days_old' );
	}

	function test_days_old_fail()
	{
		$this->helper_int_fail( 'days_old' );
	}

	function test_days_old_zero_ok()
	{
		$this->helper_int_ok( 'days_old', 0 );
	}

	function test_line_height_ok()
	{
		$this->helper_int_ok( 'line_height' );
	}

	function test_line_height_fail()
	{
		$this->helper_int_fail( 'line_height' );
	}

	function test_separator_ok()
	{
		$this->helper_string_ok( 'separator' );
	}

	function test_prefix_ok()
	{
		$this->helper_string_ok( 'prefix' );
	}

	function test_suffix_ok()
	{
		$this->helper_string_ok( 'suffix' );
	}

	function test_prefix_empty_ok()
	{
		$this->helper_string_ok( 'prefix', '' );
	}

	function test_suffix_empty_ok()
	{
		$this->helper_string_ok( 'suffix', '' );
	}

	function test_show_title_text_ok()
	{
		$this->helper_bool_ok( 'show_title_text' );
	}

	function test_show_title_text_fail()
	{
		$this->helper_bool_fail( 'show_title_text' );
	}

	function test_authors_ok()
	{
		$this->helper_int_array_ok( 'authors' );
	}

	function test_authors_fail()
	{
		$this->helper_int_array_fail( 'authors' );
	}

	function test_authors_csv_ok()
	{
		$this->helper_array_ok( 'authors', '1,2,3' );
	}

	function test_authors_empty_ok()
	{
		$this->helper_int_array_ok( 'authors', array() );
	}

	function test_post_type_ok()
	{
		$this->helper_array_ok( 'post_type', array( 'post' ) );
	}

	function test_post_type_fail()
	{
		$this->helper_array_fail( 'post_type', array( 'invalid post type' ) );
	}

	function test_post_type_csv_ok()
	{
		// TODO: this test should include multiple values but without dynamic fetching of post types there's only one valid value
		$this->helper_array_ok( 'post_type', 'post' );
	}

	function test_color_span_from_ok()
	{
		$this->helper_color_ok( 'color_span_from' );
	}

	function test_color_span_from_fail()
	{
		$this->helper_color_fail( 'color_span_to' );
	}

	function test_color_span_to_ok()
	{
		$this->helper_color_ok( 'color_span_to' );
	}

	function test_color_span_to_fail()
	{
		$this->helper_color_fail( 'color_span_to' );
	}

	function test_tags_list_ok()
	{
		$this->helper_int_array_ok( 'tags_list' );
	}

	function test_tags_list_fail()
	{
		$this->helper_int_array_fail( 'tags_list' );
	}

	function test_unknown_attribute()
	{
		$attr              = '__unknown';
		$instance[ $attr ] = 'value';
		$config            = new UTCW_Config( $instance );
		$this->assertFalse( isset( $config->$attr ) );
	}

	private function helper_string_ok( $option, $ok_string = 'test' )
	{
		$instance[ $option ] = $ok_string;
		$config              = new UTCW_Config( $instance );
		$this->assertEquals( $config->$option, $instance[ $option ] );
	}

	private function helper_string_fail( $option, $fail_string = '' )
	{
		$instance[ $option ] = $fail_string;
		$config              = new UTCW_Config( $instance );
		$this->assertNotEquals( $config->$option, $instance[ $option ] );
	}

	private function helper_int_ok( $option, $ok_int = 10 )
	{
		$instance[ $option ] = $ok_int;
		$config              = new UTCW_Config( $instance );
		$this->assertEquals( $config->$option, $instance[ $option ] );
	}

	private function helper_int_fail( $option, $fail_int = 'fail' )
	{
		$instance[ $option ] = $fail_int;
		$config              = new UTCW_Config( $instance );
		$this->assertNotEquals( $config->$option, $instance[ $option ] );
	}

	private function helper_bool_ok( $option, $ok_bool = true )
	{
		$instance[ $option ] = $ok_bool;
		$config              = new UTCW_Config( $instance );
		$this->assertEquals( $config->$option, $instance[ $option ] );
	}

	private function helper_bool_fail( $option, $fail_bool = 'fail' )
	{
		$instance[ $option ] = $fail_bool;
		$config              = new UTCW_Config( $instance );
		$this->assertNotEquals( $config->$option, $instance[ $option ] );
	}

	private function helper_optional_bool_ok( $option, $ok_opt_bool = 'yes' )
	{
		$instance[ $option ] = $ok_opt_bool;
		$config              = new UTCW_Config( $instance );
		$this->assertEquals( $config->$option, $instance[ $option ] );
	}

	private function helper_optional_bool_fail( $option, $fail_opt_bool = 'fail' )
	{
		$instance[ $option ] = $fail_opt_bool;
		$config              = new UTCW_Config( $instance );
		$this->assertNotEquals( $config->$option, $instance[ $option ] );
	}

	private function helper_int_array_ok( $option, $ok_int_array = array( 1, 2, 3 ) )
	{
		$instance[ $option ] = $ok_int_array;
		$config              = new UTCW_Config( $instance );
		$this->assertEquals( $config->$option, $instance[ $option ] );
	}

	private function helper_int_array_fail( $option, $fail_int_array = array( 'fail', 'more fail' ) )
	{
		$instance[ $option ] = $fail_int_array;
		$config              = new UTCW_Config( $instance );
		$this->assertNotEquals( $config->$option, $instance[ $option ] );
	}

	private function helper_color_ok( $option, $ok_color = '#bada55' )
	{
		$instance[ $option ] = $ok_color;
		$config              = new UTCW_Config( $instance );
		$this->assertEquals( $config->$option, $instance[ $option ] );
	}

	private function helper_color_fail( $option, $fail_color = 'invalid color' )
	{
		$instance[ $option ] = $fail_color;
		$config              = new UTCW_Config( $instance );
		$this->assertNotEquals( $config->$option, $instance[ $option ] );
	}

	private function helper_array_ok( $option, $ok_array = array( 'test' ) )
	{
		$instance[ $option ] = $ok_array;
		$config              = new UTCW_Config( $instance );

		$result = is_array( $ok_array ) ? $ok_array : explode( ',', $ok_array );

		$this->assertEquals( $config->$option, $result );
	}

	private function helper_array_fail( $option, $fail_array = 'not an array' )
	{
		$instance[ $option ] = $fail_array;
		$config              = new UTCW_Config( $instance );
		$this->assertNotEquals( $config->$option, $instance[ $option ] );
	}
}