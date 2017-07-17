<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
</head>
<body>
<div class="live-preview">
class= {!!"$type $type-$p" !!}
</div>

<div class="tools">

    <ul class="tabs">
        <li class="tab-link current" data-tab="tab-1">Css Editor</li>
        <li class="tab-link" data-tab="tab-2">Studio</li>
    </ul>

    <div id="tab-1" class="tab-content current">
        Css Editor
    </div>
    <div id="tab-2" class="tab-content">
        Studio
    </div>

</div><!-- container -->

</body>
{!! Html::script('resources/assets/js/jquery-2.1.4.min.js') !!}
<script>
    $(document).ready(function(){

        $('ul.tabs li').click(function(){
            var tab_id = $(this).attr('data-tab');

            $('ul.tabs li').removeClass('current');
            $('.tab-content').removeClass('current');

            $(this).addClass('current');
            $("#"+tab_id).addClass('current');
        })

    })
</script>
{!! Html::style('app/Modules/Framework/Resources/Views/assets/css/live.css') !!}
</html>