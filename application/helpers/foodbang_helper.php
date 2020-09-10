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

if (!function_exists('dy_link')) {

    function dy_link($slug, $type)
    {

        switch ($type) {
            case 1:
                $link = 'news/detail/' . $slug;
                break;
            case 2:
                $link = 'catlist/detail/' . $slug;
                break;
            case 3:
                $link = 'umkm/detail/' . $slug;
                break;
            case 4:
                $link = 'stfood/detail/' . $slug;
                break;
            case 5:
                $link = 'hltfood/detail/' . $slug;
                break;
            case 6:
                $link = 'promo?id_promo=' . $slug;
                break;
            default:
                $link = '';
                break;
        }
        return $link;
    }
}