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
	include_once dirname( __FILE__ ) . '/abstracthtml.class.php';
}
if( ! class_exists( 'option' ) )
{
	include_once dirname( __FILE__ ) . '/option.class.php';
}
/**
 * HTML Abstraction Sub Class
 *
 * Creates the single HTML element and allowed attributes if neccesary.
 * @package RoboStangs2011
 * @subpackage HTMLClass
 */   
class HTML_select extends HTML_Tag
{
	var $options = array();

	protected function set_open_tag()
	{
		$this->open_tag = get_class( $this );
	}
	protected function set_close_tag()
	{
		$this->close_tag = get_class( $this );
	}

	public function __construct($options = array(), $after_html = '', $before_html = '', $indent_level = '')
	{

		$this->options = $options;

		$this->set_attribute( 'disabled' );
		$this->set_attribute( 'multiple' );
		$this->set_attribute( 'name' );
		$this->set_attribute( 'size' );
		
	}

	function compile()
	{
		$html = $this->build_open_tag();	

		foreach( $this->options as $option )
		{
			$option_tag = new option( $option['label'] );
			$option_tag->value = $option['value'];

			if( $option['selected'] )
			{
				$option_tag->selected = true;
			}

			$html .= $option_tag;
		}

		$html .= $this->build_close_tag();	

		$this->_html = $html;

		return $html;
	}
}
?>
