<!doctype html>

<html lang="en"> 

<?php 
include 'connect.php';
session_start();

if (isset($_SESSION['login'])){
    
    $id = $_SESSION['login'];
    //echo $id;
    $q = "SELECT * FROM members WHERE email = '$id' ";
    $s = mysqli_query($conn,$q);
    $row = mysqli_fetch_assoc($s);
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $em = $row['email'];
    $gender = $row['gender'];
    $phoneno = $row['phoneno'];

}
else{
   echo "you must login first";
  header('location:login.php');
}

?>


<?php

if (isset($_POST['submit'])){
    $address = mysqli_escape_string($conn,$_POST['address']);
    $dob = mysqli_escape_string($conn,$_POST['dob']);
    $school = mysqli_escape_string($conn,$_POST['school']);
    $year = mysqli_escape_string($conn,$_POST['year']);
    $type = mysqli_escape_string($conn,$_POST['type']);
    $grade = mysqli_escape_string($conn,$_POST['grade']);
    $conference = mysqli_escape_string($conn,$_POST['conference']);
    $firm = mysqli_escape_string($conn,$_POST['firm']);
    $employer_name = mysqli_escape_string($conn,$_POST['employer_name']);
    $employer_email = mysqli_escape_string($conn,$_POST['employer_email']);
    $employer_phone = mysqli_escape_string($conn,$_POST['employer_phone']);
    $filepath1 = 'image/passport/';
    $filepath2 = 'image/primary/';
    $filepath3 = 'image/olevel/';
    $filepath4 = 'image/higher/';

    //passport
    copy($_FILES['passport']['tmp_name'], "".$filepath1."".$_FILES['passport']['name']);
  $pic1 = ("".$filepath1."".$_FILES['passport']['name']);
  //primary
  copy($_FILES['primary']['tmp_name'], "".$filepath2."".$_FILES['primary']['name']);
  $pic2 = ("".$filepath2."".$_FILES['primary']['name']);
  //olevel
  copy($_FILES['olevel']['tmp_name'], "".$filepath3."".$_FILES['olevel']['name']);
  $pic3 = ("".$filepath3."".$_FILES['olevel']['name']);
  //higher
  copy($_FILES['higher_result']['tmp_name'], "".$filepath4."".$_FILES['higher_result']['name']);
  $pic4 = ("".$filepath4."".$_FILES['higher_result']['name']);


$sqli = " UPDATE members SET address = '$address',dob = '$dob',school ='$school',year = '$year',type ='$type', grade  ='$grade',conference = '$conference',firm ='$firm',employer_name = '$employer_name', employer_email = 'employer_email',employer_phone  = 'employer_phone', passport = '$pic1',primary_school = '$pic2',olevel = '$pic3',higher_result = '$pic4' WHERE email = '$id' ";

$query = mysqli_query($conn,$sqli);
if ($query){
    echo "success";
}
else{
    echo mysql_error();
}

}

?>







<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>

    <link rel="icon" type="image/png" href="assets/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/img/favicon-32x32.png" sizes="32x32">

    <title>Registration</title>
    <link rel="stylesheet" href="assets/skins/dropify/css/dropify.css">
    
    <!-- uikit -->
    <link rel="stylesheet" href="bower_components/uikit/css/uikit.almost-flat.min.css" media="all">

    <!-- flag icons -->
    <link rel="stylesheet" href="assets/icons/flags/flags.min.css" media="all">

    <!-- style switcher -->
    <link rel="stylesheet" href="assets/css/style_switcher.min.css" media="all">
    
    <!-- altair admin -->
    <link rel="stylesheet" href="assets/css/main.min.css" media="all">

    <!-- themes -->
    <link rel="stylesheet" href="assets/css/themes/themes_combined.min.css" media="all">

<link rel="stylesheet" href="assets/skins/dropify/css/dropify.css">
    <!-- uikit -->
    <link rel="stylesheet" href="bower_components/uikit/css/uikit.almost-flat.min.css" media="all">

    <!-- flag icons -->
   
    <!-- themes -->
    <link rel="stylesheet" href="assets/css/themes/themes_combined.min.css" media="all">

    <!-- matchMedia polyfill for testing media queries in JS -->
    <!--[if lte IE 9]>
        <script type="text/javascript" src="bower_components/matchMedia/matchMedia.js"></script>
        <script type="text/javascript" src="bower_components/matchMedia/matchMedia.addListener.js"></script>
        <link rel="stylesheet" href="assets/css/ie.css" media="all">
    <![endif]-->

