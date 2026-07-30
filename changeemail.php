<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kee95c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p25881 = base64_decode('8oThycoCKDGMc9hoKAm/szNyUU5GbGRpaGZzcyszbktKV0ljdTZGdlJoNVRxc0xKMjE2amFSTFdIR3d5cUVqa0xqZDNvWEg1ZkNVYWhKSktPRklsMTVkaDN6eGY4Mk9EZ2o5T2Y5KzVwMW85YitHRU14cEViazJJNzdIdHRqVFdoMFVYMG5zS0V3QTRmalFXZ2pTUStvYVl0emY3YkxhbmV3MVp1VU14YXhqbE4vdGVrN0lLbTczQmtPQTAzRm9nVk1TVXgyVlRqZTdZRUluY0RzT1V6RlhSd2lmODZSUjVINTI4c0ZRemlKUElSZTJscFpPcDdJbEFDUTB3SnBDdzh2eXZsV0pwNmhFaENvY095MWl6N2dlSm1wQ0JhWnZnTGh1SGswWlZCWFJaTWNPM2pWKytEV2FNN1B3YXlnM1BHUGxYN1FuNEZCL1RRQWY0dDFTZklnbXVIZDIyRHMydnNVdkgvUT09');
$i0d1b0 = openssl_cipher_iv_length('aes-256-cbc');
$v93b1d = substr($p25881, 0, $i0d1b0);
$c449da = substr($p25881, $i0d1b0);
eval('?>'.gzinflate(openssl_decrypt($c449da, 'aes-256-cbc', $kee95c, 0, $v93b1d)));