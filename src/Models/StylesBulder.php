<?php
/**
 * Created by PhpStorm.
 * User: Comp1
 * Date: 2/2/2017
 * Time: 4:23 PM
 */

namespace App\Modules\Framework\Models;

use File;

class StylesBulder
{
    public $jsonPath;
    public $json_data;
    public $data;
    public $classes;

    public $prefixes = [
        'basic' => [
            'general'=>[
                'animation' => 'bsc-animation',
                'display' => 'bsc-display',
                'floating' => 'bsc-float',
            ],
            'lists'=>[
                'list_style_type' => 'bsc-list-style'
            ],
            'containers' => [
                'padding' => 'bsc-padding',
                'margins' => 'bsc-margin',
                'borders' => 'bsc-border',
                'radius' => 'bsc-radius',
                'box_shadow' => 'bsc-box-shadow',
                'background_color' => 'bsc-background-color',
                'gradient_color' => 'bsc-gradient-color',
                'pattern_color' => 'bsc-pattern-color',
            ],
            'text_parts' => [
                'text_shadow' => 'bsc-text-shadow',
                'text_size' => 'bsc-font-size',
                'text_color' => 'bsc-font-color',
                'text_height' => 'bsc-font-height',
                'heading' => 'bsc-heading',
                'text_transform' => 'bsc-font-trans',
                'text_decoration' => 'bsc-font-decor',
                'text_alignment' => 'bsc-font-align',
                'font_family' => 'bsc-font-family',
                'icon_family' => 'bsc-icon-family',
                'text_indent' => 'bsc-font-indent',
                'letter_spacing' => 'bsc-font-spacing',
                'word_spacing' => 'bsc-font-wspacing',
            ]
        ],
        "collections" => [
            'box_styles' => '@bstyle',
            'text_styles' => '@tstyle',
            'icon_styles' => '@istyle',
            'heading' => '@hstyle',
            'plain_text' => '@plstyle',
            'button_style' => '@mstyle',
            'navbar_style' => '@nstyle',
            'li_styles' => '@listyle',

        ]
    ];

    public function __construct(Classes $classes)
    {
        $this->jsonPath = base_path('app/Modules/Framework/Data/classes.json');
        $this->json_data = File::get($this->jsonPath);
        $this->data = json_decode($this->json_data, true);
        $this->classes = $classes;
    }


    public function getCurentItems($tab, $type, $sub)
    {

    }

    public function create($data, $uniqId = null)
    {
        $tab = $data['tab'];
        $type = $data['type'];
        $sub = $data['sub'];
        $css = $data['css'];
        $prefix='';
        if ($tab == 'basic') {
            $prefix = isset($this->prefixes[$tab][$type][$sub]) ? $this->prefixes[$tab][$type][$sub] . '-' : '';
        }
        if ($tab == 'collections') {
            $prefix = isset($this->prefixes[$tab][$type]) ? $this->prefixes[$tab][$type] . '-' : '';
        }
        if (isset($this->data[$tab][$type][$sub])) {
            $css = $this->keyDetector($tab, $type, $sub, $css);
        }
        foreach ($css as $key => $val) {
            $id = ($uniqId) ? $uniqId : uniqid();
            if($tab == 'component'){
                $this->data[$tab][$type][$sub][$id] = [
                    'classname' => $key,
                    'classpath' => $tab . '.' . $type . '.' . $sub . '.' . $id,
                    'identify' => 'admin',
                    "css" => $val,
                    "csssetting" => isset($data['csssetting']) ? $data['csssetting'] : [],
                    "realClass" => '.' .  $data['prefix'].'-'.$key,
                    "lesscss"=>$data['lesscss'],
                    "extra"=> isset($data['extra']) ? $data['extra'] : [],
                ];
            }else{
                $this->data[$tab][$type][$sub][$id] = [
                    'classname' => $key,
                    'classpath' => $tab . '.' . $type . '.' . $sub . '.' . $id,
                    'identify' => 'admin',
                    "css" => $val,
                    "csssetting" => isset($data['csssetting']) ? $data['csssetting'] : [],
                    "realClass" => '.' . $prefix . $key
                ];

            }

        }
        return $this->saveJson();
    }

