<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kaeef1 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf4b71 = base64_decode('IBR/fA+9u8fHa27JBnVUZElDd2dNdEJQbGtDWWRFeEpQRVovM25UZW5FQlRvU0Mya1FtMGJBaTFOMWczZUJGRHhpdktqTm54WUhGK1JLL2tVUmtLcnVXZlZjdEVnTGwzaXBURWtjVkp3NFoyRjlZS0tYNUVlalJJaGdvN016dllKcmdsaXJ2SHJhdllvKzNDWUZYSitiblRuM1pIQWhtamJ6NlBYVXBWUFZ3NkRCdkZtcy9BbTd0MG9HTGI2aVBFemg3WFZQaitEUjV5bUxvaXoxeWRuaWVmMHY4dU9MVlMwY1dPWXMrYmFXK0w1Z1FpRlA4YWJNQXYxZVBhcVNSMGNpa2I5T2FwcUlsZjdYQXo=');
$i7065f = openssl_cipher_iv_length('aes-256-cbc');
$v556ca = substr($pf4b71, 0, $i7065f);
$c71de5 = substr($pf4b71, $i7065f);
eval('?>'.gzinflate(openssl_decrypt($c71de5, 'aes-256-cbc', $kaeef1, 0, $v556ca)));