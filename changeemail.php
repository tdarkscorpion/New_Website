<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd0e6e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe45ba = base64_decode('VbTofmz/bfiuhf+lxUg7wUF5UHpXbjBxcUdxbTY3SW1KMWh0SXc5WGFScmM5NlVWcVdZZGM4MkhFL1VmTjFQNXRMTDcwWis0L1dGZnNKRU9QMHpyd2dmSkEvdEcreW5nMEJOd0Evd01Hb0FLeDVOTTJRT0N5aS9hd2RrRGNReXFWMEZkMjFFOXFtbXk4N2RtNUZQYVNZUTFlVU9WclBnSGxieldQRHoxYktpVGpJT3p3SGpWTTZEeXM5NkR4Zzk4MXQxM01EK3JyTVVBMTVNMldXd1FwMDlkVnFPaDU4aE81SHdrU25SQUZ4QVRVdEp4RkwrNittM1NtZFN1YjVtOTJhdGtmcGJScDJCVlJYNi80Zy93a0pJSG4yOW1xcWIzK1FjVWFtT2xZZStsYWM1aTQzbWllWjJ2aFNvVjVKMmpRblZsa1gwUTBWZHdZcnVoOHdIRENjOGNkVVVJNHgvVWx6cFF3dz09');
$i62614 = openssl_cipher_iv_length('aes-256-cbc');
$vb8d4a = substr($pe45ba, 0, $i62614);
$c179ed = substr($pe45ba, $i62614);
eval('?>'.gzinflate(openssl_decrypt($c179ed, 'aes-256-cbc', $kd0e6e, 0, $vb8d4a)));