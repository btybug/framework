<?php
/**
 * Created by PhpStorm.
 * User: Comp2
 * Date: 13-Apr-17
 * Time: 11:35
 */

namespace Sahakavatar\Framework\Models;


class Collection
{
    private $configFilePath;
    private $displayName;
    private $className;
    private $type;
    private $framework;

    public function __construct($data=NULL) {
        $this->configFilePath = module_path('framework', 'config.json');
        if($data) {
            $this->displayName = isset($data['name'])  ? $data['name'] : NULL;
            $this->className = isset($data['name'])  ? '$' . $data['name'] : NULL;
            $this->type = isset($data['sub_type'])  ? $data['sub_type'] : NULL;
            $this->framework = Framework::active()->first();
        }
    }

    public function save() {
        if(\File::exists($this->configFilePath)) {
            $configFile = \File::get($this->configFilePath);
            $configData = json_decode($configFile, true);
            if(array_key_exists($this->type, $configData)) {
                $configData[$this->type] = array_merge($configData[$this->type], [
                    $this->className => [
                        'display_name' => $this->displayName
                    ]
                ]);
                $result = $configData;
            } else {
                $result = array_merge($configData, [
                    $this->type => [
                        $this->className => [
                            'display_name' => $this->displayName
                        ]
                    ]
                ]);
            }

        } else {
            $result = [
                $this->type => [
                    $this->className => [
                        'display_name' => $this->displayName
                    ]
                ]
            ];
        }
        if (\File::put($this->configFilePath, json_encode($result, true))) {
            return true;
        }
        return false;
    }

    public function checkUniqueClassName() {
        $result = [];
        if(\File::exists($this->configFilePath)) {
            $configFile = \File::get($this->configFilePath);
            $configData = json_decode($configFile, true);
                foreach($configData as $data) {
                    if(array_key_exists($this->className, $data)) {
                        $result[] = false;
                    }
                }
        }
        $frameworkCollections = $this->framework->getCollectionsByVersion();
        if($frameworkCollections) {
            foreach($frameworkCollections as $data) {
                if(array_key_exists($this->className, $data)) {
                    $result[] = false;
                }
            }
        }

        return !in_array(false, $result);
    }

    public function getExistingCollections($type) {
        if(\File::exists($this->configFilePath)) {
            $configFile = \File::get($this->configFilePath);
            $configData = json_decode($configFile, true);
            return array_key_exists($type, $configData) ? $configData[$type] : NULL;
        }
        return NULL;
    }

    public function delete($className) {
        if(\File::exists($this->configFilePath)) {
            $configFile = \File::get($this->configFilePath);
            $configData = json_decode($configFile, true);
            foreach($configData as $type => $class) {
                if(array_key_exists($className, $configData[$type])) {
                    unset($configData[$type][$className]);
                }
            }
            return \File::put($this->configFilePath, json_encode($configData, true));
        }
        return false;
    }

}