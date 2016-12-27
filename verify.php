<?php
$proxy = 'http://fixie:1FtpXYX8q4TvvYD@velodrome.usefixie.com:80';
$proxyauth = 'username:password';
$access_token = 'Bl/DCBKhbMBiStGbVgEJA6TNE47XTHavgS2e+VMsTg/etHe6Kjo2M1aUNS9Pd5ao491su45EnF2HsimGDS0arCLu/pl4dwplYAWANkxc8559dhbyOVdoU7qEj+niND7qkuF8r/OmuopxvCNvYhimYQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
