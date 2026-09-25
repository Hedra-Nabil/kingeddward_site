<?php
$file = $_GET['file'] ?? '';
if (!$file) { http_response_code(400); exit('Missing file param'); }

$file = str_replace('\\', '/', $file);
$file = ltrim($file, '/');
$file = str_replace('../', '', $file);

$path = __DIR__ . '/' . $file;

if (!is_file($path)) {
    http_response_code(404);
    exit('Not found');
}

$mimeMap = [
    'css'   => 'text/css',
    'js'    => 'application/javascript',
    'json'  => 'application/json',
    'png'   => 'image/png',
    'jpg'   => 'image/jpeg',
    'jpeg'  => 'image/jpeg',
    'gif'   => 'image/gif',
    'webp'  => 'image/webp',
    'svg'   => 'image/svg+xml',
    'ico'   => 'image/x-icon',
    'woff'  => 'font/woff',
    'woff2' => 'font/woff2',
    'ttf'   => 'font/ttf',
    'eot'   => 'application/vnd.ms-fontobject',
    'otf'   => 'font/otf',
    'mp4'   => 'video/mp4',
    'webm'  => 'video/webm',
    'txt'   => 'text/plain',
    'xml'   => 'text/xml',
];

$ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));
$mime = $mimeMap[$ext] ?? 'application/octet-stream';

header('Content-Type: ' . $mime);
header('Cache-Control: public, max-age=604800');
header('Access-Control-Allow-Origin: *');

$content = file_get_contents($path);

if ($ext === 'css') {
    $dir = dirname($file);
    $content = preg_replace_callback(
        '/url\(\s*[\'"]?(?!data:|https?:|\/)([^\'")\s]+?)(?:\?[^\'")\s]*)?[\'"]?\s*\)/i',
        function($m) use ($dir) {
            $raw = str_replace('../', '', $m[1]);
            $asset = $dir . '/' . $raw;
            $asset = str_replace('\\', '/', $asset);
            $assetParts = explode('/', $asset);
            $resolved = [];
            foreach ($assetParts as $p) {
                if ($p === '..') { array_pop($resolved); }
                elseif ($p !== '.' && $p !== '') { $resolved[] = $p; }
            }
            return 'url(static.php?file=' . implode('/', $resolved) . ')';
        },
        $content
    );
}

echo $content;
