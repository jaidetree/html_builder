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
	include dirname( __FILE__ ) . '/abstracthtml.class.php';
}
/**
 * HTML Abstraction Sub Class
 *
 * Creates the single HTML element and allowed attributes if neccesary.
 * @package RoboStangs2011
 * @subpackage HTMLClass
 */   
class HTML_img extends HTML_Tag
{
	protected function set_open_tag()
	{
		$this->open_tag = get_class( $this );
	}
	protected function set_close_tag()
	{
		$this->close_tag = false;
	}

	public function __construct($content = '', $after_html = '', $before_html = '', $indent_level = '')
	{
		$this->set_attribute( 'src' );
		$this->set_attribute( 'width' );
		$this->set_attribute( 'height' );
		$this->set_attribute( 'alt' );
		$this->set_attribute( 'ismap' );
		$this->set_attribute( 'longdesc' );
		$this->set_attribute( 'usemap' );
	}
}
?>
