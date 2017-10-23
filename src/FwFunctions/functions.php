<?php

function FWgetClasses()
{
    $modal = View::make('framework::FwFunctions.getClasses')->render();
    echo $modal;
    return '<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Classes Modal</button>';
}

function FWget($data)
{
    $version = \Sahakavatar\Framework\Models\Framework::active()->first();
    $masterCollections = count($version) ? $version->getMasterCollectionsByType($data['tag']) : [];
    $collections = ($version) ? $version->getCollectionsByType($data['tag']) : [];
    $name = (isset($data['name']) ? $data["name"] : null);
    $tag = (isset($data['tag']) ? htmlentities("<" . $data["tag"] . ">") : null);
    $modal = View::make('framework::FwFunctions.getCollections', compact('masterCollections', 'collections', 'tag', 'name'))->render();

    return $modal;
}

function BBCss($section = 'frontend')
{
    $adminsettingRepository = new  \Sahakavatar\Settings\Repository\AdminsettingRepository();
    $model = $adminsettingRepository->getVersionsSettings('versions', $section);
    if (count($model)) {
        if ($model['css_option']) {
            $versionRepo = new \Sahakavatar\Framework\Repository\VersionsRepository();
            $version = $versionRepo->find($model['css_version']);
            if ($version) return Html::style("/css/versions/" . $version->file_name);
        } else {
            return Html::style($model['css_url']);
        }

    }
    return '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">';
}

function BBJquery($section = 'frontend')
{
    $adminsettingRepository = new  \Sahakavatar\Settings\Repository\AdminsettingRepository();
    $model = $adminsettingRepository->getVersionsSettings('versions', $section);
    if (count($model)) {
        if ($model['jquery_option']) {
            return Html::script($model['jquery_version']);
        } else {
            return Html::script($model['jquery_url']);
        }

    }

    return '<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>';
}

function BBMainJS()
{
    if (\File::exists(public_path('js/back.js'))) {
        return Html::script('/js/back.js');
    }
    return '<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>';
}

function BBMainFrontJS()
{
    if (\File::exists(public_path('js/front.js'))) {
        return Html::script('/js/front.js');
    }
    return '<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>';
}