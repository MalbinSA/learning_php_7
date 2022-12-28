<?php
function html_img($fname, $alt = null, $height = null, $width = null){

    $url = $GLOBALS['url'] . $fname;
    $html = '<img src="' . $url . '"';
    if (isset ($alt)){
        $html .= 'alt="' . $alt . '"';
    }
    if (isset ($height)){
        $html .= 'height="' . $height . '"';
    }
    if (isset ($width)){
        $html .= 'width="' . $width . '"';
    }
    $html .= '/>';
    return $html;
}
