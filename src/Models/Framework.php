<?php
/**
 * Created by PhpStorm.
 * User: Comp1
 * Date: 3/24/2017
 * Time: 4:47 PM
 */

namespace Sahakavatar\Framework\Models;

//use Sahakavatar\Cms\Helpers\helpers;
use Illuminate\Database\Eloquent\Model;
use Zipper;

/**
 * Class Framework
 * @package Sahakavatar\Framework\Models
 */
class Framework extends Model
{

    const INACTIVE_VERSION = 0;
    const ACTIVE_VERSION = 1;
    const FINAL_ACTIVE_VERSION = 2;
    /**
     * @var
     */
    private static $uf;
    private static $ext = 'css';
    protected $table = 'frameworks';
    protected $guarded = ['id'];

    public static function activate($id)
    {
        self::where('active', self::FINAL_ACTIVE_VERSION)->update(['active' => self::ACTIVE_VERSION]);
        self::where('id', $id)->update(['active' => self::FINAL_ACTIVE_VERSION]);

    }

    public static function activeCss()
    {
        $framework = self::where('active', self::FINAL_ACTIVE_VERSION)->first();
        if (!$framework) return null;
        return \Html::style('Framework/versions/' . $framework->version . '/css/main.css');
    }

    public static function customCss()
    {
        return \Html::style('Framework/custom.css');
    }

    public static function activeJs()
    {
        if (\File::exists(public_path('/Framework/main.js'))) {
            return \Html::script('Framework/main.js?v=' . time());
        }
        return null;
    }

    public static function makeFrameworkCss($data, $name)
    {
        $imports = (isset($data['imports'])) ? $data['imports'] : [];
        $configurators = (isset($data['configurators'])) ? $data['configurators'] : [];
        $css = '';
        if (count($imports)) {
            foreach ($imports as $class) {
                if (isset($class['css_data']))
                    $css .= $class['css_data'];
            }
        }

        if (count($configurators)) {
            foreach ($configurators as $conf) {
                $css .= $conf['css_data'];
            }
        }

        $ds = DS;
        if (!\File::isDirectory(public_path("Framework{$ds}versions{$ds}{$name}"))) {
            \File::makeDirectory(public_path("Framework{$ds}versions{$ds}{$name}"));
        }

        if (!\File::isDirectory(public_path("Framework{$ds}versions{$ds}{$name}{$ds}css"))) {
            \File::makeDirectory(public_path("Framework{$ds}versions{$ds}{$name}{$ds}css"));
        }

        $path = public_path("Framework{$ds}versions{$ds}{$name}{$ds}css{$ds}main.css");
        \File::put($path, $css);
        return $css;
    }

    public static function getStatus($status)
    {
        switch ($status) {
            case self::ACTIVE_VERSION:
                return 'Active';
            case self::FINAL_ACTIVE_VERSION:
                return 'Active';
            default:
                return 'Inactive';
        }
    }

    public static function getDataType($type)
    {

        $result = NULL;
        switch ($type) {
            case 'framework':
                $result = 'Main Classes';
                break;
            case 'classes':
                $result = 'Custom Classes';
                break;
        }
        return $result;
    }

    public function scopeActive($query)
    {
        return $query->where('active', self::FINAL_ACTIVE_VERSION);
    }

    public function upload($file)
    {
        $ds = DS;
        $extension = $file->getClientOriginalExtension(); // getting image extension
        if ($extension != 'zip') return ['error' => true, 'message' => 'Framework version should be zip file'];
        $fileOriginalName = $file->getClientOriginalName();
        $name = str_replace('.' . $extension, '', $fileOriginalName);
        $this->uploadPath = public_path("Framework{$ds}versions");

        $componentName = $fileOriginalName;
        $componentPath = $this->uploadPath . DS . $componentName;
        $file->move($this->uploadPath, $componentName); // uploading file to given path
        try {
            Zipper::make($this->uploadPath . DS . $fileOriginalName)
                ->extractTo($this->uploadPath);
        } catch (\Exception $exception) {
            return ['error' => true, 'message' => $exception->getMessage()];
        }
        self::create(['version' => $name]);
        return ['error' => false, 'message' => 'Version uploaded'];

    }

    public function references($type, $p, $isConfig = true)
    {
        if ($isConfig) {
            return $this->referenceQuery($type, $p, $isConfig);
        } else {
            return $this->referenceCustomQuery($type, $p);
        }

    }

