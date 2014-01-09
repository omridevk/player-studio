<!DOCTYPE html>
<html xmlns:ng="http://angularjs.org" id="ng-app" lang="en" ng-app="KMCModule">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <base href="<?php
    $dir = $_SERVER['REQUEST_URI'];
    $dir = str_replace('\\', '/', $dir);
    if (strpos($dir,'/_dist') !== false) { // we are in a sub path
        $dirArr =  explode('/_dist', $dir);
        $dir = $dirArr[0].'/_dist';
    }
    if (strpos($dir,'/app') !== false) { // we are in dev sub path
    	$dirArr =  explode('/app', $dir);
    	$dir = $dirArr[0].'/app';
    }
    if (substr($dir, -1, 1) != '/') $dir .= '/';
    echo $dir;
    ?>"/>
    <script type="text/javascript" src="lib/modernizer.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script>
        document.documentElement.className += " IE8";
    </script>
    <script type="text/javascript" src="bower_components/jquery/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="lib/html5shiv.js"></script>
    <script type="text/javascript" src="lib/respond.min.js"></script>
    <script type="text/javascript" src="bower_components/selectivizr/selectivizr.js"></script>
    <script type="text/javascript" src="lib/es5-shim.min.js"></script>
    <![endif]-->
    <!--[if gte IE 9]><!-->
    <script type="text/javascript" src="bower_components/jquery/jquery.js"></script>
    <!--<![endif]-->
    <title>Player Studio - JS Version</title>
    <!-- bootstrap compiled and minified CSS -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!--  bootstrap compiled and minified JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- lib css-->
    <link rel='stylesheet' href='lib/colorpicker/css/colorpicker.css'/>
    <link rel='stylesheet' href='lib/spinedit/css/bootstrap-spinedit.css'/>
    <link rel='stylesheet' href='lib/malihu_custon_scrollbar/jquery.mCustomScrollbar.css'/>
    <link rel="stylesheet" href="bower_components/select2/select2.css">
    <link rel="stylesheet" href="lib/prettycheckable/dist/prettyCheckable.css">
    <!--[if gte IE 9]>
    <style type="text/css">
        .gradient {
            filter: none;
        }
    </style>
    <![endif]-->
    <!--    app stylesheets - to be minified-->
    <link rel="stylesheet" href="css/studio.css"/>
    <!--external libs -->
    <!-- TODO move to ini file -->
    <!--<script type="text/javascript" src="http://kgit.html5video.org/pulls/500/mwEmbedLoader.php?debug=true"></script>-->
    <script type="text/javascript"
            src="lib/malihu_custon_scrollbar/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="bower_components/jquery-ui/ui/jquery.ui.core.js"></script>
    <script type="text/javascript" src="bower_components/jquery-ui/ui/jquery.ui.widget.js"></script>
    <script type="text/javascript" src="bower_components/jquery-ui/ui/jquery.ui.mouse.js"></script>
    <script type="text/javascript" src="bower_components/jquery-ui/ui/jquery.ui.sortable.js"></script>
    <script type="text/javascript"
            src="lib/malihu_custon_scrollbar/jquery.mCustomScrollbar.js"></script>
    <script type="text/javascript" src="bower_components/select2/select2.js"></script>
    <script type="text/javascript" src="bower_components/angular/angular.js"></script>
    <script type="text/javascript" src="bower_components/angular-route/angular-route.js"></script>
    <script type="text/javascript" src="bower_components/angular-sanitize/angular-sanitize.js"></script>
    <script type="text/javascript" src="bower_components/angular-animate/angular-animate.js"></script>
    <script type="text/javascript" src="bower_components/angular-ui-sortable/src/sortable.js"></script>
    <script type="text/javascript" src="bower_components/angular-ui-select2/src/select2.js"></script>
    <script type="text/javascript" src="lib/sprintf.js"></script>
    <script type="text/javascript" src="lib/localize.js"></script>
    <script type="text/javascript" src="lib/spin.min.js"></script>
    <script type="text/javascript" src="lib/angular-ui-bootstrap/ui-bootstrap-tpls-0.9.0.js"></script>
    <script type="text/javascript" src="lib/spinedit/js/bootstrap-spinedit.js"></script>
    <script type="text/javascript" src="lib/colorpicker/js/bootstrap-colorpicker-module.js"></script>
    <script type="text/javascript" src="lib/localStorage/angular-local-storage.js"></script>
    <script type="text/javascript" src="lib/jquery.timeago.js"></script>
    <script type="text/javascript" src="lib/jquery.animate-colors-min.js"></script>
    <!--&lt;!&ndash; app scripts to be minified &ndash;&gt;-->
    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript" src="js/menu.js"></script>
    <script type="text/javascript" src="js/filters.js"></script>
    <script type="text/javascript" src="js/controllers/controllers.js"></script>
    <script type="text/javascript" src="js/directives.js"></script>
    <script type="text/javascript" src="js/services/services.js"></script>
    <script type="text/javascript" src="js/controllers/playerListCtrl.js"></script>
    <script type="text/javascript" src="js/controllers/playerEditCtrl.js"></script>
    <script type="text/javascript" src="js/controllers/LoginCtrl.js"></script>
    <script type="text/javascript" src="js/controllers/playerCreateCtrl.js"></script>
</head>
<loading-widget></loading-widget>
<div class="section relative" ng-view></div>
</body>
</html>
