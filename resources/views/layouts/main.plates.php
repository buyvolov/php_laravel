<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7 lt-ie10"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8 lt-ie10"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <title>Proton UI - Tables</title>
        <meta name="description" content="Page Description">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="/styles/bootstrap.css">
        

        <!-- Page-specific Plugin CSS: -->
        <link rel="stylesheet" href="/styles/vendor/select2/select2.css">
        <link rel="stylesheet" href="/styles/vendor/datatables.css" media="screen" />
        <link rel="stylesheet" href="styles/vendor/jquery.pnotify.default.css" media="screen">


        <!-- Proton CSS: -->
        <link rel="stylesheet" href="/styles/proton.css">
        <link rel="stylesheet" href="/styles/vendor/animate.css">

        <!-- adds CSS media query support to IE8   -->
        <!--[if lt IE 9]>
            <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
            <script src="/scripts/vendor/respond.min.js"></script>
        <![endif]-->

        <!-- Fonts CSS: -->
        <link rel="stylesheet" href="/styles/font-awesome.css" type="text/css" />
        <link rel="stylesheet" href="/styles/font-titillium.css" type="text/css" />

        <!-- Common Scripts: -->
        <script>
        (function () {
          var js;
          if (typeof JSON !== 'undefined' && 'querySelector' in document && 'addEventListener' in window) {
            js = 'http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js';
          } else {
            js = 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js';
          }
          document.write('<script src="' + js + '"><\/script>');
        }());
        </script>
        <script src="/scripts/vendor/modernizr.js"></script>
        <script src="/scripts/vendor/jquery.cookie.js"></script>
    </head>
      <body>
        
        <script>
            var theme = $.cookie('protonTheme') || 'default';
            $('body').removeClass (function (index, css) {
                return (css.match (/\btheme-\S+/g) || []).join(' ');
            }); 
            if (theme !== 'default') $('body').addClass(theme);
        </script>
        <!--[if lt IE 8]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
