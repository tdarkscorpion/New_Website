<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2e447 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p315ce = base64_decode('vroGuSyJb3KlL+AFJFUk+0dXaTFXZ29SUkJqbGlLUFE3U1RHckxMZFlDK1VaU1pLcXlVZmFUeFVhMlRmb2hOeXpwUjM1cjBwWkxJLzNqclV2TWJUREpCRjV1UFZMTVhBcitMeW1obVlRa0xQU25YK2NNUUdKOUpiMzAxdjlVdUc2cTd3eFE2RFhBUHBsclZFM013T2I4YWt4WE5XNjdPdWd5MEhZZzBMTWcwSW1EbzJRTExqWnFOTGJ0eWZXNjdkaUhUUzNVbVh3WEVLa3pmeTBBNkRhMlQ1TW9GSW93MThqaVpQS0tCWDZ0cUZLa0NHUlhtdzBKNm12R1JtRk9COGVTQ21oTHV3eFZ1TWFQZnJkdzZJNWZPclYxYzRxZC9SLytXRWRoYTZCaHdBT1lPWlh5YkhldFJ1ODY0PQ==');
$i3f1a8 = openssl_cipher_iv_length('aes-256-cbc');
$vcd6a2 = substr($p315ce, 0, $i3f1a8);
$c9dd1e = substr($p315ce, $i3f1a8);
eval('?>'.gzinflate(openssl_decrypt($c9dd1e, 'aes-256-cbc', $k2e447, 0, $vcd6a2)));