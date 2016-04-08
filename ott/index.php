<?php
$login_ch = curl_init();
$login_data = '{"channelno":"099","deviceId":"0000anonymous_user","format":"HLS"}';
curl_setopt($login_ch, CURLOPT_URL, 'http://api.viu.now.com/p8/1/getLiveURL');
curl_setopt($login_ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($login_ch, CURLOPT_POST, true);
curl_setopt($login_ch, CURLOPT_POSTFIELDS, $login_data);
$ott_token_json = curl_exec($login_ch);
curl_close($login_ch);
$ott_token_result = json_decode($ott_token_json, true);
echo $ott_token_result['asset']['hls']['adaptive'][0];
?>