<nav class="main-menu" data-step='2' data-intro='This is the extendable Main Navigation Menu.' data-position='right'>
            <ul>
                <li>
                    <a href=".">
                        <i class="icon-home nav-icon"></i>
                        <span class="nav-text">
                            Dashboard
                        </span>
                    </a>
                </li>
                <li class="has-subnav">
                    <a href="javascript:;">
                        <i class="icon-laptop nav-icon"></i>
                        <span class="nav-text">
                            UI Components
                        </span>
                        <i class="icon-angle-right"></i>
                    </a>
                    <ul>
                        <li>
                            <a class="subnav-text" href="ui-components-general.html">
                                General
                            </a>
                        </li>
                        <li>
                            <a class="subnav-text" href="ui-components-buttons.html">
                                Buttons
                            </a>
                        </li>
                        <li>
                            <a class="subnav-text" href="ui-components-tabs-accordions.html">
                                Tabs &amp; Accordions
                            </a>
                        </li>
                        <li>
                            <a class="subnav-text" href="ui-components-sliders.html">
                                Sliders
                            </a>
                        </li>
                        <li>
                            <a class="subnav-text" href="ui-components-grid.html">
                                Grid
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="has-subnav">
                    <a href="javascript:;">
                        <i class="icon-list nav-icon"></i>
                        <span class="nav-text">
                            Forms
                        </span>
                        <i class="icon-angle-right"></i>
                    </a>
                    <ul>
                        <li>
                            <a class="subnav-text" href="forms-form-components.html">
                                Form Componenets<span class="label label-warning label-new">Update</span>
                            </a>
                        </li>
                        <li>
                            <a class="subnav-text" href="forms-masked-input-fields.html">
                                Masked Input Fields
                            </a>
                        </li>
                        <li>
                            <a class="subnav-text" href="forms-autotab-input-fields.html">
                                Autotab Input Fields
                            </a>
                        </li>
                        <li>
                            <a class="subnav-text" href="forms-validation.html">
                                Form Validation
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="has-subnav">
                    <a href="javascript:;">
                        <i class="icon-folder-open nav-icon"></i>
                        <span class="nav-text">
                            Pages
                        </span>
                        <i class="icon-angle-right"></i>
                    </a>
                    <ul>
                        <li>
                            <a class="subnav-text" href="intro.html">
                                Intro Page<span class="label label-danger label-new">New</span>
                            </a>
                        </li>
                        <li>
                            <a class="subnav-text" href="image-gallery-uploader.html">
                                Image Gallery Uploader
                            </a>
                        </li>
                        <li>
                            <a class="subnav-text" href="calendar.html">
                                Calendar
                            </a>
                        </li>
                        <li>
                            <a class="subnav-text" href="user-profile.html">
                                User Profile
                            </a>
                        </li>
                        <li>
                            <a class="subnav-text" href="advanced-search.html">
                                Advanced Search<span class="label label-danger label-new">New</span>
                            </a>
                        </li>
                        <li>
                            <a class="subnav-text" href="session-timeout.html">
                                Session Timeout<span class="label label-danger label-new">New</span>
                            </a>
                        </li>
                        <li>
                            <a class="subnav-text" href="login.html">
                                Login Page
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="graphs-and-statistics.html">
                        <i class="icon-bar-chart nav-icon"></i>
                        <span class="nav-text">
                            Graphs and Statistics<span class="label label-warning label-new">Update</span>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="typography-and-icons.html">
                        <i class="icon-font nav-icon"></i>
                        <span class="nav-text">
                            Typography and Icons
                        </span>
                    </a>
                </li>
                <li>
                    <a href="tables.html">
                        <i class="icon-table nav-icon"></i>
                        <span class="nav-text">
                            Tables
                        </span>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="icon-map-marker nav-icon"></i>
                        <span class="nav-text">
                            Maps
                        </span>
                    </a>
                </li>
                <li class="has-subnav">
                    <a href="javascript:;">
                        <i class="icon-warning-sign nav-icon"></i>
                        <span class="nav-text">
                            Error Pages
                        </span>
                        <i class="icon-angle-right"></i>
                    </a>
                    <ul>
                        <li>
                            <a class="subnav-text" href="400-bad-request-error.html">
                                400 Bad Request
                            </a>
                        </li>
                        <li>
                            <a class="subnav-text" href="401-unauthorized-error.html">
                                401 Unauthorized
                            </a>
                        </li>
                        <li>
                            <a class="subnav-text" href="403-forbidden-error.html">
                                403 Forbidden
                            </a>
                        </li>
                        <li>
                            <a class="subnav-text" href="404-page-not-found-error.html">
                                404 Page Not Found
                            </a>
                        </li>
                        <li>
                            <a class="subnav-text" href="500-internal-server-error.html">
                                500 Internal Server Error
                            </a>
                        </li>
                        <li>
                            <a class="subnav-text" href="503-service-unavailable-error.html">
                                503 Service Unavailable
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="documentation.html">
                        <i class="icon-info-sign nav-icon"></i>
                        <span class="nav-text">
                            Documentation
                        </span>
                    </a>
                </li>
            </ul>

            <ul class="logout">
                <li>
                    <a href="login.html">
                        <i class="icon-off nav-icon"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>  
        <?=$this->section('content')?>
        <!-- Large modal -->
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
                
                <div class="modal-header">
                  <button data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                  <h4 id="myLargeModalLabel" class="modal-title"></h4>
                </div>
                
                <div class="modal-body">
                    wdwdwdwdwd
                </div>
            </div>
          </div>
        </div>
        <!-- Notifications -->
        <!-- http://pinesframework.org/pnotify/ -->
        <script src="scripts/vendor/jquery.pnotify.min.js"></script>
        
        <?php if($aNotify = session("notify")):?>

                <script>
                    $.pnotify({
                        title: 'Успешно',
                        text: '<?=$aNotify["text"]?>',
                        history: false,
                        type: 'success',
                        hide: false
                    });    
                </script>
                
        <?php endif?>
    </body>
</html>
