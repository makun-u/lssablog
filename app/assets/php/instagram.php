<?php

$instagram_business_id = '110054767088072'; 
$access_token = 'EAAIIxe7sZC90BAPLYTygXJZBIVAQ0kbzoymx7xr0PA2uxkrlBlHj3k7LQdpaerWZBcSstbz1o3zV4qcs5oN6RyZBwsUke2BwdZCea9nxwYtxwNvyLQbJf1mXBssY4ja2CPhdOrgHpFwW7DVeCLW2Ksy8KWftZAK2zuZByVRXIP2j3VhMPZCF5PVZC';

$target_user = 'makun_0910';

//自分が所有するアカウント以外のInstagramビジネスアカウントが投稿している写真も取得したい場合は以下
// $query = 'business_discovery.username('.$target_user.'){id,followers_count,media_count,ig_id,media{caption,media_url,media_type,like_count,comments_count,timestamp,id}}';

//自分のアカウントの画像が取得できればOKな場合は$queryを以下のようにしてください。

$query = 'name,media{caption,like_count,media_url,permalink,timestamp,username}&access_token='.$access_token;



$instagram_api_url = 'https://graph.facebook.com/v4.0/';
$target_url = $instagram_api_url.$instagram_business_id."?fields=".$query."&access_token=".$access_token;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $target_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$instagram_data = curl_exec($ch);
curl_close($ch);

echo $instagram_data;
exit;
