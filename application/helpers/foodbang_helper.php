<?php

defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('min_of_read')) {

    function min_of_read($title, $content)
    {
        $c_title = strlen($title);
        $c_content = strlen(strip_tags($content));

        $result = ($c_title + $c_content) / 130;

        return Ceil($result);
    }
}