<?php
namespace Login_With_AJAX;
/**
 * An interface for the lwa_data option stored in wp_options as a serialized array.
 * This option can hold various information which can be stored in one record rather than individual records in wp_options.
 * The functions in this class deal directly with that lwa_data option as if it was the wp_options table itself, and therefore
 * have similarities to the get_option and update_option functions.
 * @since 4.2
 *
 */
class Options {
	
	/**
	 * Get a specific setting form the EM options array. If no value is set, an empty array is provided by default.
	 * @param string $option_name
	 * @param mixed $default the default value to return
	 * @param string $dataset
	 * @param boolean $site if set to true it'll retrieve a site option in MultiSite instead
	 * @return mixed
	 */
	public static function get( $option_name, $default = array(), $dataset = 'lwa_data', $site = false ){
		$data = $site ? get_site_option($dataset) : get_option($dataset);
		if( isset($data[$option_name]) ){
			return $data[$option_name];
		}else{
			return $default;
		}
	}
	
	/**
	 * Set a value in the EM options array. Returns result of storage, which may be false if no changes are made.
	 * @param string $option_name
	 * @param mixed $option_value
	 * @param string $dataset
	 * @param boolean $site if set to true it'll retrieve a site option in MultiSite instead
	 * @return boolean
	 */
	public static function set( $option_name, $option_value, $dataset = 'lwa_data', $site = false ){
		$data = $site ? get_site_option($dataset) : get_option($dataset);
		if( empty($data) ) $data = array();
		$data[$option_name] = $option_value;
		return $site ? update_site_option($dataset, $data) : update_option($dataset, $data);
	}
	
	/**
	 * Adds a value to an specific key in the EM options array, and assumes the option name is an array.
	 * Returns true on success or false saving failed or if no changes made.
	 * @param string $option_name
	 * @param string $option_key
	 * @param mixed $option_value
	 * @param string $dataset
	 * @param boolean $site
	 * @return boolean
	 */
	public static function add( $option_name, $option_key, $option_value, $dataset = 'lwa_data', $site = false ){
		$data = $site ? get_site_option($dataset) : get_option($dataset);
		if( empty($data[$option_name]) ){
			$data[$option_name] = array( $option_key => $option_value );
		}else{
			$data[$option_name][$option_key] = $option_value;
		}
		return $site ? update_site_option($dataset, $data) : update_option($dataset, $data);
	}
	
	/**
	 * Removes an item from an array in the EM options array, it assumes the supplied option name is an array.
	 *
	 * @param string $option_name
	 * @param string $option_key
	 * @param string $dataset
	 * @param boolean $site
	 * @return boolean
	 */
	public static function remove( $option_name, $option_key = null, $dataset = 'lwa_data', $site = false ){
		$data = $site ? get_site_option($dataset) : get_option($dataset);
		if( $option_key === null && isset($data[$option_name]) ){
			unset($data[$option_name]);
			return $site ? update_site_option($dataset, $data) : update_option($dataset, $data);
		}elseif( !empty($data[$option_name][$option_key]) ){
			unset($data[$option_name][$option_key]);
			if( empty($data[$option_name]) ) unset($data[$option_name]);
			return $site ? update_site_option($dataset, $data) : update_option($dataset, $data);
		}
		return false;
	}
	
	/**
	 * @see Options::get()
	 * @param string $option_name
	 * @param mixed $default
	 * @param string $dataset
	 * @return boolean
	 */
	public static function site_get( $option_name, $default = array(), $dataset = 'lwa_data' ){
		return self::get( $option_name, $default, $dataset, true );
	}
	
	/**
	 * @see Options::set()
	 * @param string $option_name
	 * @param mixed $option_value
	 * @param string $dataset
	 * @return boolean
	 */
	public static function site_set( $option_name, $option_value, $dataset = 'lwa_data' ){
		return self::set( $option_name, $option_value, $dataset, true );
	}
	
	/**
	 * @see Options::add()
	 * @param string $option_name
	 * @param string $option_key
	 * @param mixed $option_value
	 * @param string $dataset
	 * @return boolean
	 */
	public static function site_add( $option_name, $option_key, $option_value, $dataset = 'lwa_data' ){
		return self::add( $option_name, $option_key, $option_value, $dataset, true );
	}
	
	/**
	 * @see Options::remove()
	 * @param string $option_name
	 * @param string $option_key
	 * @param string $dataset
	 * @return boolean
	 */
	public static function site_remove( $option_name, $option_key = null, $dataset = 'lwa_data' ){
		return self::remove( $option_name, $option_key, $dataset, true );
	}
}