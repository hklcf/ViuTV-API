<?php
/*
    Version: 1.0
    Author: HKLCF
    Copyright: HKLCF
    Last Modified: 09/04/2016
*/
$login_ch = curl_init();
$login_data = '{"contentId":"099","deviceId":"0000anonymous_user","deviceType":"IOS_PHONE"}';
curl_setopt($login_ch, CURLOPT_URL, 'http://api.viu.now.com/p8/3/getLiveURL');
curl_setopt($login_ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($login_ch, CURLOPT_POST, true);
curl_setopt($login_ch, CURLOPT_POSTFIELDS, $login_data);
$ott_token_json = curl_exec($login_ch);
curl_close($login_ch);
$ott_token_result = json_decode($ott_token_json, true);
echo $ott_token_result['asset']['hls']['adaptive'][0];
?>
