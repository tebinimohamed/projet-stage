<?php
session_start();
$email = $_SESSION['email'];

if (!isset($_SESSION['connect'])) {
    header("location:index.php");
}
?>

<!DOCTYPE html>
<!-- saved from url=(0033)http://127.0.0.1:8080/projet_php/ -->
<html lang="en"><!--<![endif]--><!-- BEGIN HEAD --><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Contact As</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="./Index2_files/css" rel="stylesheet" type="text/css">
    <link href="./Index2_files/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="./Index2_files/simple-line-icons.min.css" rel="stylesheet" type="text/css">
    <link href="./Index2_files/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="./Index2_files/bootstrap-switch.min.css" rel="stylesheet" type="text/css">
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="./Index2_files/daterangepicker.min.css" rel="stylesheet" type="text/css">
    <link href="./Index2_files/morris.css" rel="stylesheet" type="text/css">
    <link href="./Index2_files/fullcalendar.min.css" rel="stylesheet" type="text/css">
    <link href="./Index2_files/jqvmap.css" rel="stylesheet" type="text/css">
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="./Index2_files/components-md.min.css" rel="stylesheet" id="style_components" type="text/css">
    <link href="./Index2_files/plugins-md.min.css" rel="stylesheet" type="text/css">
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="./Index2_files/layout.min.css" rel="stylesheet" type="text/css">
    <link href="./Index2_files/default.min.css" rel="stylesheet" type="text/css" id="style_color">
    <link href="./Index2_files/custom.min.css" rel="stylesheet" type="text/css">
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="file:///C:/Users/daly/Desktop/THEME%20admin/metronic_v4.5.6/theme/admin_3_material_design/favicon.ico"> <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style><style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style><style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-md">
        <!-- BEGIN HEADER -->
        <div class="page-header">
            <div class="page-header-top">
                <div class="page-logo">
                    <a href="index2.php">
<img src="2.jpg">                    </a>
                </div>
                 <div class="page-header-top">
                <div class="page-logo">
                    <a href="index2.php">
                    <img src="2.jpg">                    </a>
                </div>
                <div class="top-menu">
                    
                </div>
            </div>
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <li class="dropdown dropdown-user dropdown-dark">


                        </li>
                    </ul>
                </div>
            </div>
            <!-- END HEADER TOP -->
            <!-- BEGIN HEADER MENU -->
            <div class="page-header-menu" style="display: block;">
                <div class="container">
                    <!-- BEGIN HEADER SEARCH BOX -->
                    
                </form>
                <!-- END HEADER SEARCH BOX -->
                <!-- BEGIN MEGA MENU -->
                <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
                <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
                <div class="hor-menu">
                    <ul class="nav navbar-nav">
                        <li class="menu-dropdown classic-menu-dropdown active">
                            <a href="index2.php"> ACCUEIL
                                <span class="arrow"></span>
                            </a>

                        </li>
                        <li class="menu-dropdown classic-menu-dropdown active">
                            <a href="annonce.php"> LES ANNONCE
                                <span class="arrow"></span>
                            </a>

                        </li>
                        <li class="menu-dropdown classic-menu-dropdown active">
                            <a href="ajoute.php"> AJOUTE UNE ANNONCE
                                <span class="arrow"></span>
                            </a>

                        </li>
                         <li class="menu-dropdown classic-menu-dropdown active">
                                <a href="contact.php" >Contact Us
                                    <span class="arrow"></span>
                                </a>

                            </li>
                        <li class="menu-dropdown classic-menu-dropdown active">
                            <a href="logout.php" >Déconnexion
                                <span class="arrow"></span>
                            </a>

                        </li>

                    </ul>
                </div>
                <!-- END MEGA MENU -->
            </div>
        </div>
        <!-- END HEADER MENU -->
    </div>
    <!-- END HEADER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <!-- BEGIN PAGE HEAD-->
            <div class="page-head">
                <div class="container">
                    <!-- BEGIN PAGE TITLE -->
                    <div class="page-title">
                        <h1>Contact As </h1>
                    </div>
                    <!-- END PAGE TITLE -->
                    <!-- BEGIN PAGE TOOLBAR -->
                    <div class="page-toolbar">
                        <!-- BEGIN THEME PANEL -->
                        <div class="btn-group btn-theme-panel">
                            <a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-settings"></i>
                            </a>
                            <div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
                                <div class="row">

                                    <div class="col-md-6 col-sm-6 col-xs-12 seperator">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-content" style="min-height: 308px;">
                    <div class="container">
                        <!-- BEGIN PAGE BREADCRUMBS -->
                        
                       <form class="register-form" action="contact.php" method="post" novalidate="novalidate">
                                            <h3 class="font-green">Envoyer un Email :</h3>
                                            <div class="form-group">
                                                        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                                                        <label class="control-label visible-ie8 visible-ie9">Votre Email</label>
                                                        <input class="form-control placeholder-no-fix" type="email" placeholder="Votre Email" name="v_email" value="<?php echo $email;
