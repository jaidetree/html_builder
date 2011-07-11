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
class HTML_element extends HTML_Tag
{
	var $tag_name;

	protected function set_open_tag()
	{
		$this->open_tag = $this->tag_name;
	}
	protected function set_close_tag()
	{
		$this->close_tag = $this->tag_name;
	}

	public function __construct($content = '')
	{
		
	}
}
?>
