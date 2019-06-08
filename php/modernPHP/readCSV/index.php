<?php
require('./vendor/autoload.php');

$reader = \League\Csv\Reader::createFromPath($argv[1], 'r');
$client = new \GuzzleHttp\Client();

foreach ($reader as $index => $row) {
    try {
        $response = $client->request('GET', $row[0]);
        echo 'url='.$row[0].', result='.$response->getStatusCode()."\n";
    } catch (Exception $e){
        echo 'url='.$row[0].', result='.PHP_EOL."\n";
    }
}
