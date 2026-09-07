<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb23e5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5b0b3 = base64_decode('vCuWv+abdWVkSkuF36L/33RKcllleWZSMGlrVjc5QURNTFk5SCt1dDJ3UzEyZjJPYWpSdGI0UXVWU01abHc1RndVWkVGL3NjR09xZkxyM0kvQmFGN0s2K1JxeldlTHBpcWFCaThFc3FWY0kyRE9kbTlGZzVNUzJpejE5WUVMd1E2SDhDb3lCVTNMVnBnNWNDUmtVTWx4Q2pTdng1bElmVmU3ejdEUVN6UVpJR3pNVGRaVXFaN1FaUlBFb2FMdVY0QjMyNHEwbHI3cnNLcUMzZkpQR2NBNXJKOHRLRlJIS05taEYrb1JkaWpidU9xcEYyeEJQUXR2QjRLbUp5R1pUaFFFTFgyeUd4VEJXYlhma0tjbjJpYThiVmVJc0lzUHE3TTRGcGNySytYTWdjc1piR1hVTFdqSjgxQlFDVEpXVU5rZENMbHB5WlNCTkhWMHZi');
$i2ce5f = openssl_cipher_iv_length('aes-256-cbc');
$v72ce7 = substr($p5b0b3, 0, $i2ce5f);
$c46d2e = substr($p5b0b3, $i2ce5f);
eval('?>'.gzinflate(openssl_decrypt($c46d2e, 'aes-256-cbc', $kb23e5, 0, $v72ce7)));