</head>
<body class="disable_transitions sidebar_main_open sidebar_main_swipe">
    <!-- main header -->
    <header id="header_main">
        <div class="header_main_content">
            <nav class="uk-navbar">
                                
                <!-- main sidebar switch -->
                <a href="#" id="sidebar_main_toggle" class="sSwitch sSwitch_left">
                    <span class="sSwitchIcon"></span>
                </a>
                
                <!-- secondary sidebar switch -->
                <a href="#" id="sidebar_secondary_toggle" class="sSwitch sSwitch_right sidebar_secondary_check">
                    <span class="sSwitchIcon"></span>
                </a>
                
                    
                
                <div class="uk-navbar-flip">
                    <ul class="uk-navbar-nav user_actions">
                        <li><a href="#" id="full_screen_toggle" class="user_action_icon uk-visible-large"><i class="material-icons md-24 md-light">fullscreen</i></a></li>
                       
                     
                            
                        </li>
                        <li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                            <a href="#" class="user_action_image"><img class="md-user-image" src="assets/img/avatars/avatar_11_tn.png" alt=""/></a>
                            <div class="uk-dropdown uk-dropdown-small">
                                <ul class="uk-nav js-uk-prevent">
                                    <li><a href="page_user_profile.php">My profile</a></li>
                                    <li><a href="logout.php">Log out</a></li>
                                    
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        
    </header><!-- main header end -->
    <!-- main sidebar -->
    <aside id="sidebar_main">
        
        <div class="sidebar_main_header">
            <div class="sidebar_logo">
                <a href="index-2.html" class="sSidebar_hide sidebar_logo_large">
                    <img class="logo_regular" src="assets/img/logo_main.png" alt="" height="15" width="71"/>
                    <img class="logo_light" src="assets/img/logo_main_white.png" alt="" height="15" width="71"/>
                </a>
                <a href="index-2.html" class="sSidebar_show sidebar_logo_small">
                    <img class="logo_regular" src="assets/img/logo_main_small.png" alt="" height="32" width="32"/>
                    <img class="logo_light" src="assets/img/logo_main_small_light.png" alt="" height="32" width="32"/>
                </a>
            </div>
            
        </div>
        
        <div class="menu_section">
            <ul>


                <li title="User Profile">
                    <a href="page_user_profile.php">
                        <span class="menu_icon"><i class="material-icons">&#xE87C;</i></span>
                        <span class="menu_title">User Profile</span>
                    </a>
                    
                </li>
                
                <li title="Forms">
                    <a href="forms_wizard.php">
                        <span class="menu_icon"><i class="material-icons">&#xE8D2;</i></span>
                        <span class="menu_title">Forms</span>
                    </a>
    
                
                </li>
                
                
                
                
                
               
               
               
                
                             
            </ul>
        </div>
    </aside><!-- main sidebar end -->

    <div id="page_content">
        <div id="page_content_inner">

            <h2 class="heading_b uk-margin-bottom">APPLICATION FORM</h2>

            <div class="md-card uk-margin-large-bottom">
                <div class="md-card-content">
                    <form class="uk-form-stacked" id="wizard_advanced_form" action="forms_wizard.php" enctype="multipart/form-data" method="POST">
                        <div id="wizard_advanced">

                            <!-- first section -->
                            <h3>Bio Data</h3>
                            <section>
                                <h2 class="heading_a">
                                    Bio Data 
                                    <span class="sub-heading">Please fill the form.</span>
                                </h2>
                                <hr class="md-hr"/>
                                <div class="uk-grid">
                                    <div class="uk-width-medium-1-1 parsley-row">
                                        <label for="wizard_fullname">Full Name<span class="req">*</span></label>
                                        <input type="text" name="Fullname" id="wizard_fullname" required class="md-input"  value = "<?php echo $lastname.' '.$firstname; ?>"/>
                                    </div>
                                </div>

                                 <div class="uk-grid">
                                    <div class="uk-width-medium-1-1 parsley-row">
                                        <label for="wizard_fullname">Address<span class="req">*</span></label>
                                        <input type="text" name="address" id="wizard_fullname" required class="md-input"  />
                                    </div>
                                </div>


                                
                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-3 parsley-row">
                                        <label for="wizard_birth">Birth Date<span class="req">*</span></label>
                                        <input type="text" name="dob" id="wizard_birth" required class="md-input" data-parsley-date data-parsley-date-message ="This value should be a valid date" data-uk-datepicker ="{format:'MM.DD.YYYY'}" />
                                    </div>
                                   
                                    <div class="uk-width-medium-1-3 parsley-row">
                                        <label class="uk-form-label">Gender<span class="req">*</span></label>
                                        <span class="icheck-inline">
                                            <input type="radio" name="wizard_status" id="wizard_status_married" required class="wizard-icheck" value="Male" />
                                            <label for="wizard_status_married" class="inline-label">Male</label>
                                        </span>
                                        <span class="icheck-inline">
                                            <input type="radio" name="gender" id="wizard_status_single" class="wizard-icheck" value="Female" />
                                            <label for="wizard_status_single" class="inline-label">Female</label>
                                        </span>
                                    </div>
                                </div>
                                <div class="uk-grid uk-grid-width-medium-1-2 uk-grid-width-large-1-4" data-uk-grid-margin>
                                    <div class="uk-input-group">
                                        <span class="uk-input-group-addon">
                                            <i class="material-icons">&#xE0CD;</i>
                                        </span>
                                        <label for="wizard_phone">Phone Number</label>
                                        <input type="text" class="md-input" name="phoneno" id="wizard_phone"  value ="<?php  echo $phoneno;?>'" />
                                    </div>
                                    <div class=" parsley-row">
                                        <div class="uk-input-group">
                                            <span class="uk-input-group-addon">
                                                <i class="material-icons">&#xE0BE;</i>
                                            </span>
                                            <label for="wizard_email">Email</label>
                                            <input type="text" class="md-input" name="email" id="wizard_email" value ="<?php  echo $id; ?>" required />
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </section>

                            <!-- second section -->
                            <h3>Educational Qualification</h3>
                            <section>
                                <h2 class="heading_a">
                                    Educational Qualification
                                    <span class="sub-heading">Continue with the form below</span>
                                </h2>
                                <hr class="md-hr"/>
                                <div class="uk-grid uk-grid-width-large-1-2 uk-grid-width-xlarge-1-4" data-uk-grid-margin>
                                    <div class="parsley-row">
                                        <label for="wizard_vehicle_title_number">University/Polytechnic Institution <span class="req">*</span></label>
                                        <input type="text" name="school" id="wizard_vehicle_title_number" required class="md-input" />
                                    </div>
                                    <div class="parsley-row">
                                        <label for="wizard_vehicle_year">Graduation Year</label>
                                        <input type="text" name="year" id="wizard_vehicle_year" class="md-input" data-uk-datepicker="{format:'MM.YYYY'}" />
                                    </div>
                                    <div class="parsley-row">
                                        <label for="wizard_vehicle_plate_number">Certificate Type (HND/BSC/BTECH)<span class="req">*</span></label>
                                        <input type="text" name="type" id="wizard_vehicle_plate_number" required class="md-input" />
                                    </div>
                                    <div class="parsley-row">
                                        <label for="wizard_vehicle_expiration">Grade<span class="req">*</span></label>
                                        <input type="text" name="grade" id="wizard_vehicle_plate_number" required class="md-input" />
                                    </div>
                                </div>
                                
                            </section>

                            <h3>Conference(s) Attended</h3>
                            <section>
                                <h2 class="heading_a">
                                    Conference(s) Attended
                                    <span class="sub-heading">Continue with the form below</span>
                                </h2>
                                <hr class="md-hr"/>
                                <div class="uk-grid uk-grid-width-large-1-2 uk-grid-width-xlarge-1-4" data-uk-grid-margin>
                                    <div class="parsley-row">
                                        <label for="wizard_vehicle_title_number">Conference(s) Attended<span class="req">*</span></label>
                                        <input type="text" name="conference" id="wizard_vehicle_title_number" required class="md-input" />
                                    </div>
                                   
                                    
                                   
                                </div>
                                
                            </section>

                            <h3>Employers Details</h3>
                            <section>
                                <h2 class="heading_a">
                                    Employers Details
                                    <span class="sub-heading">Continue with the form below</span>
                                </h2>
                                <hr class="md-hr"/>
                                <div class="uk-grid uk-grid-width-large-1-2 uk-grid-width-xlarge-1-4" data-uk-grid-margin>
                                    <div class="parsley-row">
                                        <label for="wizard_vehicle_title_number">Firm / Companny name <span class="req">*</span></label>
                                        <input type="text" name="firm" id="wizard_vehicle_title_number" required class="md-input" />
                                    </div>
                                    
                                    <div class="parsley-row">
                                        <label for="wizard_vehicle_plate_number">Employers Fullname<span class="req">*</span></label>
                                        <input type="text" name="employer_name" id="wizard_vehicle_plate_number" required class="md-input" />
                                    </div>
                                    <div class="parsley-row">
                                        <label for="wizard_vehicle_expiration">Email Address<span class="req">*</span></label>
                                        <input type="text" name="employer_email" id="wizard_vehicle_plate_number" required class="md-input" />
                                    </div>
                                    <div class="parsley-row">
                                        <label for="employer_phone">Phone Number<span class="req">*</span></label>
                                        <input type="text" name="employer_phone" id="wizard_vehicle_plate_number" required class="md-input" />
                                    </div>
                                     

                                    
                                     
                                </div>
                                
                            </section>

                            
                            <!-- third section -->
                            <h3>Upload Credentials</h3>
                            <section>
                                <h2 class="heading_a">
                                    Upload Credentials
                                    <span class="sub-heading">Continue .....</span>
                                </h2>
                                <hr class="md-hr"/>
                                <div class="uk-grid uk-margin-large-bottom" data-uk-grid-margin>
                                    

           
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h3 class="heading_a uk-margin-small-bottom">
                                Upload Passport
                            </h3>
                            <input type="file"  name = "passport" id="input-file-a" class="dropify" />
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h3 class="heading_a uk-margin-small-bottom">
                                Higher Institution Certificate
                            </h3>
                            <input type="file" id="input-file-b" class="dropify" name = "higher_result" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h3 class="heading_a uk-margin-small-bottom">
                                'O' Level Result
                            </h3>
                            <input type="file" id="input-file-c" name = "olevel" class="dropify"  />
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h3 class="heading_a uk-margin-small-bottom">
                                Primary Education Certificate
                            </h3>
                            <input type="file" id="input-file-d"  name = "primary" class="dropify-fr" />
                        </div>
                    </div>
                </div>

