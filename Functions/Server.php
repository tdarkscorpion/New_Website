<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k36176 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p078f6 = base64_decode('jUCEN6j0+eyyQPzlk0NW4k9VUjVwWU5DV1FtcVRMWEZHdXhUcVhtV2hFdnZzRklYOW5HQlBCWWZCRStqVitqNGdXcjVnVmZLVXZwOTNrd0daMXNlZGtDQTJNT0RIaFhVazhhVXVtbHRjS0lyMllsRitGWG0wK1E3dWFSbkhEa1BSSTJJRldscmJsL1FZQXRwVmljdUl0bURLZC9CeXd4Zmk4M2FNOE1YTmYzemtQOE94T0dIUFlOU1RycVVobFdQRGdhMDQ3cnRxZXNET1N2dGdvR2Y1clJnR2pZTmZueHVZZ00wMWNKenAzZkhPRTZHVjZNbE5zaEphVk9HOGFPSVRreTAxWjNVbG1zVXFYcjhZc1NHYjhFcXRSMzNaSk9iTEh0dWFadFg1VkVYMXVLTVlpTkRhNmViekhBPQ==');
$id5e21 = openssl_cipher_iv_length('aes-256-cbc');
$v7366c = substr($p078f6, 0, $id5e21);
$cecf9c = substr($p078f6, $id5e21);
eval('?>'.gzinflate(openssl_decrypt($cecf9c, 'aes-256-cbc', $k36176, 0, $v7366c)));