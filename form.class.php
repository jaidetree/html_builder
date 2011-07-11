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
class HTML_form extends HTML_Tag
{
	protected function set_open_tag()
	{
		$this->open_tag = get_class( $this );
	}
	protected function set_close_tag()
	{
		$this->close_tag = get_class( $this );
	}

	public function __construct($content = '', $after_html = '', $before_html = '', $indent_level = '')
	{
		
		$this->set_attribute( 'accept' );
		$this->set_attribute( 'accept-charset' );
		$this->set_attribute( 'enctype' );
		$this->set_attribute( 'method' );
		$this->set_attribute( 'action' );
		$this->set_attribute( 'name' );
		$this->set_attribute( 'target' );

	}
}
?>
