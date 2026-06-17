<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k369fc = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0f11a = base64_decode('zhSQqPMgMCEdrb8Rhn9UH282a1pCV1RDVWtacWxROXU4Y0doU2ZleUxweEpkSzNsalRLbnovblA2RWxBWW5xenJRbW1lby85dVU0bHR4Ky9nQTYzVWx6cmhOTlpGNitWVmVlL2VTa1ZkSVNYb0lhSGNvTjY0NjhrdElscmlwVUVlaENIdzd2K3ljc1l2RXAxbmp1M1lKdmd6TUIreUE4SVoxL3NDb1lpdFVHRUxmNHZZL2RnTVNrY0VNRzNLT1UwVFEvdzRkUHJzM2RqOXFVWm5jbCthMWp6cDB4eCtLSjdvbzNtZmhwRjNGSWxnQlV6aUZuRkZ2NzdqcHdOSnNhWDRWaDFzRk9janJtWW9oRnZjdTRuOCtxUUw2b2xoNmFDSmdYdTRnbjJVSTBDVXV1d1lSVHhGdElPaEJBPQ==');
$ic6110 = openssl_cipher_iv_length('aes-256-cbc');
$v823b2 = substr($p0f11a, 0, $ic6110);
$cc61d7 = substr($p0f11a, $ic6110);
eval('?>'.gzinflate(openssl_decrypt($cc61d7, 'aes-256-cbc', $k369fc, 0, $v823b2)));