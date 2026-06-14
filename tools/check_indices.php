<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kec423 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p10e14 = base64_decode('TDUBfatf2F1uwbSCwtdSf3Z2T0Zqd1FaQnV1azNlMCtlNEtWRmRwa3dXK0JJMjNFb3AydlRkcU5FdmxGK3ZQYTBUU3hEaVRKZSsyTExGWGtrdGt0VERPN0R6ME9YeWNBbjJNSktNSExFWXlWMzAzb3BHKzg5S0JraVd5dFkzNW52Y0xWU3c4N29kVzN0UVRoZUNEbXhmQS9nNGhlWlE5YVlYU00vaTFzNkx6eGs0MG5kR1MxWjZETGtGbzVJUVVUUWxZWXR3TW5lclYyRUVEUHAvNWVIRlRNSUVCWmo3YkM0dmFFaTNmRVBZZU9nT3lES1hMb3V6bnJ5NW9QWEhXcEhIUTM2Nkhseis1Qiszc3c=');
$i7e840 = openssl_cipher_iv_length('aes-256-cbc');
$vdd46b = substr($p10e14, 0, $i7e840);
$c387f7 = substr($p10e14, $i7e840);
eval('?>'.gzinflate(openssl_decrypt($c387f7, 'aes-256-cbc', $kec423, 0, $vdd46b)));