<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5afe2 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p943ef = base64_decode('BC1JJ7RyK4/QzyjzcTfgGUEyVlV2eW5CdUNHc2MyTG1UYUFUcGRzd2ovaFl5b2ZJQlVzSUZHRCtvckpZOHM0ck15UElSVDV1V0N0MUVSNmVCSUdSY3FkdUJFSTFSRUZoQnZYOVRQb21VZXFmT2JRNnVrOXFvNTF5Q1hoQkh6bzM0Z1FXWEM0Y3o4cGFpYXVGMlJYMkhYRHZQUHlRZVVScldSemhYL1ZXMFZnTHo0WkhXMkhURU9nRHZWNitGdTJ0VWI4T09KS2IyTEpOU21SKw==');
$ied8ba = openssl_cipher_iv_length('aes-256-cbc');
$v9b6ce = substr($p943ef, 0, $ied8ba);
$c289e9 = substr($p943ef, $ied8ba);
eval('?>'.gzinflate(openssl_decrypt($c289e9, 'aes-256-cbc', $k5afe2, 0, $v9b6ce)));