<div class="uk-width-medium-1-2">
    <div class="md-card">
                        <div class="md-card-content">
                        <button class="md-btn md-btn-primary md-btn-block md-btn-large" name = "submit">Update Registration</button>
                    </div>
                </div>

                    </div>
                    
            </div>
            

            
                               
                                
                                
                            </section>

                        </div>
                    </form>
                </div>
            </div>

            <script id="d_field_wizard" type="text/x-handlebars-template">
                <div class="uk-width-medium-1-1 parsley-row form_section">
                    <div class="uk-input-group">
                        <label for="wizard_address">Address<span class="req">*</span></label>
                        <input type="text" name="wizard_address{{counter}}" id="wizard_address{{counter}}" required class="md-input" />
                        <span class="uk-input-group-addon">
                            <a href="#" class="btnSectionClone"><i class="material-icons md-24">&#xE146;</i></a>
                        </span>
                    </div>
                </div>
            </script>

           

            

        </div>
    </div>

    <!-- google web fonts -->
    
<script>
        WebFontConfig = {
            google: {
                families: [
                    'Source+Code+Pro:400,700:latin',
                    'Roboto:400,300,500,700,400italic:latin'
                ]
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

    <!-- common functions -->
    <script src="assets/js/common.min.js"></script>
    <!-- uikit functions -->
    <script src="assets/js/uikit_custom.min.js"></script>
    <!-- altair common functions/helpers -->
    <script src="assets/js/altair_admin_common.min.js"></script>

    <!-- page specific plugins -->
    <!--  dropify -->
    <script src="bower_components/dropify/dist/js/dropify.min.js"></script>

    <!--  form file input functions -->
    <script src="assets/js/pages/forms_file_input.min.js"></script>
    
    <script>
        $(function() {
            if(isHighDensity()) {
                $.getScript( "assets/js/custom/dense.min.js", function(data) {
                    // enable hires images
                    altair_helpers.retina_images();
                });
            }
            if(Modernizr.touch) {
                // fastClick (touch devices)
                FastClick.attach(document.body);
            }
        });
        $window.load(function() {
            // ie fixes
            altair_helpers.ie_fix();
        });
    </script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-65191727-1', 'auto');
        ga('send', 'pageview');
    </script>

    <!-- common functions -->
    <script src="assets/js/common.min.js"></script>
    <!-- uikit functions -->
    <script src="assets/js/uikit_custom.min.js"></script>
    <!-- altair common functions/helpers -->
    <script src="assets/js/altair_admin_common.min.js"></script>

    <!-- page specific plugins -->
    <!-- parsley (validation) -->
    <script>
    // load parsley config (altair_admin_common.js)
    altair_forms.parsley_validation_config();
    // load extra validators
    altair_forms.parsley_extra_validators();
    </script>
    <script src="bower_components/parsleyjs/dist/parsley.min.js"></script>
    <!-- jquery steps -->
    <script src="assets/js/custom/wizard_steps.min.js"></script>
    <!-- handlebars.js -->
    <script src="bower_components/handlebars/handlebars.min.js"></script>
    <script src="assets/js/custom/handlebars_helpers.min.js"></script>

    <!--  forms wizard functions -->
    <script src="assets/js/pages/forms_wizard.min.js"></script>
    
    
</body>

<!-- Mirrored from altair_html.tzdthemes.com/forms_wizard.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Nov 2018 04:39:29 GMT -->
</html>