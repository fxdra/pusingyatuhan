<?php
function generate_breadcrumb()
{
    $CI =& get_instance();
    $CI->load->helper('url');
    $segments = $CI->uri->segment_array();
    
    $breadcrumb = '<div class="breadcrumbs">';
    $breadcrumb .= '<a href="' . base_url() . '" title="Back to the home page">Home</a>';

    $path = '';
    foreach ($segments as $key => $segment) {
        $path .= $segment . '/';
        
        // Check if this is the last segment
        if ($key == count($segments)) {
            $breadcrumb .= '<span class="main-title fw-bold"><i class="icon anm anm-angle-right-l"></i>' . ucfirst($segment) . '</span>';
        } else {
            $breadcrumb .= '<span class="title"><i class="icon anm anm-angle-right-l"></i><a href="' . site_url($path) . '">' . ucfirst($segment) . '</a></span>';
        }
    }

    $breadcrumb .= '</div>';

    return $breadcrumb;
}
