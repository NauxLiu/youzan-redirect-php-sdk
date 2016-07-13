<?php

require './vendor/autoload.php';

$appId = 'fill_app_id_here';
$appSecret = 'fill_app_secret_here';
$client = new \YouZan\KdtRedirectApiClient($appId, $appSecret);

$client->redirect('http://url.to.redirect/path/path', 'snsapi_base');
