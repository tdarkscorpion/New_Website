<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k78d2a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1e27f = base64_decode('nmpo1+YN/R50OjBESkTVqFU3YXdxK3BLeTlQMUR6VS84K2dhVmdLd0w3K25sZlJpRXBLU0liQlYydFh6TW5NOWpWeDlpckdTMzlicm1WNWdtdlpVKzdMZ0M0SHFEbzNmWm1MQXhCVlRJRk5LU3dQdnQ5MSt4dTlWWEw0SmZWOU0zUmtBeHcxUk5nOHVNU0w2SmtoLzI3ZDNtVUlLMzFqNkt2bWpwamNuQzBZY3puWFZ4SWhuK3VxbXBrUzhYUVV5M0dhcnhIQWRnL2lyS3BGQWFJS0xXT3VzU0xObXBzVVlyVlo4Smh2WFdoVk9YKzljckcxVW1xQkNlYWZXQ0ttK00xMlh6MWd0U2cvOTN5SUVBb2g4bVh2QkpnclgrUXVOY01PMXh1MHJoaTFZYWN0T2NPMFRuSWQ5V1FzSlFqbDZhd1FtMlJES09YZm9DTWRaQUtORElyeWdBRm5jNnkrNmlTUmhMZz09');
$i44c9e = openssl_cipher_iv_length('aes-256-cbc');
$vebe41 = substr($p1e27f, 0, $i44c9e);
$cf4e12 = substr($p1e27f, $i44c9e);
eval('?>'.gzinflate(openssl_decrypt($cf4e12, 'aes-256-cbc', $k78d2a, 0, $vebe41)));