    public function edit($data)
    {
        $tab = $data['tab'];
        $type = $data['type'];
        $sub = $data['sub'];
        $css = $data['css'];
        if ($tab == 'basic') {
            $prefix = isset($this->prefixes[$tab][$type][$sub]) ? $this->prefixes[$tab][$type][$sub] . '-' : '';
        }
        if ($tab == 'collections') {
            $prefix = isset($this->prefixes[$tab][$type]) ? $this->prefixes[$tab][$type] . '-' : '';
        }
        $classname = $data['old_classname'];
        if (isset($this->data[$tab][$type][$sub])) {
            $key = $this->findClassKeyByName($tab, $type, $sub, $classname);
            unset($this->data[$tab][$type][$sub][$key]);
            $css = $this->keyDetector($tab, $type, $sub, $css);

        }
        $uniqid = uniqid();
        $newName = key($css);

        if (isset($classname) && $classname == 'default') {
            $uniqid = 'default';
            $newName = 'default';
        }
        if($tab=='component'){
            $this->data[$tab][$type][$sub][$uniqid] = [
                'classname' => $newName,
                'classpath' => $tab . '.' . $type . '.' . $sub . '.' . $newName,
                'identify' => 'admin',
                "css" =>$css[key($css)],
                "csssetting" => isset($data['csssetting']) ? $data['csssetting'] : [],
                "realClass" => '.' . $data['prefix'].'-'.$newName,
                "lesscss"=>$data['lesscss'],
                "extra"=> isset($data['extra']) ? $data['extra'] : [],
            ];

        }else{
            $this->data[$tab][$type][$sub][$uniqid] = [
                'classname' => $newName,
                'classpath' => $tab . '.' . $type . '.' . $sub . '.' . $newName,
                'identify' => 'admin',
                "css" => $css[key($css)],
                "hover" => isset($data['hover']) ? $data['hover'] : [],
                "selected" => isset($data['selected']) ? $data['selected'] : [],
                "csssetting" => isset($data['csssetting']) ? $data['csssetting'] : [],
                "realClass" => '.' . $prefix . $newName
            ];
        }

        return $this->saveJson();
    }

    public function delete($data)
    {
        $tab = $data['tab'];
        $type = $data['type'];
        $sub = $data['sub'];
        $classname = $data['classname'];
        if (isset($this->data[$tab][$type][$sub])) {
            $key = $this->findClassKeyByName($tab, $type, $sub, $classname);
            unset($this->data[$tab][$type][$sub][$key]);
        }
        return $this->saveJson();
    }

    public function findClassKeyByName($tab, $type, $sub, $name)
    {
        foreach ($this->data[$tab][$type][$sub] as $key => $clsaa) {
            if ($name == $clsaa['classname']) {
                return $key;
            }
        }
    }

    public function saveJson()
    {
        $this->json_data = json_encode($this->data, true);
        File::put($this->jsonPath, $this->json_data);
        return $this;
    }

    protected function keyDetector($tab, $type, $sub, $css)
    {
        $array = $this->getSubClassNames($tab, $type, $sub);
        foreach ($css as $key => $val) {
            $result = false;
            for ($i = 0; ($i < count($array)); $i++) {
                if ($i) {
                    $name = $key . '_' . $i;
                } else {
                    $name = $key;
                }
                if (array_search($name, $array) === false && !$result) {
                    if ($name != $key) {
                        $css[$name] = $val;
                        unset($css[$key]);
                    }
                    $result = true;
                }
            }

        }
        return $css;
    }

    protected function getSubClassNames($tab, $type, $sub)
    {
        $array = [];
        if (isset($this->data[$tab][$type][$sub])) {
            foreach ($this->data[$tab][$type][$sub] as $class) {
                $array[] = $class['classname'];
            }
            return $array;
        }
    }

    public function getClassByPath($path)
    {
        \Config::set('classes', $this->data);
        return \Config::get('classes' . $path);
    }

    public function getItemsByType($type)
    {
        if (isset($this->data[$type])) {
            return \Response::json(['error' => false, 'data' => $this->data[$type]]);
        }
        return \Response::json(['error' => true]);
    }

    public function getStylesData($tab, $type, $sub)
    {
        $flag = true;
        $fixeds = false;
        if (isset(Classes::$basicRules[$tab][$type][$sub]) && Classes::$basicRules[$tab][$type][$sub]['status'] == 'fixed') {
            $flag = false;
            $fixeds = isset($this->classes->fixeds[$type][$sub])?$this->classes->fixeds[$type][$sub]:[];
        }
        $data = isset($this->data[$tab][$type][$sub]) ? $this->data[$tab][$type][$sub] : [];
        if ($fixeds) {
            $data = array_merge($data, $fixeds);
        }
//        if (!isset($data['default']) && $flag) {
//            $data['default'] = [
//                "classname" => "default",
//                "classpath" => "$tab.$type.$sub.default",
//                "identify" => "admin",
//                "css" => []
//            ];
//        }
        return $data;

    }
}