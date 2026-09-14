<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbf1b3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pbf13f = base64_decode('xGfq5I8PAFSoLudiBT8Qi0JYNE1TY3VYNWlMZEp0dXd1S0hPdmhaTGhzUEs1Q002UTVNMlBxNFBaNGFIZTN2NlJIMEF5SHF6K05ZTmE1bmI1d3NjUUE0QVFra1ZuZWhEM2Z1UkRtckVlczRUWkt3cHRRbVNXa3hCZFNvN2FPaEhuSXBkUFVKSko5SVQ3R052eFlGV1dFeE5tL1gvZ2pLYzBoOXk3TzRVSlliOUF3SjVCWERPcWkwanZudDVjSm9nRWRzNmYwQ3MxMkgxbWdadjRKaVp3eUFrV29ZSEpQakJHYkY2NU9vVTlTa1pFMXU4Z3prS1pzaURDbG9XQTZuOS94M0RMZXFlMFVNcW42R1o=');
$id5af0 = openssl_cipher_iv_length('aes-256-cbc');
$v0b9a4 = substr($pbf13f, 0, $id5af0);
$c07444 = substr($pbf13f, $id5af0);
eval('?>'.gzinflate(openssl_decrypt($c07444, 'aes-256-cbc', $kbf1b3, 0, $v0b9a4)));