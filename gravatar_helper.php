<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* CodeIgniter Gravatar Helper
*
* @package      CodeIgniter
* @subpackage   Helpers
* @category     Helpers
* @author       Michael Dennis
* @version      1.0
*/

/** 
 * Gravatar
 * 
 * Fetches gravatar images from gravatar.com
 * 
 * @access  public
 * @param   string $email
 * @param   array $options
 * @return  string
 * 
 * Gravatar options
 * s = size (default : 80)
 *     options : 1 - 512
 * d = default (default : mm)
 *     options : 404, mm, identicon, monsterid, wavatar, retro
 * f = forcedefault (default : null)
 *     options : y
 * r = rating (default : null)
 *     options : g, pg, r, x
 * 
 * Example
 * echo gravatar('user@example.com', array('s' => 150))
 */
if ( ! function_exists('gravatar'))
{
    function gravatar($email = '', $options = array())
    {
        $url = isset($_SERVER['HTTPS']) ? 'https://secure.' : 'http://www.';
        $url .= 'gravatar.com/avatar/';
        $url .= md5( strtolower( trim( $email ) ) );
        
        if(is_array($options) && array_key_exists('s', $options))
        {
            $url .= '?s=' . $options['s'];
        }
        else
        {
            $url .= '?s=80';
        }

        if(is_array($options) && array_key_exists('d', $options))
        {
            $url .= '&d=' . urlencode($options['d']);
        }
        else
        {
            $url .= '&d=mm';
        }

        if(is_array($options) && array_key_exists('f', $options))
        {
            $url .= '&f=y';
        }

        if(is_array($options) && array_key_exists('r', $options))
        {
            $url .= '&r=' . $options['r'];
        }

        return $url;
    }
}

// ------------------------------------------------------------------------

/* End of file gravatar_helper.php */
/* Location: ./application/helpers/gravatar_helper.php */