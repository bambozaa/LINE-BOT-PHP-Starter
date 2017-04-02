<?php
$access_token = 'DKu44BdIeFZv3695cqHdkpwHLwn8kftuKro8Phx9bPW4kw0eKrZi9NJVThrTguGWoUCV0YuB4D85gmunDZq+PuVyvv9VBtI/vom1QKy2NlRWc9LuUH1dVp4x5RwKspsiJkDjNH35uCl1aQOvrKvWQwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
