<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k365a4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd5429 = base64_decode('kqaDCgIPWz90g2gtcgskN281QnQzTFFmdkx1QkJmM3VVMFVqNVFGZXFlTFJOamZVUEJ6aDZySFF4bVZqYWJWMmFMRWd5Q0xjNFVJclZ4aEJKdWpORGszMUpWemluaDdYNkhFdnRIZTk1Y0Nxb3Q0eERVcW01VXpMQnpxMTkxTnBHQ2Z3NkZCdkNVSm80dDIxWWVsT3g0SGtwTk1ZanZ3OFpvRVBpNGZhb0FuUzg4QldTUXVFZ2tEbmZjWWMrZ1Z2akZqaDVBRVF5c3dVMjJGRjRKTlpnTE1QZWRuNWdGVW9BVDNsakROTWhyVE9vcVlMZDVYYXh3eTMwOFBsV2JnTmxFeGVJSmJlS2VSOGFXZlMxbUlubmRaeXNkdERCbktvNlVlTlo0WmNjZ3ZrNFNjV3Z4blVFaGIzMDFVPQ==');
$i3e769 = openssl_cipher_iv_length('aes-256-cbc');
$va235a = substr($pd5429, 0, $i3e769);
$cb03b9 = substr($pd5429, $i3e769);
eval('?>'.gzinflate(openssl_decrypt($cb03b9, 'aes-256-cbc', $k365a4, 0, $va235a)));