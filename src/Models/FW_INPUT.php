<?php
/**
 * Created by PhpStorm.
 * User: Comp1
 * Date: 2/15/2017
 * Time: 3:59 PM
 */

namespace Sahakavatar\Framework\Models;

use File;

class FW_INPUT
{
    protected $fields;
    protected $rules;
    protected $fields_path;
    protected $rules_path;

    public function __construct()
    {
        $DS=DS;
        $this->fields_path ="app{$DS}Modules{$DS}Framework{$DS}style_rules{$DS}fields.json";
        $this->rules_path ="app{$DS}Modules{$DS}Framework{$DS}style_rules{$DS}rules.json";
        $this->fields=json_decode(File::get($this->fields_path),true);
        $this->rules=json_decode(File::get($this->rules_path),true);
    }
    public function styleForm($type,$sun){
        if(!isset($this->rules['styles'][$type][$sun]))return null;
        $rules=$this->rules['styles'][$type][$sun];
        $html="";
        if(count($rules)){
            foreach ($rules as $key=>$rule){
                if(isset($this->fields['singles'][$key])){
                    $inputPath='framework::'.$this->fields['singles'][$key];
                    if(\View::exists($inputPath)){
                        $html.=\View::make($inputPath)->with($rule)->render();
                    }
                }
            }
        }
        return $html;
    }
    public function groupInput($group,array $data=[]){
        if(!isset($this->fields['groups'][$group]))return null;
        $field=$this->fields['groups'][$group];
        $html="";
                    $inputPath='framework::'.$field;
                    if(\View::exists($inputPath)){
                        $html=\View::make($inputPath)->with($data)->render();
                    }
        return $html;
    }
}