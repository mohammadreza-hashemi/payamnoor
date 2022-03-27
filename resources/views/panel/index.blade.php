<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href={{asset('images/favicon.png')}}>
    <title>قالب مدیریتی ادمین پرس - ساخته شده با بوت استرپ 4</title>
    <link rel="stylesheet" href={{asset('plugins/bootstrap/css/bootstrap.min.css')}}>
    <link rel="stylesheet" href={{asset('plugins/morrisjs/morris.css')}}>
    <link rel="stylesheet" href={{asset('css/style.css')}}>
    <link id="theme" rel="stylesheet" href={{asset('css/colors/blue.css')}}>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
</head>
<body class="fix-header fix-sidebar card-no-border">
<div class="preloader">
    <svg class="circular" viewbox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
    </svg>
</div>

<div id="main-wrapper">
    @include('.panel.partials.header')
    @include('.panel.partials.aside')
    @include('.panel.partials.page-wrapper')
</div>

<script src={{asset('plugins/jquery/jquery.min.js')}}></script>
<script src={{asset('plugins/bootstrap/js/popper.min.js')}}></script>
<script src={{asset('plugins/bootstrap/js/bootstrap.min.js')}}></script>
<script src={{asset('js/jquery.slimscroll.js')}}></script>
<script src={{asset('js/waves.js')}}></script>
<script src={{asset('js/sidebarmenu.js')}}></script>
<script src={{asset('plugins/sticky-kit-master/dist/sticky-kit.min.js')}}></script>
<script src={{asset('js/custom.min.js')}}></script>
<script src={{asset('plugins/sparkline/jquery.sparkline.min.js')}}></script>
<script src={{asset('plugins/raphael/raphael-min.js')}}></script>
<script src={{asset('plugins/morrisjs/morris.min.js')}}></script>
<script src={{asset('js/dashboard1.js')}}></script>
<script src={{asset('plugins/styleswitcher/jQuery.style.switcher.js')}}></script>

</body>

</html>
