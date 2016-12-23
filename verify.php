<?php

$access_token = 'LCoIRNgGZyDDYK7FfcSj7dDkFqa9yGM/2ATcUrumbWB2//dzoQw/IEDgFbcc859v+a5UTBrRCAecEpFVn5/ouYUdmgwmudgm4f+IWERdAy/IIq0F7/E7N+CB9RllfjuPqNxINCTloGh7Qq32joSIHwdB04t89/1O/w1cDnyilFU='

$url = 'https://api.lineme/v1/oauth/verify';

$headers = array('Authorization: Bearer ') . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;