<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta name="Generator" content="CmsEasy 5_6_0_20170105_UTF8"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="renderer" content="webkit">
    <!-- 解决国内双核浏览器优先试用webkit的问题 -->
    <title>WeiCMS 快速建站系统</title>
    <!-- BEGIN STYLE -->
    <link href="{{asset('resources/assets/weihome/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('resources/assets/weihome/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('resources/assets/weihome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('resources/assets/weihome/css/animate.min.css')}}" rel="stylesheet">
    <!-- END STYLE -->
    <!-- BEGIN SCRIPT -->
    <script src="{{asset('resources/assets/weihome/js/jquery-1.11.3.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('resources/assets/weihome/js/jquery.SuperSlide.2.1.1.js')}}" type="text/javascript"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <script src="{{asset('resources/assets/weihome/js/wow.min.js')}}"></script>
    <script>
        if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))) {
            new WOW().init();
        }
    </script>
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{asset('resources/assets/weihome/js/html5shiv.js')}}"></script>
    <script src="{{asset('resources/assets/weihome/js/respond-1.1.0.min.js')}}"></script>
    <![endif]-->
    <!-- END SCRIPT -->
</head>
<body>

@yield('main-content')


<script type="text/javascript" src="{{asset('resources/assets/weihome/js/common.js')}}"></script>
<script>
    window._bd_share_config = {
        "common": {
            "bdSnsKey": {},
            "bdText": "",
            "bdMini": "2",
            "bdMiniList": false,
            "bdPic": "",
            "bdStyle": "0",
            "bdSize": "16"
        },
        "slide": {
            "type": "slide",
            "bdImg": "6",
            "bdPos": "right",
            "bdTop": "100"
        },
    };
    with (document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];
</script>

<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('resources/assets/weihome/js/bootstrap.min.js')}}"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="{{asset('resources/assets/weihome/js/holder.min.js')}}"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{asset('resources/assets/weihome/js/ie10-viewport-bug-workaround.js')}}"></script>
<script src="{{asset('resources/assets/weihome/js/bootstrap-submenu.js')}}"></script>

</body>
</html>