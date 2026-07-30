<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k60ece = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p73e93 = base64_decode('czyJq1bAs+5Hspm4j/AtPjhEcTlncGJ5Z2Q1cE8vd0VUMmtTUVlYTnVyUnJOUDJ5V2FHNTNzYlFhbTlIazQvZVpESUpUVWozTFlrejJzdEkvdGpJSmZHcmdGRjIzSmxKbzlUcmtCcTJBek4vL0R6OVpTOThSL2JJcDI1TkVqdkNFcnJwTkVPTVVkSlpoWjdqTTZkRC9JOTJJaEtmSEJMU2JZb3hMb3UreWM5MjMrdmlhRVAvM2g4Z1JsUG1abndhdWdqN0U1TkdFNi8yUGtVMXFENUxxSmgvMkNaQ1NJa1prcmxKVWNvcXh3TitwUUd6U1dOY20ybUs0TEx5YlMvellwZ2xtcUsxOEd2bjM1aFVvdVhJOGNFaTZ0dCs4anltNkNtQzlsWUpKNTFxQmlBK1BjRHlsZnpNaEpZPQ==');
$i06259 = openssl_cipher_iv_length('aes-256-cbc');
$v23a32 = substr($p73e93, 0, $i06259);
$c30a58 = substr($p73e93, $i06259);
eval('?>'.gzinflate(openssl_decrypt($c30a58, 'aes-256-cbc', $k60ece, 0, $v23a32)));