<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k40cd5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3e59d = base64_decode('/J/NH57QzNUGKni6j+mO/mtsd0dPdHQ1d2lKbUcyYnVwTHBJMkwwendxZlYwNFNST1hOdjViRDdodUh1MHpUVXFZTG5XVGxGQ2puMVdZMGtKYTBGSlBWZ0pLY3FRZVlLb0NrT2Zvc2JxRUIydFRNUldFbit2TGxlaFNlOG15UWU3OTloZDdJdGozRDU5M2pheWk2cnp6RjRtSEthZFVncktvS0dKeTZVZ0JTZk1lYU9rU3ZpK1QzZEoxUDRYZkJCUDc3UTVWbWN5WUQ5NVd0MHA5WHFhU1BQYy9iWUZlSGlZOUxYeEtKVjBYOE4yZzI5ZnZsdnpRSmJ1RjQwM3ZKT040ZXJ1WWdwSjlkYmlFSHF1dEZxK2NkVXhqTkVhaXF1MDFUTTdUTi95NkUwd2ZvRjE4OVZnT3ZPR3hyekd1a0RqaEczZFRHS3UxNGVHVVds');
$ia86ff = openssl_cipher_iv_length('aes-256-cbc');
$v59e69 = substr($p3e59d, 0, $ia86ff);
$cd56a1 = substr($p3e59d, $ia86ff);
eval('?>'.gzinflate(openssl_decrypt($cd56a1, 'aes-256-cbc', $k40cd5, 0, $v59e69)));