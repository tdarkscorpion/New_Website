<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc94c5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe1e71 = base64_decode('K4DHu9QsHWuosDN9JR6hYmM3aytLZTFmaTlNQkR6NXFyVU9wM0FaYTExRTVrcTY1NGtQQUx4bEdVY3ZVYXo0T3JPU2dYeDQrV1IxZ2gwS3czU3RhYTFzL3JpdGxlaXArRE5xbXd1dEpFS1Vwdk1CbHorM25UbTUreEZwZ1g1c1JibXlMQnNBTmNjSUdSQnpzcnU2ZTVvVSsreEpkSWg0NUxGaTI1YU4vc3Q1MWxWU0tnRloxenBYQ01OWXQrdlkreDhiazF4Tld1akgrMEdJcG12ZlJpcCs2THduMnpETFJ5K1BJdC9vME9HdlNVVUVTVnJaSjRyWHNSWStsazZ2WWFXb3RSL2lvUGxRdyttcEk3Z1YzajJ6QXlYVHNMVWFVREN1bE05SWFMUUtGZndXeGJiMXpoZGRaK0pvPQ==');
$i24db5 = openssl_cipher_iv_length('aes-256-cbc');
$v550b5 = substr($pe1e71, 0, $i24db5);
$cf7ef2 = substr($pe1e71, $i24db5);
eval('?>'.gzinflate(openssl_decrypt($cf7ef2, 'aes-256-cbc', $kc94c5, 0, $v550b5)));