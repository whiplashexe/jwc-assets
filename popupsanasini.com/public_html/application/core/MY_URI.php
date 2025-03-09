<?php 
class MY_URI extends CI_URI {

    /**
     * Filter URI
     *
     * Filters segments for malicious characters.
     *
     * @param   string  $str
     * @return  void
     */
    public function filter_uri(&$str)
    {
        if ( ! empty($str) && ! empty($this->_permitted_uri_chars) && ! preg_match('/^['.$this->_permitted_uri_chars.']+$/i'.(UTF8_ENABLED ? 'u' : ''), $str))
        {
            return preg_replace('~[^a-zA-Z 0-9%.:_\-,()]+~', '', $str);
        }
    }
}