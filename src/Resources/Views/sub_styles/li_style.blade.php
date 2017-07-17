<li class="@if($p=='general') active_class @endif">
    <a href="?type=li_style&amp;p=general" profile-id="11" main-type="general"
       rel="tab" class="tpl-left-items">
        <span class="module_icon"></span> General
    </a><a data-type="general" class="add-class-modal pull-right gettype"></a>

</li>
<li class="@if($p=='custom') active_class @endif">
    <a href="?type=li_style&amp;p=custom" profile-id="11" main-type="custom"
       rel="tab" class="tpl-left-items">
        <span class="module_icon"></span> Custom
    </a><a data-type="custom" class="add-class-modal pull-right gettype"></a>

</li>
@foreach($colect_subs as $key=>$value)
    <li class="@if($p==$key) active_class @endif">
        <a href="?type=li_style&amp;p={!! $key !!}" profile-id="12" main-type="{!! $key !!}"
           rel="tab" class="tpl-left-items">
            <span class="module_icon"></span>{!! $value !!}
        </a><a data-type="{!! $key !!}" class="add-class-modal pull-right gettype"></a>
        <a class="btn fa fa-trash trashaIcon" href="{!! url('/admin/framework/delete-group',[$type,$key]) !!}"></a>

    </li>
@endforeach