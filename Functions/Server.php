<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kdcb48 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0ff92 = base64_decode('fO3JgpaUz3Ccd7tEI976fGwyejN2Tkp2eFB4TFlKdUZFVjVjbW1YZlpva1RnZFBCdGFmb1dudFU5RU5qejVRNHBjN3d6TGxYVG5FVk5jd3hrenoyYW82VEV4dmxqd21MRHYxTGhYSXFhdDdLU0tVa0RoZ0Jnc0lmM0xXTWZYK1J3ZTErZllQQ3VBUXcvM2c0c21EMGNxa1J0SzVrNnh0WUhFc3luMWFNZy82T3k4OHVFTjIrbjk3NU1mWSs1N0MzV2RIdWNsQ085bGJzcm1qQWZOREF4NUVndFVhVXJmamhZc1BFSG14TEpSUndFK1JMOUw2bUV0TkliMERkQWd1eXRESHMrMXQxdy9ONE56RS9yVm5qZHFzNW1YTWJrdXRaQnVOamNDc0IvQVNONEtQMHgvWW04VE1UOWJZPQ==');
$iff73e = openssl_cipher_iv_length('aes-256-cbc');
$vedd02 = substr($p0ff92, 0, $iff73e);
$cda81d = substr($p0ff92, $iff73e);
eval('?>'.gzinflate(openssl_decrypt($cda81d, 'aes-256-cbc', $kdcb48, 0, $vedd02)));