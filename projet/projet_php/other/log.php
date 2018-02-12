<?php session_start();
$connect=true;
if(!isset($_SESSION['connect']))
{
    $connect=false;
}
if(isset($_POST['btn'])) {
$username = $_POST['username'];
$password = $_POST['password'];
$concetion = mysqli_connect('localhost','root','','projet_stage');
$req="SELECT * FROM utilisateur WHERE username='$username' and password='$password'";
$exe=mysqli_query($concetion,$req);
$row = mysqli_fetch_array($exe);
if (count($row) > 0 ) {
$_SESSION['connect'] = true;
$connect=true;
}
    if(($row['username'] == $username) && ($row['password'] == $password))
    {?>
    <!DOCTYPE html>
<!-- saved from url=(0033)http://127.0.0.1:8080/projet_php/ -->
<html lang="en"><!--<![endif]--><!-- BEGIN HEAD --><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <title>Index</title>
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
                            <center><p>########</p></center>
                        </a>
                    </div>
                     <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <li class="dropdown dropdown-user dropdown-dark">
                                   <a href="indexxxx.php">logout</a> 
                                </a>
                            </li>
                        </ul>
                    </div>
            </div>
            <!-- END HEADER TOP -->
            <!-- BEGIN HEADER MENU -->
            <div class="page-header-menu" style="display: block;">
                <div class="container">
                    <!-- BEGIN HEADER SEARCH BOX -->
                    <form class="search-form" action="file:///C:/Users/daly/Desktop/THEME%20admin/metronic_v4.5.6/theme/admin_3_material_design/page_general_search.html" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="query">
                            <span class="input-group-btn">
                                <a href="javascript:;" class="btn submit">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </span>
                        </div>
                    </form>
                    <!-- END HEADER SEARCH BOX -->
                    <!-- BEGIN MEGA MENU -->
                    <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
                    <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
                    <div class="hor-menu  ">
                        <ul class="nav navbar-nav">
                            <li class="menu-dropdown classic-menu-dropdown active">
                                <a href="index2.php"> ACCUEIL
                                    <span class="arrow"></span>
                                </a>
                                
                            </li>
                            <li class="menu-dropdown classic-menu-dropdown active">
                                <a href="annonce1.php"> LES ANNONCE
                                    <span class="arrow"></span>
                                </a>
                                
                            </li>
                            <li class="menu-dropdown classic-menu-dropdown active">
                                <a href="ajoute.php"> AJOUTE UNE ANNONCE
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
                            <h1>Introduction
                                
                            </h1>
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
                        <ul class="page-breadcrumb breadcrumb">
                            <li>
                                <a href="http://127.0.0.1:8080/projet_php/index.php"> Home </a>
                            </li>
                        </ul>
                        <p>###################</p>
        <div class="page-prefooter">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                        <h2>About</h2>
                        <p> ######. </p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs12 footer-block">
                        <h2>Subscribe Email</h2>
                        <div class="subscribe-form">
                            <form action="javascript:;">
                                <div class="input-group">
                                    <input type="text" placeholder="mail@email.com" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn" type="submit">Submit</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                        <h2>Contacts</h2>
                        <address class="margin-bottom-40"> Phone: #######""
                            <br> Email:
                            <a href="mailto:info@metronic.com">#######</a>
                        </address>
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
	<?php
}
else{
	?>
<!DOCTYPE html>
<!-- saved from url=(0062)file:///C:/Users/daly/Desktop/projet_php/User%20Login%201.html -->
<html lang="en"><!--<![endif]--><!-- BEGIN HEAD --><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <title>User Login 1</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css">
        <link href="./User Login 1_files/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="./User Login 1_files/simple-line-icons.min.css" rel="stylesheet" type="text/css">
        <link href="./User Login 1_files/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="./User Login 1_files/bootstrap-switch.min.css" rel="stylesheet" type="text/css">
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="./User Login 1_files/select2.min.css" rel="stylesheet" type="text/css">
        <link href="./User Login 1_files/select2-bootstrap.min.css" rel="stylesheet" type="text/css">
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="./User Login 1_files/components-md.min.css" rel="stylesheet" id="style_components" type="text/css">
        <link href="./User Login 1_files/plugins-md.min.css" rel="stylesheet" type="text/css">
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="./User Login 1_files/login.min.css" rel="stylesheet" type="text/css">
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="file:///C:/Users/daly/Desktop/THEME%20admin/metronic_v4.5.6/theme/admin_3_material_design/favicon.ico"> </head>
    <!-- END HEAD -->

    <body class=" login">
        <!-- BEGIN LOGO -->
        <div class="logo">
            <a href="#">
                 </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form" action="login.php" method="post" novalidate="novalidate">
                <h3 class="form-title font-green">Sign In</h3>
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Enter any username and password. </span>
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Username</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"> </div>
                <div class="form-actions">
                    <button type="submit" class="btn green uppercase" name="btn">Login</button>
                    <label class="rememberme check mt-checkbox mt-checkbox-outline">
                        <input type="checkbox" name="remember" value="1">Remember
                        <span></span>
                    </label>
                    <a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>
                </div>
                <div class="create-account">
                    <p>
                        <a href="javascript:;" id="register-btn" class="uppercase">Create an account</a>
                    </p>
                </div>
            </form>
            <!-- END LOGIN FORM -->
            <!-- BEGIN FORGOT PASSWORD FORM -->
            <form class="forget-form" action="#" method="post" novalidate="novalidate">
                <h3 class="font-green">Forget Password ?</h3>
                <p> Enter your e-mail address below to reset your password. </p>
                <div class="form-group">
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email"> </div>
                <div class="form-actions">
                    <button type="button" id="back-btn" class="btn green btn-outline">Back</button>
                    <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
                </div>
            </form>
            <!-- END FORGOT PASSWORD FORM -->
            <!-- BEGIN REGISTRATION FORM -->
            <form class="register-form" action="iscri.php" method="post" novalidate="novalidate">
                <h3 class="font-green">Sign Up</h3>
                <p class="hint"> Enter your personal details below: </p>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">nom</label>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="Nom" name="nom" required> </div>
                    <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">prénom</label>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="Prenom" name="prenom" required> </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Email</label>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="Email" name="email"> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">CIN</label>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="CIN" name="cin" required=""> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">date de naissance</label>
                    <input class="form-control placeholder-no-fix" type="date" placeholder="Date de naissance" name="date_naissance" required> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">numéro téléphone</label>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="Numéro téléphone" name="num_tel" required> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Country</label>
                    <select name="country" class="form-control">
                        <option value="">Country</option>
                        <option value="AF">Afghanistan</option>
                        <option value="AL">Albania</option>
                        <option value="DZ">Algeria</option>
                        <option value="AS">American Samoa</option>
                        <option value="AD">Andorra</option>
                        <option value="AO">Angola</option>
                        <option value="AI">Anguilla</option>
                        <option value="AR">Argentina</option>
                        <option value="AM">Armenia</option>
                        <option value="AW">Aruba</option>
                        <option value="AU">Australia</option>
                        <option value="AT">Austria</option>
                        <option value="AZ">Azerbaijan</option>
                        <option value="BS">Bahamas</option>
                        <option value="BH">Bahrain</option>
                        <option value="BD">Bangladesh</option>
                        <option value="BB">Barbados</option>
                        <option value="BY">Belarus</option>
                        <option value="BE">Belgium</option>
                        <option value="BZ">Belize</option>
                        <option value="BJ">Benin</option>
                        <option value="BM">Bermuda</option>
                        <option value="BT">Bhutan</option>
                        <option value="BO">Bolivia</option>
                        <option value="BA">Bosnia and Herzegowina</option>
                        <option value="BW">Botswana</option>
                        <option value="BV">Bouvet Island</option>
                        <option value="BR">Brazil</option>
                        <option value="IO">British Indian Ocean Territory</option>
                        <option value="BN">Brunei Darussalam</option>
                        <option value="BG">Bulgaria</option>
                        <option value="BF">Burkina Faso</option>
                        <option value="BI">Burundi</option>
                        <option value="KH">Cambodia</option>
                        <option value="CM">Cameroon</option>
                        <option value="CA">Canada</option>
                        <option value="CV">Cape Verde</option>
                        <option value="KY">Cayman Islands</option>
                        <option value="CF">Central African Republic</option>
                        <option value="TD">Chad</option>
                        <option value="CL">Chile</option>
                        <option value="CN">China</option>
                        <option value="CX">Christmas Island</option>
                        <option value="CC">Cocos (Keeling) Islands</option>
                        <option value="CO">Colombia</option>
                        <option value="KM">Comoros</option>
                        <option value="CG">Congo</option>
                        <option value="CD">Congo, the Democratic Republic of the</option>
                        <option value="CK">Cook Islands</option>
                        <option value="CR">Costa Rica</option>
                        <option value="CI">Cote d'Ivoire</option>
                        <option value="HR">Croatia (Hrvatska)</option>
                        <option value="CU">Cuba</option>
                        <option value="CY">Cyprus</option>
                        <option value="CZ">Czech Republic</option>
                        <option value="DK">Denmark</option>
                        <option value="DJ">Djibouti</option>
                        <option value="DM">Dominica</option>
                        <option value="DO">Dominican Republic</option>
                        <option value="EC">Ecuador</option>
                        <option value="EG">Egypt</option>
                        <option value="SV">El Salvador</option>
                        <option value="GQ">Equatorial Guinea</option>
                        <option value="ER">Eritrea</option>
                        <option value="EE">Estonia</option>
                        <option value="ET">Ethiopia</option>
                        <option value="FK">Falkland Islands (Malvinas)</option>
                        <option value="FO">Faroe Islands</option>
                        <option value="FJ">Fiji</option>
                        <option value="FI">Finland</option>
                        <option value="FR">France</option>
                        <option value="GF">French Guiana</option>
                        <option value="PF">French Polynesia</option>
                        <option value="TF">French Southern Territories</option>
                        <option value="GA">Gabon</option>
                        <option value="GM">Gambia</option>
                        <option value="GE">Georgia</option>
                        <option value="DE">Germany</option>
                        <option value="GH">Ghana</option>
                        <option value="GI">Gibraltar</option>
                        <option value="GR">Greece</option>
                        <option value="GL">Greenland</option>
                        <option value="GD">Grenada</option>
                        <option value="GP">Guadeloupe</option>
                        <option value="GU">Guam</option>
                        <option value="GT">Guatemala</option>
                        <option value="GN">Guinea</option>
                        <option value="GW">Guinea-Bissau</option>
                        <option value="GY">Guyana</option>
                        <option value="HT">Haiti</option>
                        <option value="HM">Heard and Mc Donald Islands</option>
                        <option value="VA">Holy See (Vatican City State)</option>
                        <option value="HN">Honduras</option>
                        <option value="HK">Hong Kong</option>
                        <option value="HU">Hungary</option>
                        <option value="IS">Iceland</option>
                        <option value="IN">India</option>
                        <option value="ID">Indonesia</option>
                        <option value="IR">Iran (Islamic Republic of)</option>
                        <option value="IQ">Iraq</option>
                        <option value="IE">Ireland</option>
                        <option value="IL">Israel</option>
                        <option value="IT">Italy</option>
                        <option value="JM">Jamaica</option>
                        <option value="JP">Japan</option>
                        <option value="JO">Jordan</option>
                        <option value="KZ">Kazakhstan</option>
                        <option value="KE">Kenya</option>
                        <option value="KI">Kiribati</option>
                        <option value="KP">Korea, Democratic People's Republic of</option>
                        <option value="KR">Korea, Republic of</option>
                        <option value="KW">Kuwait</option>
                        <option value="KG">Kyrgyzstan</option>
                        <option value="LA">Lao People's Democratic Republic</option>
                        <option value="LV">Latvia</option>
                        <option value="LB">Lebanon</option>
                        <option value="LS">Lesotho</option>
                        <option value="LR">Liberia</option>
                        <option value="LY">Libyan Arab Jamahiriya</option>
                        <option value="LI">Liechtenstein</option>
                        <option value="LT">Lithuania</option>
                        <option value="LU">Luxembourg</option>
                        <option value="MO">Macau</option>
                        <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                        <option value="MG">Madagascar</option>
                        <option value="MW">Malawi</option>
                        <option value="MY">Malaysia</option>
                        <option value="MV">Maldives</option>
                        <option value="ML">Mali</option>
                        <option value="MT">Malta</option>
                        <option value="MH">Marshall Islands</option>
                        <option value="MQ">Martinique</option>
                        <option value="MR">Mauritania</option>
                        <option value="MU">Mauritius</option>
                        <option value="YT">Mayotte</option>
                        <option value="MX">Mexico</option>
                        <option value="FM">Micronesia, Federated States of</option>
                        <option value="MD">Moldova, Republic of</option>
                        <option value="MC">Monaco</option>
                        <option value="MN">Mongolia</option>
                        <option value="MS">Montserrat</option>
                        <option value="MA">Morocco</option>
                        <option value="MZ">Mozambique</option>
                        <option value="MM">Myanmar</option>
                        <option value="NA">Namibia</option>
                        <option value="NR">Nauru</option>
                        <option value="NP">Nepal</option>
                        <option value="NL">Netherlands</option>
                        <option value="AN">Netherlands Antilles</option>
                        <option value="NC">New Caledonia</option>
                        <option value="NZ">New Zealand</option>
                        <option value="NI">Nicaragua</option>
                        <option value="NE">Niger</option>
                        <option value="NG">Nigeria</option>
                        <option value="NU">Niue</option>
                        <option value="NF">Norfolk Island</option>
                        <option value="MP">Northern Mariana Islands</option>
                        <option value="NO">Norway</option>
                        <option value="OM">Oman</option>
                        <option value="PK">Pakistan</option>
                        <option value="PW">Palau</option>
                        <option value="PA">Panama</option>
                        <option value="PG">Papua New Guinea</option>
                        <option value="PY">Paraguay</option>
                        <option value="PE">Peru</option>
                        <option value="PH">Philippines</option>
                        <option value="PN">Pitcairn</option>
                        <option value="PL">Poland</option>
                        <option value="PT">Portugal</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="QA">Qatar</option>
                        <option value="RE">Reunion</option>
                        <option value="RO">Romania</option>
                        <option value="RU">Russian Federation</option>
                        <option value="RW">Rwanda</option>
                        <option value="KN">Saint Kitts and Nevis</option>
                        <option value="LC">Saint LUCIA</option>
                        <option value="VC">Saint Vincent and the Grenadines</option>
                        <option value="WS">Samoa</option>
                        <option value="SM">San Marino</option>
                        <option value="ST">Sao Tome and Principe</option>
                        <option value="SA">Saudi Arabia</option>
                        <option value="SN">Senegal</option>
                        <option value="SC">Seychelles</option>
                        <option value="SL">Sierra Leone</option>
                        <option value="SG">Singapore</option>
                        <option value="SK">Slovakia (Slovak Republic)</option>
                        <option value="SI">Slovenia</option>
                        <option value="SB">Solomon Islands</option>
                        <option value="SO">Somalia</option>
                        <option value="ZA">South Africa</option>
                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                        <option value="ES">Spain</option>
                        <option value="LK">Sri Lanka</option>
                        <option value="SH">St. Helena</option>
                        <option value="PM">St. Pierre and Miquelon</option>
                        <option value="SD">Sudan</option>
                        <option value="SR">Suriname</option>
                        <option value="SJ">Svalbard and Jan Mayen Islands</option>
                        <option value="SZ">Swaziland</option>
                        <option value="SE">Sweden</option>
                        <option value="CH">Switzerland</option>
                        <option value="SY">Syrian Arab Republic</option>
                        <option value="TW">Taiwan, Province of China</option>
                        <option value="TJ">Tajikistan</option>
                        <option value="TZ">Tanzania, United Republic of</option>
                        <option value="TH">Thailand</option>
                        <option value="TG">Togo</option>
                        <option value="TK">Tokelau</option>
                        <option value="TO">Tonga</option>
                        <option value="TT">Trinidad and Tobago</option>
                        <option value="TN">Tunisia</option>
                        <option value="TR">Turkey</option>
                        <option value="TM">Turkmenistan</option>
                        <option value="TC">Turks and Caicos Islands</option>
                        <option value="TV">Tuvalu</option>
                        <option value="UG">Uganda</option>
                        <option value="UA">Ukraine</option>
                        <option value="AE">United Arab Emirates</option>
                        <option value="GB">United Kingdom</option>
                        <option value="US">United States</option>
                        <option value="UM">United States Minor Outlying Islands</option>
                        <option value="UY">Uruguay</option>
                        <option value="UZ">Uzbekistan</option>
                        <option value="VU">Vanuatu</option>
                        <option value="VE">Venezuela</option>
                        <option value="VN">Viet Nam</option>
                        <option value="VG">Virgin Islands (British)</option>
                        <option value="VI">Virgin Islands (U.S.)</option>
                        <option value="WF">Wallis and Futuna Islands</option>
                        <option value="EH">Western Sahara</option>
                        <option value="YE">Yemen</option>
                        <option value="ZM">Zambia</option>
                        <option value="ZW">Zimbabwe</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Address</label>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="Address" name="address"> </div>
                     <div class="form-group">
                    <p>SEXE:</p>
                    <label class="control-label visible-ie8 visible-ie9">Sexe</label>
                    <input type="radio" name="rd1" value="femme" checked> FEMME<br>
                    <input type="radio" name="rd1" value="homme"> HOMME</div>
                <div class="form-group">
                    <p>TYPE:</p>
                    <label class="control-label visible-ie8 visible-ie9">Type</label>
                    <input type="radio" name="rd" value="Utilisatuer" checked> Utilisatuer<br>
                    <input type="radio" name="rd" value="Association"> Association</div>
                <p class="hint"> Enter your account details below: </p>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Username</label>
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password"> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="rpassword"> </div>
               
                <div class="form-actions">
                    <button type="button" id="register-back-btn" class="btn green btn-outline">Back</button>
                    <button type="submit" id="register-submit-btn" class="btn btn-success uppercase pull-right" name="btn1">Submit</button>
                </div>
            </form>
            <!-- END REGISTRATION FORM -->
        </div>
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="./User Login 1_files/jquery.min.js.téléchargement" type="text/javascript"></script>
        <script src="./User Login 1_files/bootstrap.min.js.téléchargement" type="text/javascript"></script>
        <script src="./User Login 1_files/js.cookie.min.js.téléchargement" type="text/javascript"></script>
        <script src="./User Login 1_files/bootstrap-hover-dropdown.min.js.téléchargement" type="text/javascript"></script>
        <script src="./User Login 1_files/jquery.slimscroll.min.js.téléchargement" type="text/javascript"></script>
        <script src="./User Login 1_files/jquery.blockui.min.js.téléchargement" type="text/javascript"></script>
        <script src="./User Login 1_files/bootstrap-switch.min.js.téléchargement" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="./User Login 1_files/jquery.validate.min.js.téléchargement" type="text/javascript"></script>
        <script src="./User Login 1_files/additional-methods.min.js.téléchargement" type="text/javascript"></script>
        <script src="./User Login 1_files/select2.full.min.js.téléchargement" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="./User Login 1_files/app.min.js.téléchargement" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="./User Login 1_files/login.min.js.téléchargement" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
    

</body></html>
	<?php
}


}
?>