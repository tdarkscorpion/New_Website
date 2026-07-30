<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k662ad = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8a067 = base64_decode('nsCp2n7luj7aA7xzn34yq1NHY2o1NmlzVk0yeDdrQnIzeDd4bDdkNWFmZ0dpM0o0VExPUzM0MUhpazZSQUlmRFo4QVNKbUNDaTVoYWN5cmhkTDdybjdPV205ZDViZ2VzSTJCNXk4Z3BEWmNrb2Fic2ZTUWswUnB3UERTQS82QTJFZWZFUGlMOHE5OFhmRmFYY2ZDR2xoK0hMcW9sdnJtRHh1OVNLWkEvS1ZQcnRXeHg3QW9NdTM2L096aVVTMHhQeFZXZVluVWFhK0ZUR0JHdE1FeHdFT2RlSmw0ZWtEY1NORmg2SVMxYmVRQ1l2WE1RZmtydWh1d0ZYWDdnRTkxSXZDY00vZGFQM3AyNThuaHg=');
$i1b144 = openssl_cipher_iv_length('aes-256-cbc');
$v4a0cf = substr($p8a067, 0, $i1b144);
$c8ad8e = substr($p8a067, $i1b144);
eval('?>'.gzinflate(openssl_decrypt($c8ad8e, 'aes-256-cbc', $k662ad, 0, $v4a0cf)));