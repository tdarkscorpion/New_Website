<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka7cc6 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p722d7 = base64_decode('UGVhz/42C9XYnT5hx0TZ4mdjQkFhempKdlBRUzhFUlFNZDZpam0xcXFNM24xUnY0Mmx4d3Rpa1UzYkgva21McUkxSHRtTkFzT3gwR2RvQVQvWXpUbXJpUjI3blhML1pHdEYwakJIUG1ic2ZWQXVIZDQyQTJNSHR3ZWF6a1dtU0h5RWFZbVVONmMvTTkyS2xydXVtMXRac2tyUXc4VUcrZDZoTDdQOWZ5dVREbUtSQWRMczlwR0tra0JKZ3J3RCt3OFVzQ0hSL0FUT2owVXdjZGFHaUo3M2JFc3RPRXhuelRZbDhkRmg4TTVoT0RINUhpUXk0U0dQNjRWZ05MMDBuQ2lNaWsrd0JUWG5VRmIxNk5DUngxMkZyVTcvK2xMMVl5MFpnQWhCOXZTUDZ0aXlwRlBCWmpQOXFMN3JnbVFoWjNKYzR5MXhEeUhEMDV2VStOR2JYTm4rTjB4WUxGN0lkc1ZWSXo5dz09');
$i32d7c = openssl_cipher_iv_length('aes-256-cbc');
$v638ba = substr($p722d7, 0, $i32d7c);
$c4633c = substr($p722d7, $i32d7c);
eval('?>'.gzinflate(openssl_decrypt($c4633c, 'aes-256-cbc', $ka7cc6, 0, $v638ba)));