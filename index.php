<?php
use GuzzleHttp\Client as HttpClient;
use Fab\Imagga\Client;
require __DIR__ . '/vendor/autoload.php';


$client = new Client(new GuzzleHttp\Client(['verify' => 'C:\Users\kAwAn\Downloads\cacert-2022-07-19.pem']), 'acc_7e337e7ab66f11f', '3e8d1b935b7c92b6ef6cd3340a491bdf');

$response = $client->tags('https://library.sportingnews.com/styles/twitter_card_120x120/s3/2022-04/Messi%20PSG%20Training.png?itok=yW1geQa6');
var_dump($response['result']['tags']);
