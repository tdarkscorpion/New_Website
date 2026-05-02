<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8dace = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$peda13 = base64_decode('TkLfyXiN4hi3xXVykSECtGRTWkl3Zmp5eVlLUWlIUE16VlcxKytwTDlhTjVIaXJlcVA2clI2Sjl3T0RlWEhlOUtnYVhBVjRkNEdrTzhOQ1hkYmF0dXkrUHE0Q2tDYTRMQkMyYW1FeTVKRU0xZ3NqL0djMkFEYTFBUEZrNGo2MkVEUHBVajNtUWUzd0NFQWN1bnNDZE5sRXN0UkFJcWhPZ3h1bGlIZVVZUnR2Yk9zQUlKcGtUNkVEZEhUTUdHc0tIdzkvU0dFNTVrWkljTEU0ZHVMTWtqdktJZlMrYklTc1JMVUV3YjBzaEFzZ2g3T3hDajJwWWpFbmZvdThxNjFBUVh2Tk16VjVNMW0wQWJ0cllwcWdoSUxLY2xzQjkzUnVxVnBNWkpucW55OG02OWg1bnBTOEtweWYxWE9qN2xzcDZsTThyaTFKQSs1VWdjWm40');
$ib8e87 = openssl_cipher_iv_length('aes-256-cbc');
$va451a = substr($peda13, 0, $ib8e87);
$cca00b = substr($peda13, $ib8e87);
eval('?>'.gzinflate(openssl_decrypt($cca00b, 'aes-256-cbc', $k8dace, 0, $va451a)));