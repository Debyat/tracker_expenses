<?php
/**
 * File Versioning js and css
 */
if (!function_exists('_ver')) {
    function _ver($file)
    {
        $rtn = $file;

        if (file_exists(public_path($file))) {
            $timestamp = filemtime($file);
            $rtn = asset($file . '?v=' . $timestamp);
        }

        return $rtn;
    }
}

