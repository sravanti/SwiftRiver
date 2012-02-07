<?php defined('SYSPATH') or die('No direct access allowed.');

/**
 * Config for SwiftRiver Auth
 *
 * PHP version 5
 * LICENSE: This source file is subject to GPLv3 license 
 * that is available through the world-wide-web at the following URI:
 * http://www.gnu.org/copyleft/gpl.html
 * @author     Ushahidi Team <team@ushahidi.com> 
 * @package	   SwiftRiver - http://github.com/ushahidi/Swiftriver_v2
 * @subpackage Auth config
 * @copyright  Ushahidi - http://www.ushahidi.com
 * @license    http://www.gnu.org/copyleft/gpl.html GNU General Public License v3 (GPLv3) 
 */

return array(
	'driver'       => 'ORM',
	'api_endpoint' => 'https://50.56.193.23/api', // RiverID api endpoint
	'hash_method'  => 'sha256',
	'hash_key'     => '#&wicm`(wT6m&0f}UT*o9*V01@:?fF#D', // replace with random string
	'lifetime'     => 1209600,
	'session_key'  => 'auth_user',
	'users'        => array(),
	'exempt'       => array('admin'), // Perform local auth instead of RiverID auth for these users.
);
