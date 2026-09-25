<?php
$file = $_GET['file'] ?? '';
if (!$file) { http_response_code(400); exit('Missing file param'); }

$file = str_replace('\\', '/', $file);
$file = ltrim($file, '/');
$file = preg_replace('#\.{2,}#', '', $file);

$base = __DIR__;
$path = $base . '/' . $file;
$path = str_replace('\\', '/', $path);

$parts = explode('/', $path);
$resolved = [];
foreach ($parts as $p) {
    if ($p === '..') { array_pop($resolved); }
    elseif ($p !== '.' && $p !== '') { $resolved[] = $p; }
}
$path = implode('/', $resolved);
$baseNorm = str_replace('\\', '/', realpath($base) ?: $base);

if (strpos($path, $baseNorm) !== 0 || !is_file($path)) {
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
    'mp4'   => 'video/mp4',
    'webm'  => 'video/webm',
    'html'  => 'text/html',
    'htm'   => 'text/html',
    'txt'   => 'text/plain',
    'xml'   => 'text/xml',
];

$ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));
$mime = $mimeMap[$ext] ?? mime_content_type($path) ?: 'application/octet-stream';

header('Content-Type: ' . $mime);
header('Cache-Control: public, max-age=604800');
header('Access-Control-Allow-Origin: *');

$content = file_get_contents($path);

if ($ext === 'css') {
    $dir = dirname($file);
    $content = preg_replace_callback(
        '/url\(\s*[\'"]?(?!data:|https?:|\/)([^\'")\s]+)[\'"]?\s*\)/i',
        function($m) use ($dir) {
            $asset = $dir . '/' . $m[1];
            $asset = str_replace('\\', '/', $asset);
            $assetParts = explode('/', $asset);
            $resolved = [];
            foreach ($assetParts as $p) {
                if ($p === '..') { array_pop($resolved); }
                elseif ($p !== '.' && $p !== '') { $resolved[] = $p; }
            }
            $asset = implode('/', $resolved);
            return 'url(static.php?file=' . $asset . ')';
        },
        $content
    );
}

echo $content;
