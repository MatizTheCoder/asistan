<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.metals.live/v1/spot");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpCode !== 200 || !$response) {
    echo json_encode(["error" => "Curl ile altın verisi alınamadı"]);
    exit;
}

echo $response;
