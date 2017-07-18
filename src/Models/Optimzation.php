<?php namespace Sahakavatar\Framework\Models;

/**
 * Created by PhpStorm.
 * User: shojan
 * Date: 1/29/2017
 * Time: 5:21 AM
 */
class Optimzation
{
    private static $classTypes = ['default', 'classic', 'prestige'];
    private static $containersClasses = ['main-container', 'page-container', 'text-container', 'icon-container', 'image-container', 'panel'];
    private static $headersClasses = ['h1', 'h2', 'h3', 'h4', 'h5', 'h6'];

    public static function generateHeaderClasses()
    {
        $dirs = base_path('app/Modules/Framework/Classes/header');
        foreach (self::$headersClasses as $class) {
            foreach (self::$classTypes as $type) {
                if (!\File::isDirectory($dirs .'/'.$class)) {
                    \File::makeDirectory($dirs .'/'.$class);
                }
                $content = "/*container-$class-$type  class*/\r\n\r\n.container-$class-$type{\r\n }";
                \File::put($dirs .'/'.$class. '/' . $type . '.css', $content);
            }
        }
    }

    public static function generateContainerClasses()
    {
        $dirs = base_path('app/Modules/Framework/Classes/container');
        foreach (self::$containersClasses as $class) {
            foreach (self::$classTypes as $type) {
                if (!\File::isDirectory($dirs .'/'.$class)) {
                    \File::makeDirectory($dirs .'/'.$class);
                }
                $content = "/*container-$class-$type  class*/\r\n\r\n.container-$class-$type{\r\n }";
                \File::put($dirs .'/'.$class. '/' . $type . '.css', $content);
            }
        }
    }
}