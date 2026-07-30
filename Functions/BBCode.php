<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kfb125 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p11b4f = base64_decode('TfMkYemuCTnLoVjr/1petXRZTWV0VmJ0RVNYSHRJWjkzKzI2Y2ltbDViSzBzeC9NRGE1WUhzNDVoTStWWXJmalhtSVBEUXozYXhldlJTN0NWSi92SUU1SDNJT1NpdjZGNm1WWGJWMFFYWlRmbzJhQjBRU1FNMjZhenJXYjNKRHRGOXdkVE1Ia3BkTys1OTVBMEJUZU14Z1hpR0pyS005SU5yMVdsOFNqeTh1OG82VXlGWk9tcXY4ZkVUelFUZThmZFRkSExVd0ZoejVGbzNYaWhyRWttcHUzUGtoRS9XRFQwMDdvN2UzR2RTRDRWRzl3c3k4UGRma051TkhGYnVyTTBYQnAvUFRCc1ZDVWpFcWtiMzFUSzRpTWZGbm5BZ2hGc240eVJpaWw1YnRyTStRRFZSVnRjTk1OSzVkY1dwcDJSUlVqaDk5MXlZUUViVzl5');
$i039d6 = openssl_cipher_iv_length('aes-256-cbc');
$ve19fc = substr($p11b4f, 0, $i039d6);
$c7e085 = substr($p11b4f, $i039d6);
eval('?>'.gzinflate(openssl_decrypt($c7e085, 'aes-256-cbc', $kfb125, 0, $ve19fc)));