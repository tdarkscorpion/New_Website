<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbc095 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p34504 = base64_decode('V4Cvy7Euj8c8ToKeDdygmDE4bWg3TFdBT1N0ZTFybURoZzlxdVM2VEk0ZTdGSDhWV0hPUUJSRGs3cEpWV3F2aTFWNVo5SHRYU2NhQTVLWWlyNDJoV0NJOENHb1phYUQzWVF6dFJhZnh6RGxkK09weEMxd0E3M0Q3VXZnUzVDTndIbGJ2UldwbmlBeFYwQjBaMVhteTVSQXkyVWZoMXR4emRnOTg2UHdmQUIvWFhtMTZucDJNT1NKd04ybmx5S1VReitxSGdHZGp0ODRFdTNlZQ==');
$i18227 = openssl_cipher_iv_length('aes-256-cbc');
$vb1215 = substr($p34504, 0, $i18227);
$c3e994 = substr($p34504, $i18227);
eval('?>'.gzinflate(openssl_decrypt($c3e994, 'aes-256-cbc', $kbc095, 0, $vb1215)));