    public function referenceQuery($type, $p)
    {
        $query = [
            'basic' => [
                'general' => $this->configuratorsBymenus(['animation', 'color', 'position', 'display', 'visibility', 'floating', 'clear', 'cursor', 'opacity', 'z_index', 'filter', 'list_style']),
                'text_parts' => $this->configuratorsBymenus(['text_size', 'text_height', 'text_indent', 'text_shadow', 'color', 'text_decoration', 'text_alignment', 'text_transform', 'word_break', 'direction', 'word_spacing', 'letter_spacing']),
                'container_parts' => $this->configuratorsBymenus(['border_color', 'borders', 'radius', 'margins', 'paddings', 'box_shadow', 'overflow', 'box_sizing', 'width', 'height', 'background_color', 'gradient_color', 'pattern_color']),
                'foundation' => $this->configuratorsBymenus(['foundation']),
//                'foundation' =>
//                    $this->configurators()
//                        ->where('type', 'foundation')->leftJoin('configurator_classes', 'configurator.id', '=', 'configurator_classes.configurator_id')
//                        ->get(),
//                'grid' => $this->imports()->where('type', 'grids')->first()

            ],
            'global' => [
                'text' => $this->importsByMenus(['global_col'], $p, $type),
                'container' => $this->importsByMenus(['global_col'], $p, $type),
                'image' => $this->importsByMenus(['global_col'], $p, $type),
                'lists' => $this->importsByMenus(['global_col'], $p, $type),
                'full_studio' => $this->importsByMenus(['global_col'], $p, $type)
            ],
//            'component' => [
//                'group_buttons' => $this->imports()->where('section', 'component_class')->where('sub_type', 'group_buttons')->get(),
//                'table' => $this->imports()->where('section', 'component_class')->where('sub_type', 'table')->get(),
//                'menu' => $this->imports()->where('section', 'component_class')->where('sub_type', 'menu')->get(),
//                'list' => $this->imports()->where('section', 'component_class')->where('sub_type', 'list')->get()
//            ],
//            'element' => $this->imports()->where('section', 'element_classes')->where('sub_type', $p)->get()
        ];
        if (isset($query[$type][$p])) {
            return $query[$type][$p];
        } elseif (isset($query[$type]) && is_object($query[$type])) {
            return $query[$type];
        }
    }

    public function configuratorsBymenus($menus, $isConfig = true)
    {
        $data = [];
        if ($isConfig) {
            $config = $this->getConfigByVersion();
            if (!isset($config['data'])) return $data;
            $config = $config['data'];
            if (isset($config['configurators'])) {
                foreach ($config['configurators'] as $key => $value) {
                    if (isset($value['configurator']) && in_array($value['configurator']['type'], $menus)) {
                        $data[] = $value;
                    }
                }
            }
        } else {
            $config = $this->getCustomConfigByVersion();
            if (count($config)) {
                foreach ($config as $key => $value) {
                    if (isset($value['configurator']) && in_array($value['configurator']['type'], $menus)) {
                        $data[] = $value;
                    }
                }
            }
        }

        return $data;
    }

    public function getConfigByVersion()
    {
        $ds = DS;
        $path = public_path("Framework{$ds}versions{$ds}{$this->version}");
        $configFile = $path . $ds . 'config.json';
        $configFile = \File::get($configFile);
        return json_decode($configFile, true);
    }

    public function getCustomConfigByVersion()
    {
        $ds = DS;
        $path = public_path("Framework{$ds}versions{$ds}{$this->version}");
        $configFile = $path . $ds . 'custom.json';
        if (!\File::exists($configFile)) return [];
        $configFile = \File::get($configFile);
        return json_decode($configFile, true);
    }

    public function importsByMenus($menus, $p, $type)
    {
        $config = $this->getConfigByVersion();
        $data = [];
        if (!isset($config['data'])) return $data;
        $config = $config['data'];

        if (isset($config['imports'])) {
            foreach ($config['imports'] as $key => $value) {
                if ($value['sub_type'] == $p) {
                    $data[] = $value;
                }
            }
        }

        return $data;
    }

    public function referenceCustomQuery($type, $p)
    {

        $query = $this->configuratorsBymenus([$type], false);

        if (isset($query[$type][$p])) {
            return $query[$type][$p];
        } elseif (isset($query[$type]) && is_object($query[$type])) {
            return $query[$type];
        }
    }

    public function uploadCustomClass($file)
    {
        $result = self::uploadAndMoveCss($file);
        if (\File::exists(self::$uf . $result)) {
            $css = \File::get(self::$uf . $result);
            $readyClasses = self::returnContents($css);
            $data = $this->saveCustomClasses($readyClasses, $css);
            \File::delete(self::$uf . $result);
            if ($data) {
                return $this->makeCss($data);
            }
        }
        return false;
    }

    public static function uploadAndMoveCss($file)
    {
        self::$uf = "app/Modules/Framework/Uploads/";
        $originalFileName = $file->getClientOriginalName();
        $fileNmae = str_replace(self::$ext, "", $originalFileName);
        if ($file->move(self::$uf, $originalFileName)) {
            return $originalFileName;
        }
        return false;
    }

    public static function returnContents($string)
    {
        $string = helpers::after("*/", $string);
        $classStart = '.';
        $classEnd = '{';
        $cssStart = '{';
        $cssEnd = '}';
        $classesMatches = self::getContents($string, $classStart, $classEnd);
        $cssMatches = self::getContents($string, $cssStart, $cssEnd);
        return array_combine($classesMatches, $cssMatches);
    }

