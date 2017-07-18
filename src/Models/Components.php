<?php
/**
 * Created by PhpStorm.
 * User: Comp1
 * Date: 2/6/2017
 * Time: 2:24 PM
 */

namespace Sahakavatar\Framework\Models;

use File;
use Validator;

class Components
{
    protected $uploadPath;
    protected $componentsJsonPath;
    public $data;
    public $cores;
    public $def_class = 'default';
    private $activeData = ['activate' => 1, 'deactivate' => 0];


    public function __construct()
    {
        $ds = DS;
        $this->uploadPath = base_path("app{$ds}Modules{$ds}Framework{$ds}Components");
        $this->componentsJsonPath = $this->uploadPath . DS . "components.json";
        $this->data = json_decode(File::get($this->componentsJsonPath), true);
        $this->cores = File::getRequire(base_path("app{$ds}Modules{$ds}Framework{$ds}CoreComponents{$ds}settings.php"));
    }

    public $baseClasses = ['button' => 'btn', 'navbar' => 'nav', 'jumbotron' => 'jumbotron', 'menu' => 'menu'];
    protected $rules = [
        'type' => 'required|in:button,navbar,jumbtron,menu,card,button_toolbar,button_group',
        'name' => 'required',
        'normal' => 'required',
        'class' => 'required'];
    protected $htmlCommentNidles = ['type', 'sub_type', 'name', 'normal'];

    public function upload($files)
    {
        foreach ($files as $file) {
            $uniqId = uniqid();
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $componentName = $uniqId . '.' . $extension;
            $componentPath = $this->uploadPath . DS . $componentName;
            $file->move($this->uploadPath, $componentName); // uploading file to given path
            $content = File::get($componentPath);
            preg_match('<!--(.|\s)*?-->', $content, $matches);
            if (isset($matches[0])) {
                $data = str_replace('!--', '', $matches[0]);
                $data = str_replace("\r\n", '', $data);
                $data = str_replace('--', '', $data);
                $data = str_replace(' ', '', $data);
                $result = $this->makeArray($data);
                if (!$result['error']) {
                    $classes = new StylesBulder();
                    $json = json_decode(File::get($this->componentsJsonPath), true);
                    $result['data']['filname'] = $componentName;
                    $result['data']['extension'] = $extension;
                    $result['data']['id'] = $uniqId;
                    $json[$uniqId] = $result['data'];
                    File::put($this->componentsJsonPath, json_encode($json, true));
                    $classData = array();
                    $classData = $result['data'];
                    $classData['tab'] = 'component';
                    $classData['sub'] = $result['data']['class'];
                    $classData['css'] = isset($classData['css']) ? $classData['css'] : [];
                    $classes->create($classData, $uniqId);
                } else {
                    File::delete($componentPath);
                }
                return \Response::json($result);
            }
            File::delete($componentPath);
            return \Response::json(['error' => true, 'messages' => ['Warning!!!' => 'No information about Components']]);

        }
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
        $validator = Validator::make($newArray, $this->rules);
        if ($validator->fails()) return ['error' => true, 'messages' => $validator->messages()];
        return ['error' => false, 'data' => $newArray];
    }

    public function getSubs()
    {
        $array = [];
        foreach ($this->data as $data) {
            $array[$data['type']][$data['id']] = $data;
        }
        return $array;
    }

    public function make($id)
    {
        $component = isset($this->data[$id]) ? $this->data[$id] : false;
        $FW_INPUT = new FW_INPUT();
        if (!$component) return false;
        $this->componentData = $component;
        $this->componentDataJson = json_encode($component, true);
//        $component->def_class = $this->def_class;
        if (!File::exists($this->uploadPath . DS . $component['filname'])) return false;
        $this->html = File::get($this->uploadPath . DS . $component['filname']);
        if (isset($component['items'])) {
            foreach ($component['items'] as $key => $inputs) {
                foreach ($inputs as $k => $input) {
                    $this->data['itemsHtml'][$key][$input] = $FW_INPUT->groupInput($input);
                }
            }
        }
        return $this;
    }

    public function getHtml($id)
    {
        return $this->make($id)->html;
    }

    public function delete($id)
    {
        if (isset($this->data[$id])) {
            $data = $this->data[$id];
            File::delete($this->uploadPath . DS . $data['filname']);
            unset($this->data[$id]);
            $this->save();
            return true;
        }
        return false;
    }

    public function save()
    {
        File::put($this->componentsJsonPath, json_encode($this->data, true));
    }

    public function makeActive($id, $action)
    {
        $val = isset($this->activeData[$action]) ? $this->activeData[$action] : false;
        if ($val === false) return false;
        $this->data[$id]['active'] = $val;
        $this->save();
        return true;
    }

    public function makeCores($type, $index)
    {
        $FW_INPUT = new FW_INPUT();
        $component = new \stdClass();
        $component->def_class = $this->def_class;
        $component->data = $this->cores[$type][$index];
        $component->core_classes[] = $component->data['term'] . '-' . $component->def_class;
        if (isset($component->data['classes'])) {
            foreach ($component->data['classes'] as $class) {
                $component->core_classes[] = $component->data['term'] . '-' . $class;
            }
        }
//        foreach ($component->data['items'] as $key => $inputs) {
//            foreach ($inputs as $k => $input) {
//                $component->data['itemsHtml'][$key][$k] = $FW_INPUT->groupInput($k,$input);
//            }
//        }
        $component->html = File::get($component->data['path']);
        return $component;
    }

}