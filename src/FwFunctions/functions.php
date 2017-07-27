<?php

function FWgetClasses(){
    $modal=View::make('framework::FwFunctions.getClasses')->render();
    echo $modal;
    return '<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Classes Modal</button>';
}
function FWget($data){
    $version = \Sahakavatar\Framework\Models\Framework::active()->first();
    $masterCollections= count($version) ? $version->getMasterCollectionsByType($data['tag']) : [];
    $collections = ($version) ? $version->getCollectionsByType($data['tag']) : [];
    $name=(isset($data['name'])?$data["name"]:null);
    $tag=(isset($data['tag'])?htmlentities("<".$data["tag"].">"):null);
    $modal=View::make('framework::FwFunctions.getCollections',compact('masterCollections','collections','tag','name'))->render();

    return $modal;
}