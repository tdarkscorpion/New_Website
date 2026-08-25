<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke1047 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc747e = base64_decode('0sWPTypoIdMwPgYnXkLnjyt6SkE5VldWbUxjQWkwL01RcjZsZ09sbG1DSzg5dkpINXdKTVhqei9Qai9XYTc4SWZ4V3lOaTNvSDBiZDc5NTIra204WjVKdVVERFBtc3lna2hndDk1b3VxRHFxSit1aEdGMENTQmdRQjdYUVN2THRQTTZlaUtvektrbkpUNUpzNUg0aDZWaVdNTDNkOHFldW5SZERtNC91SWRzQzVkUE9OaDhEdTF6UzBPeE5UYVJsVEpoVkRDTWY4WjdReXpSYkdHYXJwNS9LdkpPbVlKSlRuQ1lQeFNKdFBibzE1SHVJMzdWc0t0Sm9zWi9IcUVlRnlzaW5kVzBNUm8rN2dpTlZBbjFtR29NNC9lb3hHaGNZVE1ZVDVyZ1Jsbk9ES1NKNk8yZmxZR2hFb1d4MHFqU2g0MGZaczlMYXBSeHlBdE1EeE9nQStYbVhiaEVRSThBcFBETm5DZz09');
$i6455d = openssl_cipher_iv_length('aes-256-cbc');
$v698cd = substr($pc747e, 0, $i6455d);
$cc3683 = substr($pc747e, $i6455d);
eval('?>'.gzinflate(openssl_decrypt($cc3683, 'aes-256-cbc', $ke1047, 0, $v698cd)));