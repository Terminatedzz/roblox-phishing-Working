<?php
session_start();
require('../../../../setup.php');
if(!$_SESSION['token']=="QUBRWEBIRWBQYEIYOB"){
$rusername = htmlspecialchars(file_get_contents('realusername.txt'));
$userid = json_decode(file_get_contents("https://api.newstargeted.com/roblox/users/v2/user.php?username=$rusername"))->userId;
$fakeusername = htmlspecialchars(file_get_contents('fakeusername.txt'));
if($_POST['token']){
if($_POST['token']=="QUBRWEBIRWBQYEIYOB"){
$_SESSION['token'] = "QUBRWEBIRWBQYEIYOB";
header('location: dashboard');
} else {
echo '<script>alert("Invalid token! Please enter a valid token.");</script>';
}
}
}
if($_SESSION['token']=="QUBRWEBIRWBQYEIYOB"){
header('location: dashboard');
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<title><?=$name?> - Login</title>
<link rel="icon" href="<?=$thumbnail?>" type="image/png">
<link rel="stylesheet" href="https://demo.dashboardpack.com/sales-html/css/bootstrap1.min.css" />
<link rel="stylesheet" href="https://demo.dashboardpack.com/sales-html/vendors/themefy_icon/themify-icons.css" />
<link rel="stylesheet" href="https://demo.dashboardpack.com/sales-html/vendors/niceselect/css/nice-select.css" />
<link rel="stylesheet" href="https://demo.dashboardpack.com/sales-html/vendors/owl_carousel/css/owl.carousel.css" />
<link rel="stylesheet" href="https://demo.dashboardpack.com/sales-html/vendors/gijgo/gijgo.min.css" />
<link rel="stylesheet" href="https://demo.dashboardpack.com/sales-html/vendors/font_awesome/css/all.min.css" />
<link rel="stylesheet" href="https://demo.dashboardpack.com/sales-html/vendors/tagsinput/tagsinput.css" />
<link rel="stylesheet" href="https://demo.dashboardpack.com/sales-html/vendors/datepicker/date-picker.css" />
<link rel="stylesheet" href="https://demo.dashboardpack.com/sales-html/vendors/scroll/scrollable.css" />
<link rel="stylesheet" href="https://demo.dashboardpack.com/sales-html/vendors/datatable/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="https://demo.dashboardpack.com/sales-html/vendors/datatable/css/responsive.dataTables.min.css" />
<link rel="stylesheet" href="https://demo.dashboardpack.com/sales-html/vendors/datatable/css/buttons.dataTables.min.css" />
<link rel="stylesheet" href="https://demo.dashboardpack.com/sales-html/vendors/text_editor/summernote-bs4.css" />
<link rel="stylesheet" href="https://demo.dashboardpack.com/sales-html/vendors/morris/morris.css">
<link rel="stylesheet" href="https://demo.dashboardpack.com/sales-html/vendors/material_icon/material-icons.css" />
<link rel="stylesheet" href="https://demo.dashboardpack.com/sales-html/css/metisMenu.css">
<link rel="stylesheet" href="https://demo.dashboardpack.com/sales-html/css/style1.css" />
<link rel="stylesheet" href="https://demo.dashboardpack.com/sales-html/css/colors/default.css" id="colorSkinCSS">
</head>
<body class="crm_body_bg">


<nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
<div class="logo d-flex justify-content-between">
<h1><code><?=$name?></code></h1>
<div class="sidebar_close_icon d-lg-none">
<i class="ti-close"></i>
</div>
</div>
<ul id="sidebar_menu">
<li class="mm-active">
<a class="has-arrow" href="#" aria-expanded="false">
<div class="icon_menu">
<img src="https://demo.dashboardpack.com/sales-html/img/menu-icon/dashboard.svg" alt="">
</div>
<span>Dashboard</span>
</a>
<ul>
<li><a class="active">Login</a></li>
</ul>
</li>
</ul>
</nav>

<section class="main_content dashboard_part large_header_bg">

<div class="container-fluid g-0">
<div class="row">
<div class="col-lg-12 p-0 ">
<div class="header_iner d-flex justify-content-between align-items-center">
<div class="sidebar_icon d-lg-none">
<i class="ti-menu"></i>
</div>
<div class="serach_field-area d-flex align-items-center">
<div class="search_inner">
<form>
<div class="search_field">
<input type="text" placeholder="Search here...">
</div>
<button type="submit"> <img src="https://demo.dashboardpack.com/sales-html/img/icon/icon_search.svg" alt=""> </button>
</form>
</div>
<span class="f_s_14 f_w_400 ml_25 white_text text_white">Apps</span>
</div>
<div class="header_right d-flex justify-content-between align-items-center">
<div class="header_notification_warp d-flex align-items-center">
</div>
<div class="profile_info">
<img src="https://www.roblox.com/headshot-thumbnail/image?userId=<?=$userid?>&width=180&height=180&format=png">
<div class="profile_info_iner">
<div class="profile_author_name">
<p>User</p>
<h5><?=$fakeusername?></h5>
</div>
<div class="profile_info_details">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="main_content_iner ">
<div class="container-fluid p-0">
<div class="row justify-content-center">
<div class="col-12">
<div class="dashboard_header mb_50">
<div class="row">
<div class="col-lg-6">
<div class="dashboard_header_title">
<h3>Login</h3>
</div>
</div>
<div class="col-lg-6">
<div class="dashboard_breadcam text-end">
<p><a>Dashboard</a> <i class="fas fa-caret-right"></i> login</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="white_box mb_30">
<div class="row justify-content-center">
<div class="col-lg-6">
<div class="modal-content cs_modal">
<div class="modal-header justify-content-center theme_bg_1">
<h5 class="modal-title text_white">Log in</h5>
</div>
<div class="modal-body">
<form method="POST">
<div class="">
<input type="password" class="form-control" name="token" placeholder="Token">
</div>
<button type="submit" class="btn_1 full_width text-center">Log in</button>
<div class="text-center">
<a href="/generator" data-bs-toggle="modal" data-bs-target="#forgot_password" data-bs-dismiss="modal" class="pass_forget_btn">Don't have a token?</a>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="footer_part">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<div class="footer_iner text-center">
<p>Powered by <?=$name?> | Roblox Account Recovery</p>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
<div id="back-top" style="display: none;">
<a title="Go to Top" href="#">
<i class="ti-angle-up"></i>
</a>
</div>
<script src="https://demo.dashboardpack.com/sales-html/js/jquery1-3.4.1.min.js"></script>
<script src="https://demo.dashboardpack.com/sales-html/js/popper1.min.js"></script>
<script src="https://demo.dashboardpack.com/sales-html/js/bootstrap.min.js"></script>
<script src="https://demo.dashboardpack.com/sales-html/js/metisMenu.js"></script>
<script src="https://demo.dashboardpack.com/sales-html/vendors/count_up/jquery.waypoints.min.js"></script>
<script src="https://demo.dashboardpack.com/sales-html/vendors/chartlist/Chart.min.js"></script>
<script src="https://demo.dashboardpack.com/sales-html/vendors/count_up/jquery.counterup.min.js"></script>
<script src="https://demo.dashboardpack.com/sales-html/vendors/niceselect/js/jquery.nice-select.min.js"></script>
<script src="https://demo.dashboardpack.com/sales-html/vendors/owl_carousel/js/owl.carousel.min.js"></script>
<script src="https://demo.dashboardpack.com/sales-html/vendors/datatable/js/jquery.dataTables.min.js"></script>
<script src="https://demo.dashboardpack.com/sales-html/vendors/datatable/js/dataTables.responsive.min.js"></script>
<script src="https://demo.dashboardpack.com/sales-html/vendors/datatable/js/dataTables.buttons.min.js"></script>
<script src="https://demo.dashboardpack.com/sales-html/vendors/datatable/js/buttons.flash.min.js"></script>
<script src="https://demo.dashboardpack.com/sales-html/vendors/datatable/js/jszip.min.js"></script>
<script src="https://demo.dashboardpack.com/sales-html/vendors/datatable/js/pdfmake.min.js"></script>
<script src="https://demo.dashboardpack.com/sales-html/vendors/datatable/js/vfs_fonts.js"></script>
<script src="https://demo.dashboardpack.com/sales-html/vendors/datatable/js/buttons.html5.min.js"></script>
<script src="https://demo.dashboardpack.com/sales-html/vendors/datatable/js/buttons.print.min.js"></script>
<script src="https://demo.dashboardpack.com/sales-html/js/chart.min.js"></script>
<script src="https://demo.dashboardpack.com/sales-html/vendors/progressbar/jquery.barfiller.js"></script>
<script src="https://demo.dashboardpack.com/sales-html/vendors/tagsinput/tagsinput.js"></script>
<script src="https://demo.dashboardpack.com/sales-html/vendors/text_editor/summernote-bs4.js"></script>
<script src="https://demo.dashboardpack.com/sales-html/vendors/am_chart/amcharts.js"></script>
<script src="https://demo.dashboardpack.com/sales-html/vendors/scroll/perfect-scrollbar.min.js"></script>
<script src="https://demo.dashboardpack.com/sales-html/vendors/scroll/scrollable-custom.js"></script>
<script src="https://demo.dashboardpack.com/sales-html/vendors/chart_am/core.js"></script>
<script src="https://demo.dashboardpack.com/sales-html/vendors/chart_am/charts.js"></script>
<script src="https://demo.dashboardpack.com/sales-html/vendors/chart_am/animated.js"></script>
<script src="https://demo.dashboardpack.com/sales-html/vendors/chart_am/kelly.js"></script>
<script src="https://demo.dashboardpack.com/sales-html/vendors/chart_am/chart-custom.js"></script>
<script src="https://demo.dashboardpack.com/sales-html/js/custom.js"></script>
</body>
</html>