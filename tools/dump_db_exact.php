<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd9f20 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p23c01 = base64_decode('beoz0C94o7/uxcUxR7YDHWNuT3dzYTVNczUvZWtha1pQQ1dKdEl5YUlCY1JZWUNiTWlBVm5lQzRhU3dLOWw3RVhGb3M4Z0RZbHpMdlMzOGhrSjBCSzkxY1ZNUFkzQVRvQ2xBbW9BaGZJRHYzUjU3Y1ltcEdteVlKTW53VmtWcmFyNmFGdmxBVGxXSGxGSkNyOHBiaGY2M01Fc1VCOVRhblFjTDRycFdmUlBWYUxDTm5uMmJlMXJYOVRXWm96VjBUNStScVA4RWZRc2xxU3RHbVBQK3MreFowMHVubll2VXZjdUZveG8rNGNlQ1ZaeWVNS0tBWW1hZ0swWHhjWE9aRmRDSy9GeHBkTjM3S1ZSSUtjTjkydU96RlRXeU5tSG8rZXR4a2sraHpRYklBNUxpSnEyK29KUExPMDhNPQ==');
$i3705f = openssl_cipher_iv_length('aes-256-cbc');
$v74c1b = substr($p23c01, 0, $i3705f);
$c45c98 = substr($p23c01, $i3705f);
eval('?>'.gzinflate(openssl_decrypt($c45c98, 'aes-256-cbc', $kd9f20, 0, $v74c1b)));