?>" readonly> </div>
                                                <div class="form-group">
                                                        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                                                        <label class="control-label visible-ie8 visible-ie9">TO</label>
                                                        <input class="form-control placeholder-no-fix" type="email" placeholder="TO" name="to" value="annimauxsos@gmail.com" readonly> </div>
                                                     <div class="form-group">
                                                            <label class="control-label visible-ie8 visible-ie9">Sujet</label>
                                                            <input class="form-control placeholder-no-fix" type="text" placeholder="Sujet" name="sjt" required=""> </div>
                                                        <div class="form-group">
                                                            <label class="control-label visible-ie8 visible-ie9">Message</label>
                                                            <textarea rows="4" cols="50" class="form-control placeholder-no-fix" placeholder="Message" name="msg" required></textarea> </div>
                                                                                            <div class="form-actions">
                                                                                                <button type="button" id="register-back-btn" class="btn green btn-outline">Back</button>
<button type="submit" id="register-submit-btn" class="btn btn-success uppercase pull-right" name="btn1">Submit</button>                                                                                            </div>
                                                                                        </form>

                        
                        
                        
                    </form>
                </div>
            </div>

            
        </div>
    </div>
</div>
<!-- END PRE-FOOTER -->
<!-- BEGIN INNER FOOTER -->



<!-- END INNER FOOTER -->
<!-- END FOOTER -->
                            <!--[if lt IE 9]>
                    <script src="../assets/global/plugins/respond.min.js"></script>
                    <script src="../assets/global/plugins/excanvas.min.js"></script> 
                <![endif]-->
                <!-- BEGIN CORE PLUGINS -->
                <script src="./Index2_files/jquery.min.js.téléchargement" type="text/javascript"></script>
                <script src="./Index2_files/bootstrap.min.js.téléchargement" type="text/javascript"></script>
                <script src="./Index2_files/js.cookie.min.js.téléchargement" type="text/javascript"></script>
                <script src="./Index2_files/bootstrap-hover-dropdown.min.js.téléchargement" type="text/javascript"></script>
                <script src="./Index2_files/jquery.slimscroll.min.js.téléchargement" type="text/javascript"></script>
                <script src="./Index2_files/jquery.blockui.min.js.téléchargement" type="text/javascript"></script>
                <script src="./Index2_files/bootstrap-switch.min.js.téléchargement" type="text/javascript"></script>
                <!-- END CORE PLUGINS -->
                <!-- BEGIN PAGE LEVEL PLUGINS -->
                <script src="./Index2_files/moment.min.js.téléchargement" type="text/javascript"></script>
                <script src="./Index2_files/daterangepicker.min.js.téléchargement" type="text/javascript"></script>
                <script src="./Index2_files/morris.min.js.téléchargement" type="text/javascript"></script>
                <script src="./Index2_files/raphael-min.js.téléchargement" type="text/javascript"></script>
                <script src="./Index2_files/jquery.waypoints.min.js.téléchargement" type="text/javascript"></script>
                <script src="./Index2_files/jquery.counterup.min.js.téléchargement" type="text/javascript"></script>
                <script src="./Index2_files/fullcalendar.min.js.téléchargement" type="text/javascript"></script>
                <script src="./Index2_files/jquery.flot.min.js.téléchargement" type="text/javascript"></script>
                <script src="./Index2_files/jquery.flot.resize.min.js.téléchargement" type="text/javascript"></script>
                <script src="./Index2_files/jquery.flot.categories.min.js.téléchargement" type="text/javascript"></script>
                <script src="./Index2_files/jquery.easypiechart.min.js.téléchargement" type="text/javascript"></script>
                <script src="./Index2_files/jquery.sparkline.min.js.téléchargement" type="text/javascript"></script>
                <script src="./Index2_files/jquery.vmap.js.téléchargement" type="text/javascript"></script>
                <script src="./Index2_files/jquery.vmap.russia.js.téléchargement" type="text/javascript"></script>
                <script src="./Index2_files/jquery.vmap.world.js.téléchargement" type="text/javascript"></script>
                <script src="./Index2_files/jquery.vmap.europe.js.téléchargement" type="text/javascript"></script>
                <script src="./Index2_files/jquery.vmap.germany.js.téléchargement" type="text/javascript"></script>
                <script src="./Index2_files/jquery.vmap.usa.js.téléchargement" type="text/javascript"></script>
                <script src="./Index2_files/jquery.vmap.sampledata.js.téléchargement" type="text/javascript"></script>
                <!-- END PAGE LEVEL PLUGINS -->
                <!-- BEGIN THEME GLOBAL SCRIPTS -->
                <script src="./Index2_files/app.min.js.téléchargement" type="text/javascript"></script>
                <!-- END THEME GLOBAL SCRIPTS -->
                <!-- BEGIN PAGE LEVEL SCRIPTS -->
                <script src="./Index2_files/dashboard.min.js.téléchargement" type="text/javascript"></script>
                <!-- END PAGE LEVEL SCRIPTS -->
                <!-- BEGIN THEME LAYOUT SCRIPTS -->
                <script src="./Index2_files/layout.min.js.téléchargement" type="text/javascript"></script>
                <script src="./Index2_files/demo.min.js.téléchargement" type="text/javascript"></script>
                <script src="./Index2_files/quick-sidebar.min.js.téléchargement" type="text/javascript"></script>
                <!-- END THEME LAYOUT SCRIPTS -->


                <div class="jqvmap-label"></div><div class="jqvmap-label"></div><div class="jqvmap-label"></div><div class="jqvmap-label"></div><div class="jqvmap-label"></div></div></div></div></div></div></body></html>