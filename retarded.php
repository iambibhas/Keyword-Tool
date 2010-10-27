<?php
/**
 * The Retarded Framework
 * Collection of retarded functions
 *
 * @version 0.1
 * @author Bibhas Chandra Debnath
 */
class Retarded {

	/**
	 * Our array of objects
	 * @access private
	 */
	private static $objects = array();

	/**
	 * Our array of settings
	 * @access private
	 */
	private static $settings = array();

	/**
	 * The frameworks human readable name
	 * @access private
	 */
	private static $frameworkName = 'The Retarded Framework version 0.1';

	/**
	 * The instance of the registry
	 * @access private
	 */
	private static $instance;

	/**
	 * Private constructor to prevent it being created directly
	 * @access private
	 */
	private function __construct()
	{

	}

	/**
	 * Stores settings in the registry
	 * @param String $data
	 * @param String $key the key for the array
	 * @return void
	 */
	public function storeSetting( $data, $key )
	{
		self::$settings[ $key ] = $data;

	}

	/**
	 * Gets a setting from the registry
	 * @param String $key the key in the array
	 * @return void
	 */
	public function getSetting( $key )
	{
		return self::$settings[ $key ];
	}

	/**
	 * Gets the frameworks name
	 * @return String
	 */
	public function getFrameworkName()
	{
		return self::$frameworkName;
	}

}

?>
