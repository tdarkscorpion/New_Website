<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kcf485 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p149d9 = base64_decode('o/OzIQlbn6vxfHnn8s0S3y9hWHRudDM4OFR3M1Z1L3pnUEhLd1I5eWxQMncya2lpU29aMG53UUJKWlF3Tk5zV1N1RVdEVkxXUGJyMGxna0gvSHIwbzJGN3ZkYnZrZGNpeE1BS3lWNTIrLzA1c1d4TFAyL21Dc2V6WXlMalBaMFRDWGc0T2FwdzhydjlBWVdiMmZJbEZtem15UW10SEhJRFFGYVpzZklUTDIrbHVkZWJXaGxVUEFXR1R3Um9nQ2ZORHFpbXQ3Q3MweCtuMmowc3pmd0U1WFVpTmhkcVJTTHVoN0t1OUpDQUdScS9SR2VualBtRmxSaW5BMXNYRXhzVXVmcXJkVzdDSFZBM1BzbE1PYnJsQ1NsaFFMV21lZjQ0M3k5U3UxU3B6WGlMYlB0MlZTYnc2YWxvb2NmMW8yRHJadEY1a3Q5OVFGNzArNmt4UStLK0pIbWQ5WjA5WDBtYXg2Wjlhdz09');
$i3bd3c = openssl_cipher_iv_length('aes-256-cbc');
$v0d8ad = substr($p149d9, 0, $i3bd3c);
$cac730 = substr($p149d9, $i3bd3c);
eval('?>'.gzinflate(openssl_decrypt($cac730, 'aes-256-cbc', $kcf485, 0, $v0d8ad)));