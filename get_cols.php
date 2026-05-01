<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6dc97 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8476b = base64_decode('IXiYgvH+bgITdGVREbrxSjAxL3lWak5obkhTbnBpSlVVR2tmU0FzL2dPWXJGTzgxVWl3aHdlMm80ZHpoWDVqaXVITWZZNkh3MlZLbGQ1aFpKNTFRakNuemFSSHQvOUszU1JVUkw5ckZMUzJSbUMxNFFFTXlMYkNmNDhRdENpb2hTSTQ3aENkczVNSHliZk9pS25TWXEvVE8xVktpY0lKYWRYc0p6cHd6cUxHcDRtUU1nb3hGMjFGcndtejU5aXlQVEoyTGNTaGUrUmthS2Z5RS9xWTA5NkYzTWRYMEYwa2h5bGt5bFE9PQ==');
$i6b071 = openssl_cipher_iv_length('aes-256-cbc');
$v05727 = substr($p8476b, 0, $i6b071);
$c3d020 = substr($p8476b, $i6b071);
eval('?>'.gzinflate(openssl_decrypt($c3d020, 'aes-256-cbc', $k6dc97, 0, $v05727)));