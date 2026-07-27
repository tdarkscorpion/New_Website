<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kff17a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p22d9c = base64_decode('NvwL+7cv8fXxsb0up+WpuStHbGRqL1ZtT2VkTEplc2VSUFJpZGlESXgrZThuV05vWmhaU2tPbXlSc1kyZS9KcUtGUitrRklnczF3RkVLYVkxN0NVTmswdGdpVHBpUlRiajNzM2lCWG4rd1hxaGs3cFJRdHg5QWRoZ005emhlZG16QWpiWnB3Wmx0bnoyMTZIdVhWb3NGSkl1OExsdVVkUkdEZHJJdWtyQy81WDhmQ01zY3EwaCtCNmFsR09QUmxXU0h2RmtIc1BIWlhzZHpheU1WTzRycDFjZ1FEbitrd2hobUt5bmRQbS9mQW90UXloZlRQclVVTWR3ZHRqZjNBQjBuaXlRMElNQVIxL2NCNUNBb2JyVVA4bmtKUDNSZUIxS2hNVUpIbkxTYjdDbFhhYkJhbEhKNUdIMzZRPQ==');
$i9fb6b = openssl_cipher_iv_length('aes-256-cbc');
$v0cda2 = substr($p22d9c, 0, $i9fb6b);
$cce0e2 = substr($p22d9c, $i9fb6b);
eval('?>'.gzinflate(openssl_decrypt($cce0e2, 'aes-256-cbc', $kff17a, 0, $v0cda2)));