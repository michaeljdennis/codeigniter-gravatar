<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter Gravatar Helper
 * 
 * Parameter 1: email address
 * Parameter 2: return gravatar url wrapped in image tag? (default : FALSE)
 * Parameter 3: array of gravatar options
 *     s = size (default : 80)
 *         options : 1 - 512
 *     d = default (default : mm)
 *         options : 404, mm, identicon, monsterid, wavatar, retro
 *     f = forcedefault (default : null)
 *         options : y
 *     r = rating (default : null)
 *         options : g, pg, r, x
 * Parameter 4: array of image attributes
 * 
 * Example: get_gravatar('user@example.com', TRUE, array('s' => 150), array('id' => 'avatar')
 * 
 * TODO: https (https://secure.gravatar.com/), validate email
 */
if ( ! function_exists('get_gravatar'))
{
    function get_gravatar($email, $image_tag = FALSE, $options = array(), $attrs = array())
    {
        $url = 'http://www.gravatar.com/avatar/';
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
            $url .= '&d=' . $options['d'];
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
        
        $image = $url;
        
        if($image_tag == TRUE)
        {
            $image = '<img src="' . $url . '" ';
            
            if(is_array($attrs) && !empty($attrs))
            {
                foreach($attrs as $k => $v)
                {
                    $image .= $k . '="' . $v . '" ';
                }
            }
            
            $image .= '/>';
        }

        return $image;
    }
}

// ------------------------------------------------------------------------

/* End of file gravatar_helper.php */
/* Location: ./application/helpers/gravatar_helper.php */