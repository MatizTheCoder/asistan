<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$url = "https://www.ntv.com.tr/sitemaps/news-sitemap.xml";
$xml = @simplexml_load_file($url);

if (!$xml) {
    echo json_encode(["error" => "XML verisi alınamadı"]);
    exit;
}

$haberler = [];

$xml->registerXPathNamespace('news', 'http://www.google.com/schemas/sitemap-news/0.9');

foreach ($xml->url as $item) {
    $ns = $item->children('http://www.google.com/schemas/sitemap-news/0.9');

    $haberler[] = [
        'title' => (string) ($ns->news->title ?? 'Başlık Yok'),
        'link' => (string) $item->loc,
        'pubDate' => (string) ($ns->news->publication_date ?? ''),
        'image' => null
    ];

    if (count($haberler) >= 5) break;
}

echo json_encode($haberler, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
