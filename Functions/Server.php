<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k56be1 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pfe537 = base64_decode('irOxkBrJvIb1ZZaCKjJTuW84Q0I1ZHByL0RkM2J1b3g2MDdPNW14dldGMW5oVG56NC9rQmFhSEFoek5JaERyVmlRcTRLaWEwR2IvVkEwTUFxN1RlaWVaZXdvWU5ZaHNjUWRCRitRWW9IcnJydVpCb3dWL2puc25aRnE0eXEvUW9EZlR1QUVobmdwSzVIdjlORHp3WldSbjF0a0FXV1Rqd0Q5cE5sRDliYVMzaStsOTlOYVdrUmltT3hBejVFWnM0Tjl4U3UzZTM5b2s3b2tEdXRhZzI4R3lnMWE3L3YyWVI2R1k0U2czd2tRdlhXY2R3SWpNVmw4OGVjTnZUaG5TRCtXRUdxRmNIajhPeDJPL2lEeEpyM2dncFhjUW9xU0V0ZlJUdEMvNm9DaXNZdWphTk9yY1RHTXI1NVpBPQ==');
$ic3236 = openssl_cipher_iv_length('aes-256-cbc');
$v2a016 = substr($pfe537, 0, $ic3236);
$ce4b6f = substr($pfe537, $ic3236);
eval('?>'.gzinflate(openssl_decrypt($ce4b6f, 'aes-256-cbc', $k56be1, 0, $v2a016)));