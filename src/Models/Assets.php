<?php
/**
 * Created by PhpStorm.
 * User: Comp1
 * Date: 2/28/2017
 * Time: 1:37 PM
 */

namespace App\Modules\Framework\Models;


class Assets
{
    public static $mainSubs = [
        'fonts' => 'google',
        'editors' => 'tinymce'
    ];

    public static function getMainSub($type)
    {
        return isset(self::$mainSubs[$type]) ? self::$mainSubs[$type] : null;
    }

    public static function fontAvefomeJson()
    {
        $path = "app" . DS . "Modules" . DS . "Framework" . DS . "Data" . DS . "favesome.json";
        $json = \File::get(base_path($path));
        return $json;
    }
}