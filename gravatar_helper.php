<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter Gravatar Helper
 *
 * @package      CodeIgniter
 * @subpackage   Helpers
 * @category     Helpers
 * @author       Michael Dennis
 * @version      1.0.0
 */

if(!function_exists('gravatar')) {
    /**
     * Get gravatar image
     *
     * @access  public
     * @param   string $email
     * @param   array $options
     * @return  string
     */
    function gravatar($email = '', $options = array()) {
        $url = isset($_SERVER['HTTPS']) ? 'https://secure.' : 'http://www.';
        $url .= 'gravatar.com/avatar/';
        $url .= md5(strtolower(trim($email)));

        if(is_array($options)) {
            if(array_key_exists('s', $options)) {
                $url .= '?s='.$options['s'];
            } else {
                $url .= '?s=80';
            }

            if(array_key_exists('d', $options)) {
                $url .= '&d='.urlencode($options['d']);
            } else {
                $url .= '&d=mm';
            }

            if(array_key_exists('f', $options)) {
                $url .= '&f=y';
            }

            if(array_key_exists('r', $options)) {
                $url .= '&r='.$options['r'];
            }
        }

        return $url;
    }
}

// ------------------------------------------------------------------------

/* End of file gravatar_helper.php */
/* Location: ./application/helpers/gravatar_helper.php */
