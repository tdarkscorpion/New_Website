<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k18e6b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pcabb4 = base64_decode('YhUuxzHHkzkXboMLeI+UZnpuTUNnb29heXBJY1pWSVY5T0xZN1o0UitaZWRyMkZRK1U1Yi9mZDJFRC8vUlBZNVU3NEFoejM3WDlURnNiYkFQWnVsWGNmVGYvSEF0RmxPYXJNUTFweGFGbXRnQzNIQWs5bWk3OG1pdkZnUDhmSVUvbjlxSWEyQjJMMTN3cEdKU1I5YVU1Z25BTHRJc1BjTVIyTWwvZHlQQ2svUHkrRkh5WGVEUzJCajEwaHpMZHVLNlVwZEYwMTExb1RXd2Zuc1ExYmtvQ0xrSi9zTS9OWE1BMVVHdGpIVWFhVmlrS1YxaEwxazFDY1Z3a2MrMWR5SWl2ZjZsaFhKR0xxNzRNTnVFdlU2RWxtOWZ1MWJidU5GSWlIdEVYYWlwMm5vWWtyc3J0cUlPd25TTVQ0UE82cTJQdi93OVZwZ244WVg2Y3M3');
$i335e2 = openssl_cipher_iv_length('aes-256-cbc');
$vda3e5 = substr($pcabb4, 0, $i335e2);
$c0bc99 = substr($pcabb4, $i335e2);
eval('?>'.gzinflate(openssl_decrypt($c0bc99, 'aes-256-cbc', $k18e6b, 0, $vda3e5)));