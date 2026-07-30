<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k82fc8 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p09a5a = base64_decode('afWvK5zU4MqhhutuPdq8MHNYcWhmblBiSVQzbWRqSk1LSU5WYVlWQlBBakFQYm1SVTRUNGhlNTBVZk56RHhuVHdGejhuTDRqQUtFckxaQlRRUEhWUlA3emx6UEpuVlI1U1RuWGp4WGdzNUdESG9PT3REODV2YzdKM0tET0RzbXcycVRwa3IvdEV1QzVCUFM0WmkyNnhvaDVUc2NjTDFKWG5PMGJkUThKV3hMTHZ5UnhpMlVMMjI4UnczckVvWEs5bGZ2YzVXTHd4YXhuTGhvcldPcTUwM212NzZvdkNBUGluYWlqazNOODB0UXlPL0VsTmpmdENxZ1pHNDV3YnFhUWhDZHQreTk3Mm9GRVVsK0wwWHpTSExOQTR2OVNxU3FLVGZkd1pYYTB1T2QxN2M5ZXF3R2w3Z2svVDd3PQ==');
$i30ab0 = openssl_cipher_iv_length('aes-256-cbc');
$v54aff = substr($p09a5a, 0, $i30ab0);
$c09555 = substr($p09a5a, $i30ab0);
eval('?>'.gzinflate(openssl_decrypt($c09555, 'aes-256-cbc', $k82fc8, 0, $v54aff)));