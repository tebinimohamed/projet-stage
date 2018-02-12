<?php
session_start();

if (!isset($_SESSION['connect'])) {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<!-- saved from url=(0092)file:///C:/Users/daly/Desktop/THEME%20admin/metronic_v4.5.6/theme/admin_4_rounded/index.html -->
<html lang="en"><!--<![endif]--><!-- BEGIN HEAD --><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Index</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="./index2_files/css" rel="stylesheet" type="text/css">
    <link href="./index2_files/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="./index2_files/simple-line-icons.min.css" rel="stylesheet" type="text/css">
    <link href="./index2_files/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="./index2_files/bootstrap-switch.min.css" rel="stylesheet" type="text/css">
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="./index2_files/daterangepicker.min.css" rel="stylesheet" type="text/css">
    <link href="./index2_files/morris.css" rel="stylesheet" type="text/css">
    <link href="./index2_files/fullcalendar.min.css" rel="stylesheet" type="text/css">
    <link href="./index2_files/jqvmap.css" rel="stylesheet" type="text/css">
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="./index2_files/components-rounded.min.css" rel="stylesheet" id="style_components" type="text/css">
    <link href="./index2_files/plugins.min.css" rel="stylesheet" type="text/css">
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="./index2_files/layout.min.css" rel="stylesheet" type="text/css">
    <link href="./index2_files/light.min.css" rel="stylesheet" type="text/css" id="style_color">
    <link href="./index2_files/custom.min.css" rel="stylesheet" type="text/css">
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="file:///C:/Users/daly/Desktop/THEME%20admin/metronic_v4.5.6/theme/admin_4_rounded/favicon.ico"> <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-top">
               <div class="page-header-top">
                <div class="page-logo">
                    <a href="index2.php">
                    <img src="1.png" width="800" height="100">                     </a>
                </div>
                <div class="top-menu">
                    
                </div>
            </div>
            
              
               </div>
                        <div class="menu-toggler sidebar-toggler">

                            <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                        </div>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN PAGE ACTIONS -->
                    <!-- DOC: Remove "hide" class to enable the page header actions -->

                    <!-- END PAGE ACTIONS -->
                    <!-- BEGIN PAGE TOP -->
                    <div class="page-top">
                        <!-- BEGIN HEADER SEARCH BOX -->
                        <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->

                        <!-- END HEADER SEARCH BOX -->
                        <!-- BEGIN TOP NAVIGATION MENU -->



                    </div>
                    <!-- END PAGE TOP -->
                </div>
                <!-- END HEADER INNER -->
            </div>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar-wrapper">

                    <div class="page-sidebar navbar-collapse collapse">

                        <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                            <li class="nav-item start active open">
                                <a href="#" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
                                    <span class="title">ADMIN</span>
                                    <span class="arrow open"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item start active open">
                                        <a href="utilisateur.php" class="nav-link ">
                                            <i class="icon-bar-chart"></i>
                                            <span class="title">Gestion des Utilisateur</span> 
                                        </a>
                                    </li>
                                    <li class="nav-item start active open">
                                        <a href="annonce.php" class="nav-link ">
                                            <i class="icon-bar-chart"></i>
                                            <span class="title">Gestion des Annonce</span> 
                                        </a>
                                    </li>

                                    <li class="nav-item start ">
                                        <a href="commande.php" class="nav-link ">
                                            <i class="icon-bulb"></i>
                                            <span class="title">Gestion des Commande</span>
                                            <span class="badge badge-success"></span>
                                        </a>
                                    </li>

                                    <li class="nav-item start ">
                                        <a href="logout.php" class="nav-link ">
                                            <i class="icon-bulb"></i>
                                            <span class="title">Déconnexion  </span>
                                            <span class="badge badge-success"></span>
                                        </a>
                                    </li>


                                </ul></li></ul></div></div>
                                <div class="page-content-wrapper">
                                    <!-- BEGIN CONTENT BODY -->
                                    <div class="page-content" style="min-height:1080px">
                                        <!-- BEGIN PAGE HEAD-->
                                        <div class="page-head">
                                            <!-- BEGIN PAGE TITLE -->
                                            <div class="page-title">
                                                <center><B><h1><p>Animaux errants</p></h1></B></center>
                                                <p><h4>Il est interdit de laisser errer les animaux domestiques et de façon générale tout animal domestique quel qu’il soit, de les abandonner ou d’attirer des animaux errants avec de la nourriture. La divagation des animaux peut occasionner des troubles importants de la tranquillité et de la sécurité publiques.</h4></p>
                                                <center> <img src="1.jpg"></center>
                                            </div>
                                            <!-- END PAGE TITLE -->
                                            <!-- BEGIN PAGE TOOLBAR -->
                                            <div class="page-toolbar">
                                                <!-- BEGIN THEME PANEL -->
                                                <div class="btn-group btn-theme-panel">
                                                    <a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                        <i class="icon-settings"></i>
                                                    </a>
                                                    <div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                                <h3>THEME</h3>
                                                                <ul class="theme-colors">
                                                                    <li class="theme-color theme-color-default" data-theme="default">
                                                                        <span class="theme-color-view"></span>
                                                                        <span class="theme-color-name">Dark Header</span>
                                                                    </li>
                                                                    <li class="theme-color theme-color-light active" data-theme="light">
                                                                        <span class="theme-color-view"></span>
                                                                        <span class="theme-color-name">Light Header</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-8 col-sm-8 col-xs-12 seperator">
                                                                <h3>LAYOUT</h3>
                                                                <ul class="theme-settings">
                                                                    <li> Theme Style
                                                                        <select class="layout-style-option form-control input-small input-sm">
                                                                            <option value="square">Square corners</option>
                                                                            <option value="rounded" selected="selected">Rounded corners</option>
                                                                        </select>
                                                                    </li>
                                                                    <li> Layout
                                                                        <select class="layout-option form-control input-small input-sm">
                                                                            <option value="fluid" selected="selected">Fluid</option>
                                                                            <option value="boxed">Boxed</option>
                                                                        </select>
                                                                    </li>
                                                                    <li> Header
                                                                        <select class="page-header-option form-control input-small input-sm">
                                                                            <option value="fixed" selected="selected">Fixed</option>
                                                                            <option value="default">Default</option>
                                                                        </select>
                                                                    </li>
                                                                    <li> Top Dropdowns
                                                                        <select class="page-header-top-dropdown-style-option form-control input-small input-sm">
                                                                            <option value="light">Light</option>
                                                                            <option value="dark" selected="selected">Dark</option>
                                                                        </select>
                                                                    </li>
                                                                    <li> Sidebar Mode
                                                                        <select class="sidebar-option form-control input-small input-sm">
                                                                            <option value="fixed">Fixed</option>
                                                                            <option value="default" selected="selected">Default</option>
                                                                        </select>
                                                                    </li>
                                                                    <li> Sidebar Menu
                                                                        <select class="sidebar-menu-option form-control input-small input-sm">
                                                                            <option value="accordion" selected="selected">Accordion</option>
                                                                            <option value="hover">Hover</option>
                                                                        </select>
                                                                    </li>
                                                                    <li> Sidebar Position
                                                                        <select class="sidebar-pos-option form-control input-small input-sm">
                                                                            <option value="left" selected="selected">Left</option>
                                                                            <option value="right">Right</option>
                                                                        </select>
                                                                    </li>
                                                                    <li> Footer
                                                                        <select class="page-footer-option form-control input-small input-sm">
                                                                            <option value="fixed">Fixed</option>
                                                                            <option value="default" selected="selected">Default</option>
                                                                        </select>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END THEME PANEL -->
                                            </div>
                                            <!-- END PAGE TOOLBAR -->
                                        </div>
                <!--[if lt IE 9]>
        <script src="../assets/global/plugins/respond.min.js"></script>
        <script src="../assets/global/plugins/excanvas.min.js"></script> 
    <![endif]-->
    <!-- BEGIN CORE PLUGINS -->
    <script src="./index2_files/jquery.min.js.téléchargement" type="text/javascript"></script>
    <script src="./index2_files/bootstrap.min.js.téléchargement" type="text/javascript"></script>
    <script src="./index2_files/js.cookie.min.js.téléchargement" type="text/javascript"></script>
    <script src="./index2_files/bootstrap-hover-dropdown.min.js.téléchargement" type="text/javascript"></script>
    <script src="./index2_files/jquery.slimscroll.min.js.téléchargement" type="text/javascript"></script>
    <script src="./index2_files/jquery.blockui.min.js.téléchargement" type="text/javascript"></script>
    <script src="./index2_files/bootstrap-switch.min.js.téléchargement" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="./index2_files/moment.min.js.téléchargement" type="text/javascript"></script>
    <script src="./index2_files/daterangepicker.min.js.téléchargement" type="text/javascript"></script>
    <script src="./index2_files/morris.min.js.téléchargement" type="text/javascript"></script>
    <script src="./index2_files/raphael-min.js.téléchargement" type="text/javascript"></script>
    <script src="./index2_files/jquery.waypoints.min.js.téléchargement" type="text/javascript"></script>
    <script src="./index2_files/jquery.counterup.min.js.téléchargement" type="text/javascript"></script>
    <script src="./index2_files/amcharts.js.téléchargement" type="text/javascript"></script>
    <script src="./index2_files/serial.js.téléchargement" type="text/javascript"></script>
    <script src="./index2_files/pie.js.téléchargement" type="text/javascript"></script>
    <script src="./index2_files/radar.js.téléchargement" type="text/javascript"></script>
    <script src="./index2_files/light.js.téléchargement" type="text/javascript"></script>
    <script src="./index2_files/patterns.js.téléchargement" type="text/javascript"></script>
    <script src="./index2_files/chalk.js.téléchargement" type="text/javascript"></script>
    <script src="./index2_files/ammap.js.téléchargement" type="text/javascript"></script>
    <script src="./index2_files/worldLow.js.téléchargement" type="text/javascript"></script>
    <script src="./index2_files/amstock.js.téléchargement" type="text/javascript"></script>
    <script src="./index2_files/fullcalendar.min.js.téléchargement" type="text/javascript"></script>
    <script src="./index2_files/horozontal-timeline.min.js.téléchargement" type="text/javascript"></script>
    <script src="./index2_files/jquery.flot.min.js.téléchargement" type="text/javascript"></script>
    <script src="./index2_files/jquery.flot.resize.min.js.téléchargement" type="text/javascript"></script>
    <script src="./index2_files/jquery.flot.categories.min.js.téléchargement" type="text/javascript"></script>
    <script src="./index2_files/jquery.easypiechart.min.js.téléchargement" type="text/javascript"></script>
    <script src="./index2_files/jquery.sparkline.min.js.téléchargement" type="text/javascript"></script>
    <script src="./index2_files/jquery.vmap.js.téléchargement" type="text/javascript"></script>
    <script src="./index2_files/jquery.vmap.russia.js.téléchargement" type="text/javascript"></script>
    <script src="./index2_files/jquery.vmap.world.js.téléchargement" type="text/javascript"></script>
    <script src="./index2_files/jquery.vmap.europe.js.téléchargement" type="text/javascript"></script>
    <script src="./index2_files/jquery.vmap.germany.js.téléchargement" type="text/javascript"></script>
    <script src="./index2_files/jquery.vmap.usa.js.téléchargement" type="text/javascript"></script>
    <script src="./index2_files/jquery.vmap.sampledata.js.téléchargement" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="./index2_files/app.min.js.téléchargement" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="./index2_files/dashboard.min.js.téléchargement" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <script src="./index2_files/layout.min.js.téléchargement" type="text/javascript"></script>
    <script src="./index2_files/demo.min.js.téléchargement" type="text/javascript"></script>
    <script src="./index2_files/quick-sidebar.min.js.téléchargement" type="text/javascript"></script>
    <!-- END THEME LAYOUT SCRIPTS -->


    <div class="jqvmap-label"></div><div class="jqvmap-label"></div><div class="jqvmap-label"></div><div class="jqvmap-label"></div><div class="jqvmap-label"></div><div class="daterangepicker dropdown-menu opensleft" style="display: none; top: 139px; right: 19.875px; left: auto;"><div class="calendar left"><div class="daterangepicker_input"><input class="input-mini active" type="text" name="daterangepicker_start" value=""><i class="fa fa-calendar"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o"></i></div></div><div class="calendar-table"><table class="table-condensed"><thead><tr><th class="prev available"><i class="fa fa-angle-left"></i></th><th colspan="5" class="month">December 2017</th><th></th></tr><tr><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th><th>Su</th></tr></thead><tbody><tr><td class="off available" data-title="r0c0">27</td><td class="off available" data-title="r0c1">28</td><td class="off available" data-title="r0c2">29</td><td class="off available" data-title="r0c3">30</td><td class="available" data-title="r0c4">1</td><td class="weekend available" data-title="r0c5">2</td><td class="weekend available" data-title="r0c6">3</td></tr><tr><td class="available" data-title="r1c0">4</td><td class="available" data-title="r1c1">5</td><td class="available" data-title="r1c2">6</td><td class="available" data-title="r1c3">7</td><td class="available" data-title="r1c4">8</td><td class="weekend available" data-title="r1c5">9</td><td class="weekend available" data-title="r1c6">10</td></tr><tr><td class="available" data-title="r2c0">11</td><td class="available" data-title="r2c1">12</td><td class="available" data-title="r2c2">13</td><td class="available" data-title="r2c3">14</td><td class="available" data-title="r2c4">15</td><td class="weekend available" data-title="r2c5">16</td><td class="weekend available" data-title="r2c6">17</td></tr><tr><td class="available" data-title="r3c0">18</td><td class="available" data-title="r3c1">19</td><td class="available" data-title="r3c2">20</td><td class="available" data-title="r3c3">21</td><td class="available" data-title="r3c4">22</td><td class="weekend available" data-title="r3c5">23</td><td class="weekend available" data-title="r3c6">24</td></tr><tr><td class="available" data-title="r4c0">25</td><td class="available" data-title="r4c1">26</td><td class="available" data-title="r4c2">27</td><td class="available" data-title="r4c3">28</td><td class="available" data-title="r4c4">29</td><td class="weekend available" data-title="r4c5">30</td><td class="weekend active start-date available" data-title="r4c6">31</td></tr><tr><td class="off in-range available" data-title="r5c0">1</td><td class="off in-range available" data-title="r5c1">2</td><td class="off in-range available" data-title="r5c2">3</td><td class="off in-range available" data-title="r5c3">4</td><td class="off in-range available" data-title="r5c4">5</td><td class="weekend off in-range available" data-title="r5c5">6</td><td class="weekend off in-range available" data-title="r5c6">7</td></tr></tbody></table></div></div><div class="calendar right"><div class="daterangepicker_input"><input class="input-mini" type="text" name="daterangepicker_end" value=""><i class="fa fa-calendar"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o"></i></div></div><div class="calendar-table"><table class="table-condensed"><thead><tr><th></th><th colspan="5" class="month">January 2018</th><th class="next available"><i class="fa fa-angle-right"></i></th></tr><tr><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th><th>Su</th></tr></thead><tbody><tr><td class="off available" data-title="r0c0">25</td><td class="off available" data-title="r0c1">26</td><td class="off available" data-title="r0c2">27</td><td class="off available" data-title="r0c3">28</td><td class="off available" data-title="r0c4">29</td><td class="weekend off available" data-title="r0c5">30</td><td class="weekend off active start-date available" data-title="r0c6">31</td></tr><tr><td class="in-range available" data-title="r1c0">1</td><td class="in-range available" data-title="r1c1">2</td><td class="in-range available" data-title="r1c2">3</td><td class="in-range available" data-title="r1c3">4</td><td class="in-range available" data-title="r1c4">5</td><td class="weekend in-range available" data-title="r1c5">6</td><td class="weekend in-range available" data-title="r1c6">7</td></tr><tr><td class="in-range available" data-title="r2c0">8</td><td class="in-range available" data-title="r2c1">9</td><td class="in-range available" data-title="r2c2">10</td><td class="in-range available" data-title="r2c3">11</td><td class="in-range available" data-title="r2c4">12</td><td class="weekend in-range available" data-title="r2c5">13</td><td class="weekend in-range available" data-title="r2c6">14</td></tr><tr><td class="in-range available" data-title="r3c0">15</td><td class="in-range available" data-title="r3c1">16</td><td class="in-range available" data-title="r3c2">17</td><td class="in-range available" data-title="r3c3">18</td><td class="in-range available" data-title="r3c4">19</td><td class="weekend in-range available" data-title="r3c5">20</td><td class="weekend in-range available" data-title="r3c6">21</td></tr><tr><td class="in-range available" data-title="r4c0">22</td><td class="in-range available" data-title="r4c1">23</td><td class="in-range available" data-title="r4c2">24</td><td class="in-range available" data-title="r4c3">25</td><td class="in-range available" data-title="r4c4">26</td><td class="weekend in-range available" data-title="r4c5">27</td><td class="weekend in-range available" data-title="r4c6">28</td></tr><tr><td class="today active end-date in-range available" data-title="r5c0">29</td><td class="available" data-title="r5c1">30</td><td class="available" data-title="r5c2">31</td><td class="off available" data-title="r5c3">1</td><td class="off available" data-title="r5c4">2</td><td class="weekend off available" data-title="r5c5">3</td><td class="weekend off available" data-title="r5c6">4</td></tr></tbody></table></div></div><div class="ranges"><ul><li class="">Today</li><li class="">Yesterday</li><li>Last 7 Days</li><li class="active">Last 30 Days</li><li>This Month</li><li>Last Month</li><li>Custom</li></ul><div class="range_inputs"><button class="applyBtn btn btn-sm btn-success" type="button">Apply</button> <button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button></div></div></div></body></html>