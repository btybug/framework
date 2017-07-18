<?php
/**
 * Created by PhpStorm.
 * User: Comp1
 * Date: 2/8/2017
 * Time: 2:18 PM
 */

namespace Sahakavatar\Framework\Models;

use App\Modules\Framework\Models\StylesBulder;

class CssCompiliator extends StylesBulder
{
    public function updareCss()
    {
        $css = "";
        $data = $this->data;
        foreach ($data as $tab => $value) {
            $st1 = $tab;
            $tab = explode('_', $tab);
            $tabConv = '';
            foreach ($tab as $tabName) {
                $tabConv .= substr($tabName, 0, 1);
            }

            foreach ($value as $sub => $subValue) {
                $st2 = $sub;
                $sub = explode('_', $sub);
                $subConv = '';
                foreach ($sub as $subName) {
                    $subConv .= substr($subName, 0, 1);
                }
                foreach ($subValue as $subkey => $val) {
                    $st3 = $subkey;
                    $subkey = explode('_', $subkey);
                    $subkeyConv = '';
                    foreach ($subkey as $subkeyName) {
                        $subkeyConv .= substr($subkeyName, 0, 1);
                    }
                    foreach ($val as $itmk => $item) {
                        $st4 = $itmk;
                        $classname = isset($item['classname']) ? $item['classname'] : null;
                        if ($classname) {
                            $classname = str_replace('_', '-', $classname);
                            $styles = "\r\n{";

                            foreach ($item['css'] as $st => $vl) {
                                $styles .= "\r\n $st:$vl;";
                            }
                            $styles .= "\r\n}";

                            $this->data[$st1][$st2][$st3][$st4]['realClass'] = ".$tabConv-$subConv-$subkeyConv-$classname";
                            $css .= ".$tabConv-$subConv-$subkeyConv-$classname $styles\r\n";
                        }
                    }


                }
            }
        }
        $this->saveJson();
        \File::put(base_path('app/Modules/Framework/Resources/Views/assets/base.css'), $css);
    }

    public function componentsLess()
    {
        $components = $this->data['component'];
        $classes = '';
        $less = '';
        foreach ($components as $types) {
            foreach ($types as $component) {
                foreach ($component as $variation) {
                    $classes .= isset($variation['realClass']) ? $variation['realClass'] . '{}' : '';
                    $less .= isset($variation['lesscss']) ? $variation['lesscss'] : '';
                };
            }
        };
        return ['css'=>$classes,'less'=>$less];
    }

    public function baicCssGenerator()
    {
        $css = "";
        $basics = $this->data['basic'];
        $fixeds = $this->classes->fixeds;
        $basics = array_merge($fixeds, $basics);
        foreach ($basics as $kstep1 => $basic) {
            foreach ($basic as $kstep2 => $subs) {
                echo $kstep1, " ", $kstep2, '<br>';
                foreach ($subs as $key => $class) {

                    $prefix = isset($this->prefixes['basic'][$kstep1][$kstep2]) ? $this->prefixes['basic'][$kstep1][$kstep2] : 'prefix';
                    $classname = isset($class['classname']) ? $class['classname'] : null;
                    if ($classname) {
                        $classname = str_replace('_', '-', $classname);
                        foreach ($class['css'] as $select => $vl) {
                            if (is_array($vl) && isset($this->selectors[$select])) {
                                $selector = $this->selectors[$select];
                                $styles = "{";
                                foreach ($vl as $k => $v) {

                                    $styles .= "$k:$v;";
                                }
                                $styles .= "}";
                                $css .= ".$prefix-$classname $selector $styles";
                            }
                        }
                        $this->data['basic'][$kstep1][$kstep2][$key]['realClass'] = ".$prefix-$classname";
                    }
                }
            }
        }
        return $css . $this->baicCssFixedsGenerator();
    }

    public function baicCssFixedsGenerator()
    {
        $css = "";
        $basics = $this->classes->fixeds;
        foreach ($basics as $kstep1 => $basic) {
            foreach ($basic as $kstep2 => $subs) {
                echo $kstep1, " ", $kstep2, '<br>';
                foreach ($subs as $key => $class) {

                    $prefix = isset($this->prefixes['basic'][$kstep1][$kstep2]) ? $this->prefixes['basic'][$kstep1][$kstep2] : 'prefix';
                    $classname = isset($class['classname']) ? $class['classname'] : null;
                    if ($classname) {
                        $classname = str_replace('_', '-', $classname);
                        foreach ($class['css'] as $select => $vl) {
                            if (is_array($vl) && isset($this->selectors[$select])) {
                                $selector = $this->selectors[$select];
                                $styles = "{";
                                foreach ($vl as $k => $v) {

                                    $styles .= "$k:$v;";
                                }
                                $styles .= "}";
                                $css .= ".$prefix-$classname $selector $styles";
                            }
                        }
                        $this->data['basic'][$kstep1][$kstep2][$key]['realClass'] = ".$prefix-$classname";
                    }
                }
            }
        }
        return $css;
    }

    public $selectors = ['normal' => '', 'hover' => ':hover', 'selected' => ':focus'];
//    public function stylesCssGenerator()
//    {
//        $css = "";
//        if(!isset($this->data['styles']))dd('No styles');
//        $basics = $this->data['styles'];
//        foreach ($basics as $kstep1 => $basic) {
//            $prefix = $this->prefixes['styles'][$kstep1];
//            foreach ($basic as $kstep2 => $subs) {
//                foreach ($subs as $key => $class) {
//                    $classname = isset($class['classname']) ? $class['classname'] : null;
//                    if ($classname) {
//                        $classname = str_replace('_', '-', $classname);
//
//                        foreach ($class['css'] as $select => $vl) {
//
//                            if(is_array($vl) && isset($this->selectors[$select])){
//                                $selector=$this->selectors[$select];
//                                $styles = "{";
//                                foreach ($vl as $k=>$v){
//
//                                    $styles.= "$k:$v;";
//                                }
//                                $styles .= "}";
//                                $css .= ".$prefix-$classname $selector $styles";
//                            }
//                        }
//
//
//                        $this->data['styles'][$kstep1][$kstep2][$key]['realClass'] = ".$prefix-$classname";
//
//                    }
//                }
//            }
//        }
//        return $css;
//    }

    public function cssGenerators()
    {
        $css = $this->baicCssGenerator();
        $components = $this->componentsLess();

        $css = '@import url("grid.min.css");' . $css.$components['css'];
        $this->saveJson();
        \File::put(base_path("app/Modules/Framework/Resources/Views/assets/base.min.less"), $css.$components['css']);
        return \File::put(base_path("app/Modules/Framework/Resources/Views/assets/base.min.css"), $css);

    }

    public function gridGen($css)
    {
        return \File::put(base_path("app/Modules/Framework/Resources/Views/assets/grid.min.css"), $css);
    }

    public function getGridsCss()
    {
        if (\File::exists(base_path("app/Modules/Framework/Resources/Views/assets/grid.min.css")))
            return \File::get(base_path("app/Modules/Framework/Resources/Views/assets/grid.min.css"));
        if (\File::exists(base_path("app/Modules/Framework/Resources/Views/grids/assets/css/freamwork.css")))
            return \File::get(base_path("app/Modules/Framework/Resources/Views/grids/assets/css/freamwork.css"));

    }
}