<!-- Modal -->
<div class="modal fade modal-fullscreen fullscreenModal" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <ul class="nav nav-tabs tabsmodal">
                    <li class="active"><a data-toggle="tab" href="#tab-1">Main classes</a></li>
                    <li><a data-toggle="tab" href="#tab-2">Custom classes</a></li>
                </ul>
            </div>
            <div class="modal-body">
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade in active">
                        <div class="row list_222">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                <div class="cms_module_list module_list_1">
                                    <h3 class="menuText f-s-17">
                                        <span class="module_icon_main_text">
                                            <select class="form-control select-type" name="type"><option value="basic" selected="selected">Basic classes</option><option value="global">Global classes</option><option value="element">Element classes</option><option value="component">Component classes</option></select>
                                        </span>
                                    </h3>
                                    <hr>
                                    <ul class="list-unstyled menuList" id="components-list" data-role="componentslist">
                                        <li class=" active_class ">
                                            <a href="?type=basic&amp;p=general" profile-id="11" main-type="text_size" rel="tab" class="tpl-left-items">
                                                <span class="module_icon"></span>General
                                            </a><a data-type="general" class="add-class-modal pull-right gettype"></a>
                                        </li>
                                        <li class="">
                                            <a href="?type=basic&amp;p=container_parts" profile-id="11" main-type="text_size" rel="tab" class="tpl-left-items">
                                                <span class="module_icon"></span>Container parts
                                            </a><a data-type="container_parts" class="add-class-modal pull-right gettype"></a>
                                        </li>
                                        <li class="">
                                            <a href="?type=basic&amp;p=text_parts" profile-id="11" main-type="text_size" rel="tab" class="tpl-left-items">
                                                <span class="module_icon"></span>Text parts
                                            </a><a data-type="text_parts" class="add-class-modal pull-right gettype"></a>
                                        </li>
                                        <li class="">
                                            <a href="?type=basic&amp;p=grid" profile-id="11" main-type="text_size" rel="tab" class="tpl-left-items">
                                                <span class="module_icon"></span>Grid
                                            </a><a data-type="grid" class="add-class-modal pull-right gettype"></a>
                                        </li>
                                        <li class="">
                                            <a href="?type=basic&amp;p=foundation" profile-id="11" main-type="text_size" rel="tab" class="tpl-left-items">
                                                <span class="module_icon"></span>Foundation
                                            </a><a data-type="foundation" class="add-class-modal pull-right gettype"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                                <div class="tpl-list">
                                    <div class="container_main">
                                        <div data-role="listitem">


                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 main_div_1 p-10" style="width: 100%;">COLOR</div>
                                            <ul class="classes_list">
                                                <li class="col-xs-12 col-sm-12 col-md-4 col-lg-4 " class-item="" data-attr-name="t-color-black" data-classname="black">
                                                    <div class="main_div_1" data-toolaction="selected" data-classname="black">
                                                        <div class="bottom_part_1" data-item="" data-key="true">
                                                            <a href="#"><span>t-color-black</span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-xs-12 col-sm-12 col-md-4 col-lg-4 " class-item="" data-attr-name="t-color-black-hover:hover" data-classname="black">
                                                    <div class="main_div_1" data-toolaction="selected" data-classname="black">
                                                        <div class="bottom_part_1" data-item="" data-key="true">
                                                            <a href="#"><span>t-color-black-hover:hover</span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-xs-12 col-sm-12 col-md-4 col-lg-4 " class-item="" data-attr-name="t-color-black-focus:focus" data-classname="black">
                                                    <div class="main_div_1" data-toolaction="selected" data-classname="black">
                                                        <div class="bottom_part_1" data-item="" data-key="true">
                                                            <a href="#"><span>t-color-black-focus:focus</span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-xs-12 col-sm-12 col-md-4 col-lg-4 " class-item="" data-attr-name="t-color-silver" data-classname="silver">
                                                    <div class="main_div_1" data-toolaction="selected" data-classname="silver">
                                                        <div class="bottom_part_1" data-item="" data-key="true">
                                                            <a href="#"><span>t-color-silver</span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div id="tab-2" class="tab-pane fade in active">
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .fullscreenModal{
        padding-right: 0!important;
        background: #dbdbdb;
    }
    .fullscreenModal .modal-content {
        box-shadow: none;
        border: none;
        height: auto;
        min-height: 100%;
        border-radius: 0;
        background: #dbdbdb;
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        overflow: auto;
    }
    .fullscreenModal .modal-header {
        height: 100px;
        background-color: #e6e6e6;
        box-shadow: 0 4px 2px -2px #eae9e9;
    }
    .fullscreenModal .modal-dialog {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
    }
    ul.tabsmodal {
        margin: 0px;
        padding: 0px;
        list-style: none;
        padding-top: 45px;
        margin-bottom: 15px;
        border-bottom: solid 3px #499bc7;
    }
    ul.tabsmodal li {
        /* background: none; */
        /* color: #222; */
        display: inline-block;
        /* padding: 10px 15px; */
        cursor: pointer;
    }
    .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
        /* color: #555; */
        /* cursor: default; */
        /* background-color: #fff; */
        /* border: 1px solid #ddd; */
        /* border-bottom-color: transparent; */
        top:0;
    }
    .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus,
    ul.tabsmodal li.current > a, ul.tabsmodal li.current > a:focus, ul.tabsmodal li.current > a:hover, ul.tabsmodal li > a:hover {
        background-color: #499bc7;
        color: #ffffff;
        border-color: #499bc7;
        margin-top: 0px;
        padding-top: 9px;
        padding-bottom: 8px;
    }
    ul.tabsmodal li a {
        background-color: #f0f0f0;
        color: #8a8a8a;
        border: solid 1px #cccccc;
        padding: 8px 22px 8px 22px;
        min-width: 100px;
        font-weight: bold;
        position: relative;
        margin-top: 8px;
        margin-right: 2px;
        line-height: 1.42857143;
        border-radius: 4px 4px 0 0;
        text-decoration: none;
        top: -7px;
    }
    .fullscreenModal button.close {
        background: #c34949;
        width: 43px;
        height: 43px;
        opacity: 1;
        color: white;
        margin-top: 8px!important;
    }
    .cms_module_list {
        background: #f0f0f0;
        border: 1px solid #c6c6c6;
        color: #4d4848;
        border-radius: 5px;
        margin-bottom: 15px;
    }
    .module_list_1.cms_module_list {
        height: 752px;
        padding: 0 18px;
        overflow-y: auto;
    }
    .cms_module_list h3.menuText {
        color: #4d4848;
        margin: 13px 0px 0;
        padding: 0 12px;
        box-sizing: border-box;
        font-weight: bold;
        clear: both;
        display: inline-block;
        width: 100%;
    }
    .cms_module_list .menuList {
        padding-left: 12px;
        padding-right: 12px;
    }
    .module_icon_main_text {
        width: 100%;
    }
    .module_icon_main_text {
        margin-top: 17px;
        color: #888282;
    }
    .module_icon_main_text {
        margin-top: 3px;
        float: left;
        font-weight: 600;
        color: #4d4848;
    }
    .module_icon_main_text select {
        height: 41px;
        font-size: 17px;
        font-weight: normal;
        color: #656565;
        border-radius: 5px;
    }
    #components-list li {
        padding: 0!important;
        border: none!important;
        margin-bottom: 7px;
        background-color: #ffffff;
    }
    .cms_module_list .menuList li {
        outline: none!important;
        box-shadow: 1px 1px 1px #ddd;
        border-radius: 7px 7px 0 0;
    }
    .list_222 .module_list_1 li {
        display: block;
        background-color: #f5f5f5;
        height: auto;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin: 0;
        margin-bottom: 10px;
        /* padding: 8px 15px; */
        text-align: left;
        position: relative;
        font-weight: bold;
    }
    .active_class {
        background-color: #7372a2 !important;
    }
    #components-list li .tpl-left-items:hover, #components-list li .tpl-left-items:focus, #components-list li .tpl-left-items:active, #components-list li .tpl-left-items:visited {
        /* background-color: #306480; */
        background-color: #7372a2;
        text-decoration: none;

    }
    #components-list li.active_class  .tpl-left-items, #components-list li:hover  .tpl-left-items {
        color:#fff!important;
    }
    #components-list li .tpl-left-items {
        display: block;
        height: 46px;
        color: #8a8a8d;
        cursor: pointer;
        outline: none;
        transition: 0.1s;
        padding: 10px;
        text-align: center;
        position: relative;
        /* border-radius: 1px; */
        font-weight: bold;
        border-radius: 7px 7px 0 0;
        /* border-bottom: 3px solid #7372a2; */
    }
    .list_222 .module_list_1 li a {
        font-size: 18px;
        font-family: "Calibri";
        color: #000;
        font-weight: normal;
    }
    .main_div_1 {
        box-shadow: 0 0 10px grey;
        width: 95%;
        margin: 0 auto;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        background: #fbfbfb;
        text-align: center;
    }
    ul.classes_list {
        list-style-type: none;
    }
    .bottom_part_1 {
        background-color: #f1f1f1;
        border-top: 4px solid #ededed;
        height: 65px;
        text-align: center;
        padding: 17px 0;
        font-size: 18px;
    }
    .bottom_part_1 a:hover, .bottom_part_1 a:active, .bottom_part_1 a:visited, .bottom_part_1 a:focus {
        text-decoration: none;
    }
    .bottom_part_1 a {
        color: #727272;
    }
    .p-10 {
        padding: 10px !important;
    }
    .bottom_part_1 span {
        color: #bd1a39;
    }

</style>

