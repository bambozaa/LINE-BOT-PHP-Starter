<?php
$access_token = '/bzLwrnBFqy+JO6oKHhBIFbhU8vcuNg7ov+EEvVQ6yZ8jXu/odpBfLC77saWz1NYEgoBY3vbSrufb0FJ2gBENDtCz7mLLcXXSfDbtltKtIfXI9QWKKhQlhkKkbgA2O0M+7flW2Cefk1TxKMjSjLRdgdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
