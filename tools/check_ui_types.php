<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf21c2 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5f1f5 = base64_decode('4Midw05o/ZFQ0oBkOpYZBDNqNG9kb2V3Q3RBMDdsTS9vZkpJTkk3Zi9OczBEL0NCT3JnL2M0Y1gvN05qU2hJbVhSSnJvajBRcGdsWjdJenQ3dnlzbkhieUViT3lmUWZCQ0dxcXBwTTJrTVJZRy9sUEM4eTFzYXdlbmR2Q0wzRllpaUp4TWtPdUxXWUlJejRYOFVsbnNXV0VaZXhubVJubWpqbURyM0o0UnNXSVBuRFJ2MzlmYTVoTlFwYWZhallwekNocTZsS2FPa2Y1K094UzFSWFF1Wm5LOFVpUTJvTjFwbk9LZTdiNDhnL041MlI4eHQvQWJiL0h0ZXB0ejIrbW9SeDBuMHZZN0l4UGpycGM3K3JrSis2WEhvWTArRWs0czFoWlFDeWsxc0xQNlRMb3RyaWhyaEhMcENJPQ==');
$ie6c15 = openssl_cipher_iv_length('aes-256-cbc');
$v0fb23 = substr($p5f1f5, 0, $ie6c15);
$c34b57 = substr($p5f1f5, $ie6c15);
eval('?>'.gzinflate(openssl_decrypt($c34b57, 'aes-256-cbc', $kf21c2, 0, $v0fb23)));