<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$xmlUrl = "https://www.tcmb.gov.tr/kurlar/today.xml";
$xml = simplexml_load_file($xmlUrl);

$items = [];
foreach ($xml->Currency as $currency) {
    $code = (string)$currency['CurrencyCode'];
    $name = (string)$currency->Isim;
    $forexSelling = (string)$currency->ForexSelling;

    if (in_array($code, ['USD', 'EUR']) || $name === 'Gram Altın') {
        $items[] = [
            "CurrencyCode" => $code,
            "Isim" => $name,
            "ForexSelling" => $forexSelling
        ];
    }
}

echo json_encode($items);
