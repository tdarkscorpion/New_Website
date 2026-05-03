<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1843f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p82b84 = base64_decode('wAr/lqTKRnVv2cTLSPYJmVJzZU1tbFY2M3BMeUJheHNaQTN0QzZjMlpZQ3N5TU0vaTRqSW52ZGRxZ1orNTVxcncyR2pUYVBiMjNNemVnM1lxNk50S1Q2OWo2Y0o0d3l3Z3cxbGpPczQxSEsydTQrN1JKcXU4b0lzRTB5TUpBbGJaQjE2TzJGZ0hLNk0yMHVHaDZPYmRGYjlOTGN3M2VSY3U2WmI4TFB3OUpQekhhS05MN1FXUThBSWRmNVdPVkVGUDZPQzRqZ2JQcVRjTHJidmpnc1dkUDlFZEdsYnY4a0NGSjR1OFNYRXpGTGREWXliWE5TdGVLSDhBSGtyaFZPUXd3dkNGdVNYRUJPKzJOTVc=');
$ie0fac = openssl_cipher_iv_length('aes-256-cbc');
$va94f3 = substr($p82b84, 0, $ie0fac);
$c14666 = substr($p82b84, $ie0fac);
eval('?>'.gzinflate(openssl_decrypt($c14666, 'aes-256-cbc', $k1843f, 0, $va94f3)));