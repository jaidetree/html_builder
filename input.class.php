<?php
/**
 * An HTML Abstraction Class
 *
 * Allows a programmer to use an object oriented system to build their HTML
 * 
 * @author Jay Zawrotny <jayzawrotny@gmail.com>
 * @version 1.0
 * @package RoboStangs2011
 */
if( ! class_exists( 'HTML' ) )
{
	include THEME_LIB_DIR . 'html_builder/abstracthtml.class.php';
}
/**
 * HTML Abstraction Sub Class
 *
 * Creates the single HTML element and allowed attributes if neccesary.
 * @package RoboStangs2011
 * @subpackage HTMLClass
 */   
class HTML_input extends HTML_Tag
{
	protected function set_open_tag()
	{
		$this->open_tag = get_class( $this );
	}
	protected function set_close_tag()
	{
		$this->close_tag = false;
	}

	public function __construct($after_html = '', $before_html = '', $indent_level = '')
	{

		$this->set_attribute( 'accept' );
		$this->set_attribute( 'alt' );
		$this->set_attribute( 'checked' );
		$this->set_attribute( 'disabled' );
		$this->set_attribute( 'maxlength' );
		$this->set_attribute( 'readonly' );
		$this->set_attribute( 'size' );
		$this->set_attribute( 'src' );
		$this->set_attribute( 'type' );
		$this->set_attribute( 'value' );
		$this->set_attribute( 'name' );
	}
}
?>
