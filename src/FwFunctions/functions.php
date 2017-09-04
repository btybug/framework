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
function BBactiveCss(){
    //TODO need fix
//    $service =new  \Sahakavatar\Framework\Repository\VersionsRepository();
//    $active=$service->findBy('active',1);
//    if($active){
//        return Html::style($active->path);
//    }
    return '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">';
}