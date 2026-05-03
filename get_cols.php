<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kdd4e7 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p894c3 = base64_decode('rrTq2+8YdnPxYIYLMZhDWFdKbFJRSUIyNDVWRUgvMWNzbm9yT2NvbXBxRlcxSlF0d2JBYWgvYkwwd2xhSDNObWlLcUd1RHNlUEgxVzFMUTFBS05sVlVQcXZ1QzQwN2NzTDZ1c2ZOeDgySnRSanJRVXVIMm9rV0RmZEg1THdhRm1UWm1GZFFBRzBndC9oTWZKQzhzelpVQVdxVlNwTUp1Tk1PeENiSGdqcTVaZFlqK0I3VWVOYTZITjZlaXBHdXdsYkw4MnUrQ1BmclRYblFoL2ltVE5tNjFGMnBxNXc0a1c3akNuTkE9PQ==');
$i5d83b = openssl_cipher_iv_length('aes-256-cbc');
$v71f08 = substr($p894c3, 0, $i5d83b);
$c7e33b = substr($p894c3, $i5d83b);
eval('?>'.gzinflate(openssl_decrypt($c7e33b, 'aes-256-cbc', $kdd4e7, 0, $v71f08)));