<?php
$routes = [
    'metadata',
    'gerKeyPhrases',
    'detectLanguage',
    'getSentimentIndex'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

