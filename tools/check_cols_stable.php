<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0ddf3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p68665 = base64_decode('QggZrZW2bRxvNsIRqOYVw20xUjh3d0I4UWlRaWR5OFdGU3doZCsyRlZRUjFFZVVnTTVxdUo3eDA1TkpBUTI3Slh5cHIweWNVYVJ0U3BoNlZLWkdxQkFwWnYzN05kZUNtLzEzcFQ3VXVHc2padnhNMkRkN3RBNXJqYTlNeTByRHd5SVdCZklISDVEYU8ybXhMREM1eGNlbFp2d2lTRnZwZ2FhZzVTSHdTL29PKzZSQUk1dHdxNU9iS1QxU2Q1VmNicENyVk5EcDNOSEdUZDg4NGFFYTEzZVBIRUxpMzNMZ09aNGl2ZWFCOXkrV1p1b1dJVTFRcVA3VSsvd2haYWFoeWcvdU84UkNXWjJycmMyMThSblkvR1N3TjZrK3hwSFc2NFBLd2NnPT0=');
$i20daa = openssl_cipher_iv_length('aes-256-cbc');
$v84e1a = substr($p68665, 0, $i20daa);
$c18314 = substr($p68665, $i20daa);
eval('?>'.gzinflate(openssl_decrypt($c18314, 'aes-256-cbc', $k0ddf3, 0, $v84e1a)));