    public static function getContents($str, $startDelimiter, $endDelimiter)
    {
        $contents = array();
        $startDelimiterLength = strlen($startDelimiter);
        $endDelimiterLength = strlen($endDelimiter);
        $startFrom = $contentStart = $contentEnd = 0;
        while (false !== ($contentStart = strpos($str, $startDelimiter, $startFrom))) {
            $contentStart += $startDelimiterLength;
            $contentEnd = strpos($str, $endDelimiter, $contentStart);
            if (false === $contentEnd) {
                break;
            }
            $contents[] = trim(substr($str, $contentStart, $contentEnd - $contentStart));
            $startFrom = $contentEnd + $endDelimiterLength;
        }

        return $contents;
    }

    public function saveCustomClasses($data, $css)
    {
        $custom = $this->getCustomJson();
        $dataFromComment = $this->makeArray(array_first(self::getContents($css, "/*", "*/")));
        if (count($data)) {
            foreach ($data as $className => $css) {
                if (!isset($custom[$className])) {
                    (isset($dataFromComment['items'][$className]) && isset($dataFromComment['items'][$className]['name'])) ? $name = array_first($dataFromComment['items'][$className]['name']) : $name = $className;
                    (isset($dataFromComment['items'][$className]) && isset($dataFromComment['items'][$className]['type'])) ? $type = array_last($dataFromComment['items'][$className]['type']) : $type = 'others';

                    $custom[$className] = [
                        "class" => $className,
                        "css_data" => $css,
                        "data_type" => "css",
                        "created_at" => null,
                        "configurator" => [
                            "type" => $type,
                            "name" => $name,
                            "shortcut" => null,
                        ]
                    ];
                }
            }

            return $this->generateCustomConfigFile($custom);
        }

        return false;
    }

    public function getCustomJson()
    {
        $ds = DS;
        $path = public_path("Framework{$ds}versions{$ds}{$this->version}{$ds}custom.json");
        if (!\File::exists($path)) {
            \File::put($path, json_encode([], true));
            return [];
        }

        return json_decode(\File::get($path), true);
    }

    protected function makeArray($data)
    {
        $explode = explode('@', $data);
        if (isset($explode[0]) && empty($explode[0])) {
            unset($explode[0]);
        };


        $newArray = [];
        foreach ($explode as $values) {
            $values = explode('=', $values);
//            if (isset($values[0]) && isset($values[1]) && array_search($values[0], $this->htmlCommentNidles) !== false) {
            if (isset($values[0]) && isset($values[1]))
                $newArray[$values[0]] = $values[1];
//            }

        }
        foreach ($newArray as $key => $value) {
            $key = preg_replace('/\s+/', '', $key);
            $value = preg_replace('/\s+/', '', $value);
            $keyexplod = explode('.', $key);
            if (isset($keyexplod[1]) && $keyexplod[1] == 'json') {
                $newArray[$keyexplod[0]] = json_decode($value, true);
                unset($newArray[$key]);
            } else {
                $array = explode(',', $value);
                if (isset($array[1])) {
                    $newArray[$key] = $array;
                }
            }
        }

        return $newArray;
    }

    public function generateCustomConfigFile($data)
    {
        $ds = DS;
        $path = public_path("Framework{$ds}versions{$ds}{$this->version}{$ds}custom.json");
        if (\File::exists($path)) {
            \File::put($path, json_encode($data, true));
            return $data;
        }

        return false;
    }

    public function makeCss($data)
    {
        $ds = DS;
        $css_file = public_path("Framework{$ds}versions{$ds}{$this->version}{$ds}css{$ds}custom.css");
        $content = '';
        if (count($data)) {
            foreach ($data as $item) {
                $content .= '.' . $item['class'] . '{' . $item['css_data'] . '}';
            }
        }

        if (\File::put($css_file, $content)) {
            return true;
        }

        return false;
    }

    public function getCollectionsByVersion()
    {
        $ds = DS;
        $path = public_path("Framework{$ds}versions{$ds}{$this->version}");
        $collectionFile = $path . $ds . 'collections.json';
        if (\File::isFile($collectionFile)) {
            $collections = \File::get($collectionFile);
            return json_decode($collections, true);
        }
        return false;
    }

    public function getMainClassesByVersion()
    {
        $ds = DS;
        $path = public_path("Framework{$ds}versions{$ds}{$this->version}");
        $collectionFile = $path . $ds . 'config.json';
        if (\File::isFile($collectionFile)) {
            $classes = \File::get($collectionFile);
//            dd(json_decode($classes, true));
            return json_decode($classes, true);
        }
        return false;
    }

    public function getCollectionsByType($type)
    {
        $collections = Collections::where('active', self::ACTIVE_VERSION)->where('type', 'custom')->get();
        $result = [];
        if (count($collections)) {
            foreach ($collections as $collection) {
                $data = is_array($collection->data) ? $collection->data : json_decode($collection->data, true);
                $result[$collection->id] = array_key_exists($type, $data) ? $data[$type] : NULL;
            }
        }
        return $result;
    }

    public function getMasterCollectionsByType($type)
    {
        $collection = Collections::where('active', self::FINAL_ACTIVE_VERSION)->where('type', 'master')->first();
        if ($collection) {
            return array_key_exists($type, $collection->data) ? $collection->data[$type] : NULL;
        }
        return NULL;
    }
}