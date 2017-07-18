<?php
/**
 * Created by PhpStorm.
 * User: shojan
 * Date: 4/15/2017
 * Time: 9:38 PM
 */

namespace Sahakavatar\Framework\Models;


use Illuminate\Database\Eloquent\Model;

class CustomClasses extends Model
{
    const INACTIVE_VERSION = 0;
    const ACTIVE_VERSION = 1;
    const FINAL_ACTIVE_VERSION = 2;

    protected $table = 'custom_classes';
    protected $guarded = ['id'];
    protected $casts = [
        'data' => 'array',
    ];

    public function upload($file)
    {
        $extension = $file->getClientOriginalExtension(); // getting image extension
        if ($extension != 'json') return ['error' => true, 'message' => 'class should be json file'];

        $uf = "app/Modules/Framework/Uploads/";
        $originalFileName = $file->getClientOriginalName();
        $fileNmae = str_replace($extension, "", $originalFileName);
        if ($file->move($uf, $originalFileName)) {
            $file = \File::get($uf.$originalFileName);
            \File::delete($uf.$originalFileName);
            return ['error' => false, 'data' => $file];
        }
        return ['error' => true, 'message' => 'try again'];
    }

    public function generateCss()
    {
        $classes = self::all();
        $ds = DS;
        $css = '';
        if(count($classes)){
            foreach ($classes as $class){
                if($class->data && $class->active){
                    $data = $class->data;
                    if($data){
                        foreach ($data as $item){
                            if(isset($item['css_data']) && isset($item['active']) && $item['css_data'])
                                $css .= $item['css_data'];
                        }
                    }

                }
            }
        }
        \File::put(public_path("Framework{$ds}custom.css"), $css,true);
    }

    public static function references($type,$p)
    {
        $menus = self::referenceQuery($type,$p);
        $configs = self::where('active','!=',0)->get();
        $data = [];
        if(count($configs)){
            foreach ($configs as $config){
                $classes = $config->data;
                if($classes && count($classes)){
                    foreach ($classes as $key => $value){
                        if (in_array($value['type'], $menus)) {
                            $data[$config->id] = $value;
                        }
                    }
                }
            }
        }

        return $data;
    }

    public static function referenceQuery($type, $p)
    {
        $query = [
            'basic' => [
                'general' => ['animation', 'color', 'position', 'display', 'visibility', 'floating', 'clear', 'cursor', 'opacity', 'z_index', 'filter', 'list_style'],
                'text_parts' => ['text_size', 'text_height', 'text_indent', 'text_shadow', 'color', 'text_decoration', 'text_alignment', 'text_transform', 'word_break', 'direction', 'word_spacing', 'letter_spacing'],
                'container_parts' => ['border_color', 'borders', 'radius', 'margins', 'paddings', 'box_shadow', 'overflow', 'box_sizing', 'width', 'height', 'background_color', 'gradient_color', 'pattern_color'],
                'foundation' =>['foundation'],
                'grid' => ['grids']

            ],
//            'global' => [
//                'text' => $this->imports()->where('section', 'global_col')->where('sub_type', $p)->get(),
//                'container' => $this->imports()->where('section', 'global_col')->where('sub_type', $p)->get(),
//                'image' => $this->imports()->where('section', 'global_col')->where('sub_type', $p)->get(),
//                'lists' => $this->imports()->where('section', 'global_col')->where('sub_type', $p)->get(),
//                'full_studio' => $this->imports()->where('section', 'global_col')->where('sub_type', $p)->get(),
//            ],
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
}